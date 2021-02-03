const styled = require('vue-styled-components').default
import { Transition } from './Transition'

export const Alert = Transition.extend`
  margin: 10px;
  padding: 10px;
  font-size: 25px;
  text-align: center;
  color: white;
`
export const WarningAlert = Alert.extend`
  background-color: orange;
`
