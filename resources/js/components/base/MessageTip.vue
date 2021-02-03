<template>
  <span v-show="message" :class="`absolute flex flex-row space-x-2 top-0 right-0 p-4 text-left rounded-lg text-white bg-${message && message.status === 'OK' ? 'green-500' : 'red-500'}`">
    <svg v-if="message && message.status === 'OK'" class="animate-ping w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <svg v-else class="animate-ping w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span>{{ message && message.text || '' }}...</span>
  </span>
</template>

<script lang="ts">
import { Message } from '../../models/Message.interface'
import { Vue, Component, Prop } from 'vue-property-decorator'

@Component
export default class MessageTip extends Vue {
  @Prop() message: Message
}

</script>

<style>

</style>
