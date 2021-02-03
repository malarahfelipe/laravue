require('./bootstrap');
import Vue from 'vue'
(window as any)['Vue'] = Vue
import './plugins/firebase'
import App from './components/App.vue'
import router from './router'
import store from './store'

const app = new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
});
