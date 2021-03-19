<!DOCTYPE html>
<html>
<style>
body,html{
  margin: 0;
  height: 100%;
  background-color: #9fdeaf;
    overflow: hidden
}

.bgimg {
  height: 100%;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
    width: 100%;
    height: 90%;
    
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
    color: #333;
}

hr {
  margin: auto;
  width: 40%;
}
    #logo{
        width: 200px;
        height: 100px;
        margin-left: 43%;
    }    
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>

        <a href="index.html">
            <div>
                <img src="../images/logoheader.png" id="logo" title="medical tecnology logo">
            </div>
        </a>

    </p>
  </div>
  <div class="middle">
    <h1>Maintenance</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("March 15, 2029 14:20:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "End";
    setTimeout(() => {
        window.location.replace('index.html');
        }, 1000);
  }
}, 1000);
</script>

</body>
</html>
