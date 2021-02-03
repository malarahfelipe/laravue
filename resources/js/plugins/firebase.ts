const Auth = require('firebase-auth-lite').default

export const configs = {
  apiKey: "AIzaSyD1-CKKJQhtczVnogGidvx27Fzqn3WM0iw",
  authDomain: "builderall-test.firebaseapp.com",
  databaseURL: "https://builderall-test.firebaseio.com",
  projectId: "builderall-test",
  storageBucket: "gs://builderall-test.appspot.com",
  messagingSenderId: "262010994029",
  appId: "1:262010994029:web:109f6c8542add21f94ae64",
  measurementId: "G-GM8YN92CZ7"
}

export const auth = (customConfigs = {}) => new Auth(Object.assign(configs, customConfigs))
