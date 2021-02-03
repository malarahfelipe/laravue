<template>
  <div class="relative flex flex-col space-y-5 p-5">
    <MessageTip :message="message" />
    <h1 class="text-gray-500 mx-auto text-2xl">Clientes</h1>
    <TransitionFrom
      bg="green-500"
      direction="bottom"
      amount="10"
      class="rounded px-4 py-2 text-center"
    >
      <SpinText class="mr-5">🌎</SpinText>
      <span class="ml-4">👋 Hello world com tailwindcss + styled components </span>
      <span class="text-xs italic">(hover me)</span>
    </TransitionFrom>
    <div class="rounded p-5 border-green-500 mx-auto flex flex-col space-y-3 bg-cool-gray-100 w-full">
      <template v-if="isLoading">
        <BallPulseLoader />
      </template>
      <template v-else-if="clients && cities && filteredClients()">
        <template v-if="!client">
          <ClientSearchBar @on-search="onUpdateQuery" @on-create-client="(partClient) => client = partClient" />
          <ClientList :clients="filteredClients()" @on-edit="onEditClient" @on-exclude="onExcludeClient" />
        </template>
        <template v-else>
          <ClientForm :client="client" :cities="cities" @on-cancel="() => client = null" @on-save="onSaveClient" />
        </template>
      </template>
      <template v-else>
        <WarningAlert>Sem clientes ou cidades encontrados !</WarningAlert>
      </template>
    </div>
  </div>
</template>

<script lang="ts">
import MessageTip from './base/MessageTip.vue'
import { Client } from '../models/Client'
import { Message } from '../models/Message.interface'
import { City } from '../models/City'
import { Vue, Component } from 'vue-property-decorator'
import { SpinText } from './base/Transition'
import { WarningAlert } from './base/Alerts'
import TransitionFrom from './base/TransitionFrom.vue'
import BallPulseLoader from './base/BallPulseLoader.vue'
import ClientSearchBar from './ClientSearchBar.vue'
import ClientForm from './ClientForm.vue'
import ClientList from './ClientList.vue'
import Axios from 'axios'

@Component({
  name: 'app',
  components: {
    SpinText,
    MessageTip,
    TransitionFrom,
    WarningAlert,
    BallPulseLoader,
    ClientSearchBar,
    ClientForm,
    ClientList
  }
})
export default class App extends Vue {
  private isLoading: boolean = false
  private query: string = ''
  private clients: Client[] = null
  private client: Client = null
  private cities: City[] = null
  private message: Message = null

  async mounted() {
    await this.fetch()
  }

  async fetch(): Promise<void> {
    this.isLoading = true
    Promise.all([
      this.fetchClients(),
      this.fetchCities()
    ]).then((responses) => {
      console.log('responses', responses)
      const [ clients, cities ] = responses
      this.clients = clients
      this.cities = cities
    })
    .catch(() => {
      this.clients = null
      this.cities = null
    })
    .finally(() =>
      this.debounceLoading(false)
    )
  }

  filteredClients() {
    return this.clients && this.clients.filter(({ name }) => name.toLowerCase().includes(this.query.toLowerCase()))
  }

  onUpdateQuery(query: string): void {
    this.query = query
  }

  onEditClient(clientId: string) {
    this.client = { ...this.clients.find(({ id }) => clientId === id) }
  }

  debounceLoading(state: boolean) {
    setTimeout(() => this.isLoading = state, 1200)
  }

  setMessage(message: Message, debounce = 3000) {
    this.message = message
    setTimeout((): void => this.message = null, debounce)
  }

  async fetchClients(): Promise<Client[]> {
    return (await Axios.get(`/getClients`)).data
  }

  async fetchCities(): Promise<City[]> {
    return (await Axios.get(`/getCities`)).data
  }

  async onSaveClient(client: Client) {
    const operation: 'update' | 'insert' = client.id ? 'update' : 'insert'
    const index = operation === 'insert' ? this.clients.length : this.clients.findIndex(({ id }) => client.id === id)
    const endpoint = operation === 'insert' ? 'storeClient' : `editClients/${ client.id }`
    this.isLoading = true

    return this.onAsyncProcess(
      () => Axios.post<Client>(`/${ endpoint }`, client)
        .then(({ data: newClient }) => {
          this.clients.splice(index, 1, newClient)
          this.client = null
        }),
      'salvar cliente'
    )
  }

  async onExcludeClient(clientId: string) {
    const index = this.clients.findIndex(({ id }) => clientId === id)
    return this.onAsyncProcess(
      () => Axios.post(`/deleteClient/${ clientId }`)
        .then(() =>
          this.clients.splice(index, 1)
        ),
      'excluir cliente'
    )
  }

  async onAsyncProcess(promise: () => Promise<any>, name: string = 'processar solicitação') {
    this.isLoading = true
    return promise()
      .then(() =>
        this.setMessage({ status: 'OK', text: `Sucesso ao ${ name }` })
      )
      .catch(() =>
        this.setMessage({ text: `Erro ao ${ name }` })
      )
      .finally(() => this.debounceLoading(false))
  }

}
</script>

<style>

</style>
