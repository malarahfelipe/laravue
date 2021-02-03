<template>
  <div class="flex flex-col space-y-3">
    <label class="block">
      <span class="text-gray-700">Nome</span>
      <div class="relative flex flex-row w-full">
        <input class="form-input mt-1 w-full" placeholder="Ex: João" v-model="query" @input="onSearchChange">
        <Transition class="absolute right-2 top-3" :amount="1.5">
          <svg @click="onCreateClient" class="cursor-pointer text-green-500 w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </Transition>
      </div>
    </label>
  </div>
</template>

<script lang="ts">
import { Vue, Prop, Emit, Component } from 'vue-property-decorator'
import { onInputChange } from './base/Input.event'
import debounce from 'lodash.debounce'
import flow from 'lodash.flow'
import { Transition } from './base/Transition'
import { Client } from '../models/Client'

@Component({
  components: {
    Transition
  }
})
export default class ClientSearchBar extends Vue {

  private query = ''

  onSearchChange = flow(
    onInputChange,
    debounce(this.onSearch, 300)
  )

  @Emit()
  onSearch(value: string) {
    console.log('value.debounced', value)
    return value
  }

  @Emit()
  onCreateClient(): Partial<Client> {
    return { name: this.query }
  }
}
</script>

<style>

</style>
