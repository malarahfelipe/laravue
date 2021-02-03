<template>
  <div class="flex relative flex-col h-full text-center w-8/12 mx-auto items-center">
    <MessageTip :message="message" />
    <h1 class="text-xl my-auto">Registre-se ou realize login</h1>

    <div v-if="option" class="relative flex flex-col space-y-4 bg-gray-100 rounded mx-auto my-5 w-max p-5">
      <Transition
        direction="left"
        class="absolute -ml-2 top-2"
      >
        <svg
          @click="() => option = null"
          class="cursor-pointer w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
      </Transition>
      <div v-if="option === 'registrar'">
        <label class="block">
          <span class="text-gray-700">Nome</span>
          <input class="form-input mt-1 block w-full" placeholder="Ex: João" v-model="credentials.name">
        </label>
      </div>
      <label class="block">
        <span class="text-gray-700">Email</span>
        <input class="form-input mt-1 block w-full" placeholder="Ex: João" v-model="credentials.email">
      </label>
      <label class="block">
        <span class="text-gray-700">Senha</span>
        <input class="form-input mt-1 block w-full" type="password" placeholder="Ex: João" v-model="credentials.password">
      </label>
      <TransitionFrom
        :bg="option === 'registrar' ? 'blue-500' : 'green-500'"
        class="rounded"
      >
        <button
          type="button"
          class="w-full px-4 py-2 uppercase"
          @click="(option === 'registrar' ? signUp : signIn)()"
        >
          {{ option }}
        </button>
      </TransitionFrom>
    </div>
    <div v-else class="flex flex-col space-y-2 w-8/12 m-auto">
      <TransitionFrom
        bg="blue-500"
        class="rounded"
      >
        <button
          type="button"
          class="w-full px-4 py-2"
          @click="() => option = 'registrar'"
        >
          Registrar
        </button>
      </TransitionFrom>
      <TransitionFrom
        bg="green-500"
        class="rounded"
      >
        <button
          type="button"
          class="w-full px-4 py-2"
          @click="() => option = 'logar'"
        >
          Login
        </button>
      </TransitionFrom>
    </div>
  </div>
</template>

<script lang="ts">
import MessageTip from './base/MessageTip.vue'
import { Transition } from './base/Transition'
import TransitionFrom from './base/TransitionFrom.vue'
import { Vue, Prop, Component, Emit } from 'vue-property-decorator'
import { Credentials, Session } from '../store/session'
import { sessionStore } from '../store'
import { Message } from '../models/Message.interface'

type OptionLogin = 'registrar' | 'logar'

@Component({
  components: {
    Transition,
    MessageTip,
    TransitionFrom
  }
})
export default class Login extends Vue {
  private option: OptionLogin = null
  private message: Message = null
  private credentials: Credentials = { email: '', password: '' }

  async setMessage(message: Message) {
    this.message = message
    return new Promise<void>((resolve) =>
      setTimeout((): void => {
        this.message = null
        resolve()
      }, 1500)
    )
  }

  showSuccessMessage(option: OptionLogin) {
    return (session: Session) => this.setMessage({ status: 'OK', text: `Sucesso ao ${ option } com ${ session.user.email }` })
  }

  showErrorMessage(option: OptionLogin) {
    return (error: Error) => this.setMessage({ text: `Erro ao ${ option } com ${ this.credentials.email }` })
  }

  async processOptionRequest(option: OptionLogin, request: () => Promise<Session>) {
    return request()
      .then(this.showSuccessMessage(option))
      .catch(this.showErrorMessage(option))
      .finally(() => this.$router.replace('/'))
  }

  signIn() {
    return this.processOptionRequest('logar', () => sessionStore.signIn(this.credentials))
  }

  signUp() {
    return this.processOptionRequest('registrar', () => sessionStore.signUp(this.credentials))
  }

}
</script>

<style>

</style>
