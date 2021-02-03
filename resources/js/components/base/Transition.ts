const styled = require('vue-styled-components').default

export type TransitionProps = {
  direction:
    'left' | 'right' | 'top' | 'bottom'
  amount?: string
}

const transitionProps = { direction: { type: String, default: 'top' }, amount: [ String, Number ] }

export const Transition = styled('span', transitionProps)`
  transition: 0.3s ease-in-out;
  cursor: pointer;
  &:hover {
    transform: translate${
      (props: TransitionProps) => [ 'left', 'right' ].includes(props.direction) ? 'X' : 'Y'
    }(
      ${
        (props: TransitionProps) => [ 'left', 'top' ].includes(props.direction) ? '-' : ''
      }${
        (props: TransitionProps) => props.amount ? +props.amount : '5'
      }px)
  }
`

export const SpinText = styled.span`
  position: absolute;
  -webkit-animation:
    moving
    1.5s
    ease-out
    0s
    alternate
    infinite
    none
    running;
  animation:
    moving
    1.5s
    ease-out
    0s
    alternate
    infinite
    none
    running;
  @keyframes moving {
    from {transform: rotate(0);}
    to {transform: rotate(90deg);}
  }
`
