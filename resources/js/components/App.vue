<template>
  <div class="w-full h-full flex flex-col" style="height: 100vh">
    <TransitionFrom
      v-if="isLoggedIn()"
      bg="red-500"
      class="w-min px-4 py-2 rounded"
    >
      <button
        type="button"
        @click="onLogout"
        class="relative flex flex-row space-x-5"
      >
        <Transition
          direction="left"
          class="absolute -ml-3 -top-1"
        >
          <svg
            class="absolute w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
        </Transition>
        <span>DESLOGAR</span>
      </button>
    </TransitionFrom>
    <router-view />
  </div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator"
import { sessionStore } from "../store"
import { Transition } from "./base/Transition"
import TransitionFrom from './base/TransitionFrom.vue'

@Component({
  name: 'App',
  components: {
    Transition,
    TransitionFrom
  }
})
export default class App extends Vue {

  isLoggedIn() {
    return !!sessionStore.isLogged && this.$route.path === '/'
  }

  onLogout() {
    sessionStore.logout()
    location.reload()
  }
}
</script>

<style>

</style>
