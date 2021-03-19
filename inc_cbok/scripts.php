

        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../styles/bootstrap-4.1.2/popper.js"></script>
        <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
        <script src="../plugins/greensock/TimelineMax.min.js"></script>
        <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
        <script src="../js/custom.js"></script>
        <script>
            var today = new Date(),
                dd = String(today.getDate()).padStart(2, '0'),
                mm = String(today.getMonth() + 1).padStart(2, '0'), //January is 0!
                yyyy = today.getFullYear(),
                dR = document.getElementById('date-register');
            today =  mm + '/' + dd + '/' + yyyy;
            dR.innerHTML = today;
        </script>
        <script>
            // Set the date we're counting down to
            var mm = 'March',
                dd = '18',
                yy = '2020',
                hour = '21',
                min = '58',
                sec = '00';
            
            var countDownDate = new Date(mm +' '+ dd +","+' '+ yy +' '+ hour + ':' + min +':' + sec ).getTime();/* counter*/

            // Update the count down every 1 second
            var x = setInterval(function() {

              // Get today's date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24)),
                  hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                  minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                  seconds = Math.floor((distance % (1000 * 60)) / 1000),
                  start = document.getElementById('startRegister'),  
                  counterRegister = document.getElementById('counter-register'),  
                  cancelRegister = document.getElementById('cancel-register');  


              // Output the result in an element with id="counter-registe"
              document.getElementById("counter-register").innerHTML = days + " d : " + hours + " h : "
              + minutes + " m : " + seconds + " s ";

              // If the count down is over, write some text, and do some operation 
              if (distance < 0) {
                clearInterval(x);
                  setTimeout(() => { counterRegister.innerHTML = " Time end"; }, 400);
                  setTimeout(() => { cancelRegister.style.display = 'none'; }, 500);
                  setTimeout(() => { start.style.display = 'block'; }, 1000);
//                  setTimeout(() => { window.location.replace('chat-box.html')}, 1005);

              }
            }, 1000);

        </script>
    </body>
</html>