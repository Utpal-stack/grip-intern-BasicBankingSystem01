
<style>
body {
  background-color: #fff;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: black;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
  position : absolute;
  top : 43%;
  left : 30%;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
