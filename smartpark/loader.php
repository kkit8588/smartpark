<style>

  .progress-loader {
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  width: 250px;
  background: rgba(26, 123, 194, 0.3);
  height: 10px;
  border-radius: 7px;
}

.progress {
  width: 1px;
  height: 10px;
  border-radius: 7px;
  background: #1a7bc2;
  transition: 0.5s;
  animation: loading_44 5s cubic-bezier(.4,1.01,1,1) infinite;
}

@keyframes loading_44 {
  0% {
    width: 0%;
  }
  25% {
    width: 25%;
  }

  50% {
    width: 50%;
  }
  75% {
    width: 75%;
  }
  
  100% {
    width: 100%;
  }
}

@keyframes car {
  0% {
    transform: translateX(0%);
  }
  25% {
    transform: translateX(25%);
  }

  50% {
    transform: translateX(50%);
  }
  75% {
    transform: translateX(75%);
  }
  
  100% {
    transform: translateX(100%);
  }
}

.loaderFather{
  position: fixed;
  height: 100vh;
  width: 100%;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background-color: #cee3e2;
}
#progresswrapper{
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
}
#imagewrapper{
  width: 250px;
  top: 42%;
  left: 37%;
  position: absolute;
  transform: translate(-50%, -50%);
  animation: car 5s cubic-bezier(.4,1.01,1,1) infinite;
}
#imageloader{
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
</style>
<div class="loaderFather d-none">
  <div id="progresswrapper">
    <div class="progress-loader">
        <div class="progress"></div>
    </div>
  </div>
  <div id="imagewrapper">
    <img src="../upload/videorender.gif" id="imageloader" style="
    width: 15vh; ">
  </div>
</div>