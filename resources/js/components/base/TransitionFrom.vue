<template>
  <Transition :class="`text-${ text } bg-${ bg } border border-${ bg } hover:bg-${ text } hover:text-${ bg }`" v-bind="$attrs">
    <slot />
  </Transition>
</template>

<script lang="ts">
import { Transition } from './Transition'

export default {
  name: 'TransitionFrom',
  components: { Transition },
  props: {
    bg: {
      type: String,
      default: 'primary'
    },
    text: {
      type: String,
      default: 'white'
    }
  }
}
</script>

<style>

</style>
