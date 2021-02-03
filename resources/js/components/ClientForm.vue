<template>
  <div class="flex flex-col space-y-3">
    <label class="block">
      <span class="text-gray-700">Nome</span>
      <input class="form-input mt-1 block w-full" placeholder="Ex: João" v-model="client.name">
    </label>

    <label class="block">
      <span class="text-gray-700">Cidade</span>
      <select class="form-select mt-1 block w-full" v-model="client.cityCode">
        <option :value="city.code" v-for="(city, index) in cities" :key="index">
          {{ city.name }}
        </option>
      </select>
    </label>
    <div class="flex flex-row space-x-3">
      <TransitionFrom bg="red-400" class="w-full rounded">
        <button type="button" class="w-full px-4 py-2" @click="onCancel"> CANCELAR </button>
      </TransitionFrom>
      <TransitionFrom bg="green-400" class="w-full rounded">
        <button type="button" class="w-full px-4 py-2" @click="onSave"> SALVAR </button>
      </TransitionFrom>
    </div>
  </div>
</template>

<script lang="ts">
import { City } from '../models/City'
import { Client } from '../models/Client'
import TransitionFrom from './base/TransitionFrom.vue'
import { Vue, Prop, Component, Emit } from 'vue-property-decorator'

@Component({
  components: {
    TransitionFrom
  }
})
export default class ClientForm extends Vue {
  @Prop() client: Client
  @Prop() cities: City[]

  mounted() {
    console.log('this.client', this.client)
  }

  @Emit()
  onCancel(): string {
    return this.client.id
  }

  @Emit()
  onSave(): Client {
    return this.client
  }
}
</script>

<style>

</style>
