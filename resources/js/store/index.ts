import Vue from 'vue'
import Vuex from 'vuex'
import { getModule } from 'vuex-module-decorators'
import createPersistedState from 'vuex-persistedstate'
import SessionStore from './session'

Vue.use(Vuex)

export const store = new Vuex.Store({
  modules: {
    sessionStore: SessionStore,
  },
  plugins: [ createPersistedState({ storage: window.localStorage, paths: ['sessionStore'], fetchBeforeUse: true }) ],
})
export default store

export const sessionStore = getModule<SessionStore>(SessionStore, store)
