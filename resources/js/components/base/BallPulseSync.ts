
const styled = require('vue-styled-components').default

export const BallPulseSync = styled.div`
  text-align: center;
  @keyframes ball-pulse-sync {
    33% {
      transform: translateY(10px);
    }
    66% {
      transform: translateY(-10px);
    }
    100% {
      transform: translateY(0);
    }
  }
  > div {
    background-color: lightblue;
    border-radius: 100%;
    width: 15px;
    height: 15px;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    display: inline-block;
  }

  > div:nth-child(1) {
    animation-name: ball-pulse-sync;
    animation-delay: 0.7s;
    animation-duration: 0.7s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
  }

  > div:nth-child(2) {
    animation-name: ball-pulse-sync;
    animation-delay: 0.14s;
    animation-duration: 0.7s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
  }

  > div:nth-child(3) {
    animation-name: ball-pulse-sync;
    animation-delay: 0.21s;
    animation-duration: 0.7s;
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
  }
`
