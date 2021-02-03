import { sessionStore } from '../store'
import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import Home from '../components/Home.vue'
import Login from '../components/Login.vue'

Vue.use(VueRouter)

const auth = (to: any, from: any, next: any) => {
  if (!sessionStore.isLogged)
    return next('/login')
  else
    return next()
}

export const routes: Array<RouteConfig & { meta: { title: string, menu?: boolean } & object }> = [
  {
    path: '/',
    name: 'home',
    component: Home,
    meta: {
      title: 'Página Principal',
    },
    beforeEnter: auth
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      title: 'Login de usuário',
    },
  }
  //Routes end
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router
