<template>
  <div class="flex flex-col space-y-1 cursor-pointer">
    <Transition
      v-for="(client, index) in clients"
      :key="index"
      class="rounded bg-gray-50 p-2 flex flex-row justify-between shadow-md"
    >
      <span>{{ client.name }}</span>
      <div class="flex flex-row space-x-2">
        <Transition :amount="1.5" @click="onEdit(client)">
          <svg class="cursor-pointer hover:text-yellow-500 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
        </Transition>
        <Transition :amount="1.5" @click="onExclude(client)">
          <svg class="cursor-pointer hover:text-red-500 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
        </Transition>
      </div>
    </Transition>
  </div>
</template>

<script lang="ts">
import { Client } from '../models/Client'
import { Transition } from './base/Transition'
import { Vue, Prop, Component, Emit } from 'vue-property-decorator'

@Component({
  components: {
    Transition
  }
})
export default class ClientList extends Vue {
  @Prop() clients: Client[]

  @Emit()
  onEdit({ id }: Client) {
    return id
  }

  @Emit()
  onExclude({ id }: Client) {
    return id
  }

}
</script>

<style>

</style>
