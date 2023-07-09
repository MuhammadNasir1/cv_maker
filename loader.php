
  <style>
    *{
     margin: 0;
     padding: 0;
    }
#loader{

  /* display: none; */
  position: absolute;
   height: 100vh;
  width: 100%;
  background-color: white;
  z-index: 99999;
}
.loaders {
  text-align: center;
  font-family: ‘Arial Narrow’, sans-serif;
  font-weight: 600;
  font-size: 3.1em;
  color: #C21010;
}

.loaders span {
  position: relative;
  top: 0.63em;  
  display: inline-block;
  /* text-transform: uppercase;   */
  opacity: 0;
  transform: rotateX(-90deg);
}

.let1 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.1s;
}

.let2 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.2s;
}

.let3 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.6s;
}

.let4 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.4s;

}

.let5 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.5s;
}

.let6 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.6s;
}

.let7 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.7s;
}
.let8 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.8s;
}
.let9 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.9s;
}
.let10 {
  animation: drop 1.6s ease-in-out infinite;
  animation-delay: 1.9s;
}

@keyframes drop {
    10% {
        opacity: 0.5;
    }
    20% {
        opacity: 1;
        top: 3.78em;
        transform: rotateX(-360deg);
    }
    80% {
        opacity: 1;
        top: 3.78em;
        transform: rotateX(-360deg);
    }
    90% {
        opacity: 0.5;
    }
    100% {
        opacity: 0;
        top: 6.94em
    }
}
</style>
<div  id="loader">
<h1 class="loaders">
    <span class="let1">C</span><span class="let2">V</span>

    <span class="let3">b</span><span class="let4">u</span><span class="let5">i</span><span class="let6">l</span><span class="let7">d</span><span class="let8">e</span><span class="let9">r</span><span class="let10">s</span>
  </h1>
</div>
<script>

  // function loadfunction(){
  
  // }
  // window.addEventListener('DOMContentLoaded', function() {
  //   var loader = document.getElementById('loader');
  //   loader.style.display = 'block';
  // });
  
  // window.addEventListener('beforeunload', function() {
  //   var loader = document.getElementById('loader');
  //   loader.style.display = 'block';
  // });
</script>

