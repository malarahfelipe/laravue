import { Module, VuexModule, Action, Mutation } from "vuex-module-decorators"
import axios from 'axios'
import { auth } from "../plugins/firebase"
import Axios from "axios"

export type Credentials = {
  name?: string
  email: string
  password: string
}
export type User = {
  uid?: string
  name: string
  email: string
}
export type Session = {
  user: User
}
@Module({
  name: 'sessionStore',
  preserveState: true,
})
export default class SessionStore extends VuexModule {

  _session: Session = { user: null }

  @Action({commit: 'select'})
  async signIn(credentials: Credentials): Promise<Session> {
    const Auth = auth()
    console.log('Auth', Auth)
    await Auth.signIn(credentials.email, credentials.password)
    const uid = Auth.user.localId
    console.log('uid', uid)
    const user = await (await Axios.get(`/getUserByUid/${ uid }`)).data
    console.log('userByUid', user)
    return { user } as Session
  }

  @Action({commit: 'select'})
  async signUp(credentials: Credentials): Promise<Session> {
    const Auth = auth()
    await Auth.signUp(credentials.email, credentials.password)
    const { localId: uid } = Auth.user
    const user = { ...credentials, uid, password: '' }
    await Axios.post(`/storeUser`, user)
    return { user } as Session
  }

  get session(): Session {
    return this._session
  }

  get isLogged(): boolean {
    return !!(this.session?.user)
  }

  @Mutation
  select(session: Session): void {
    this._session = session
  }

  @Mutation
  setUser(user: User) {
    this._session.user = user
  }

  @Mutation
  logout() {
    this._session = { user: null }
  }

}
