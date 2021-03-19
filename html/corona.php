<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Corona</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" href="../styles/corona.css" type="text/css"/>   
        <style>
            .container-corona{
                width: 100%;
                height: auto;
            }
            .move{
                animation-name: photo;
                animation-duration: 4s;
                animation-delay: 1s;
                transition: all 3s ;
            }
            .move-two{
                animation-name: photo-two;
                animation-duration: 4s;
                animation-delay: 1s;
                transition: all 3s ;
            }
            @keyframes photo {
              0%   {left:-500px; top:0px;}
              25%  {left:0px; top:0px;}
            } 
            @keyframes photo-two {
              0%   {right:-500px; top:0px;}
              25%  {right:0px; top:0px;}
            }
            /* Slideshow container */
            .slideshow-container {
              position: relative;
              background: #f1f1f1f1;
            }
            .section-slide{
                width: 100%;
                height: 500px;
            }
            /* Slides */
            .mySlides {
              display: none;
              padding: 80px;
              text-align: center;
            }

            /* The dot/bullet/indicator container */
            .dot-container {
                text-align: center;
                padding: 20px;
                background: #f1f1f1f1;
            }

            /* The dots/bullets/indicators */
            .dot {
              cursor: pointer;
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
            }

            /* Add a background color to the active dot/circle */
            .active, .dot:hover {
              background-color: #19e3eb;
            }

            /* Add an italic font style to all quotes */
            q {font-style: italic;}
            /* Add a blue color to the author */
            .author {
                color: cornflowerblue;
                margin-top: 12px;
                font-weight: 600;
            }
            /* slide image*/
            .mySlides img{
                text-align: center;
                width: 100px;
                height: 100px;
                border-radius: 50%;
            }
            .mySlides div{
                padding-bottom: 20px;
            }
            .mySlides q{
                font-size: 24px;
                padding-bottom: 10px;
            }
            .nav-text{
                padding: 30px auto;
                margin: 0px auto;
                text-align: center;
                background-color: #333;
                
                
            }
            .nav-text p{
                text-align: center;
                color: #fff;
                padding: 15px;
            }
             .intro_text {
          margin-top: 10px; 
          font-size: 20px; 
        }
        .intro_text ol{
            margin-left: 30px;
        }
        .intro_text ol li {
            
        }
        .dropbtn {
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 100%;
            width: 60px;
            height: 60px;
            border: 2px solid #00d4d4;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color: #2980B9;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
            left: -78%;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
        </style>
    </head>
    <body>
        
    
        <div class="super_container">

            <!-- start Header -->

            <header class="header trans_400" id="headerlogo">
                <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

               	<!-- Logo -->
			<div class="logo">
				<a href="index.php">
					<div><img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav" style="margin-left:60px;">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php#BestCare ">Best Care</a></li>
					<li><a href="index.php#whych">Why choose us?</a></li>
                    <li><a href="index.php#Services">Services</a></li>
					<li><a href="index.php#offers">Offers</a></li>
                    <li><a href="corona.php#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                
                <div class="dropdown">
                    
                  <img src="../images/person.png" onclick="myFunction()" class="dropbtn"/>
                  <div id="myDropdown" class="dropdown-content">
                    <a href='http://localhost/group_project/medicaltecnology-project/mt/html/login.php'>Sign in</a>
                  </div>
                </div>

            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
                
                </div>
            </header>

           <div class="container-corona">
               <div class = 'contient-corona' >
                    <img src='../images/header-corona.jpg' alt="header image">
                   <h3 class="ml15 h-cont">
                      <span class="word">covid</span>
                      <span class="word">- 19</span>
                   </h3>
                   
               </div>
               <div class="nav-text">
                <div>
                  <p class="typewrite" data-period="2000" data-type='[ "Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.","Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19." ]'>
                    <span class="wrap"></span>
                  </p>
                </div>
               
               </div>
                 <div class="section-confirmed move">
                      <div id="total" class = 'card'></div>
                      <div id='recover' class = 'card'></div>
                      <div id="sick" class = 'card'></div>
                      <div id="dead" class = 'card'></div>

                </div>
                             
               <div class="section-confirmed-graph">
                <div>
                    <iframe src="https://ourworldindata.org/grapher/total-deaths-and-cases-covid-19" loading="lazy" style="width: 95%; height: 500px; border: 0px none;"></iframe>
                </div>
                <div>
                    <iframe src="https://ourworldindata.org/grapher/total-deaths-covid-19" loading="lazy" style="width: 95%; height: 500px; border: 0px none;"></iframe>
                </div>                
               </div>
               <div class="section-advices">
                    <h4 class="h-advices">How to protect yourself and others from infection</h4>
                       <div class="content-advices" style="width: 100%;padding: 0 20px;">
                            
                           <div><img style='width:100%;' src="../images/d2.png" alt='img-one'></div>
                           <div>
                                <p class="text-justify">
                                    Always wash your hands with soap and running water when hands are visibly dirty. 
                                    If your hands are not visibly dirty you can use an alcohol-based hand rub or soap and water.
                               </p>
                           </div>                            
                           <div><img src="../images/d1.png" alt='img-two'></div>                
                            
                           <div>
                               <p class="text-justify">
                                   Contact your nearest health care provider if you have fever and either cough or difficulty breathing, along with a history of travelling to one of the epidemic countries.
                               </p>
                           </div>                
                            
                           <div><img style='width:95%;' src='../images/d3.png' alt='img-three'></div>                
                            
                           <div>
                               <p class="text-justify">
                                   Cover your mouth and nose with disposable tissue when coughing or sneezing and dispose of tissue immediately after use.
                               </p>
                           </div>                
                            
                           <div><img src='../images/d4.png' alt='img-four'></div>                
                            
                           <div>
                               <p class="text-justify">
                                   Cough or sneeze into your upper sleeve or bended arm if a tissue is not available.
                               </p>
                           </div>                
                       
                   </div>
               
                        </div>
               
                        <div class="section-video" style="margin-top: 5%;">
                    
                            <div class="move-two">
                                <iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/U8r3oTVMtQ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
               
                        </div>
                    <div class="section-slide">
                        <div class="slideshow-container" style="height:300px;margin-top: 75px;">

                            <div class="mySlides">
                               <div> <img src="../images/doc-1.jpg" alt="image1"></div>
                              <q>"I love you the more in that I believe you had liked me for my own sake and for nothing else"</q>
                              <p class="author">John Keats</p>
                            </div>

                            <div class="mySlides">
                              <div> <img src="../images/doc-3.jpg" alt="image1"></div>
                              <q>"But man is not made for defeat. A man can be destroyed but not defeated."</q>
                              <p class="author">Ernest Hemingway</p>
                            </div>

                            <div class="mySlides">
                               <div> <img src="../images/doc-7.jpg" alt="image1"></div>
                              <q>"I have not failed. I've just found 10,000 ways that won't work."</q>
                              <p class="author">Thomas A. Edison</p>
                            </div>
                        </div>

                        <div class="dot-container">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
               
                    </div>
            
                    </div>
        
                   </div>

        <!-- start Footer -->

        <footer class="footer" id="Contactus">
                <div class="footer_content">
                    <div class="container">
                        <div class="row">

                            <!-- Footer About -->
                            <div class="col-lg-3 footer_col">
                                <div class="footer_about">
                                    <div class="logo">
                                        <a href="index.php">
                                            <div><img src="../images/logofooter.png" title="medical tecnology logo"></div>
                                        </a>
                                     </div>
                                </div>
                            </div>

                            <!-- Footer Contact Info -->
                            <div class="col-lg-3 footer_col">
                                <div class="footer_contact">
                                    <div class="footer_title">Contact Info</div>
                                    <ul class="contact_list">
                                        <li>+53 345 7953 32453</li>
                                        <li>01121378325</li>
                                        <li>MedicalTecnologyTeam@gmail.com</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Locations -->
                            <div class="col-lg-3 footer_col">
                                <div class="footer_location">
                                    <div class="footer_title">Our Locations</div>
                                    <ul class="locations_list">
                                        <li>
                                            <div class="location_title">Cairo</div>
                                            <div class="location_text">Mehwar 80 Axis - El Qahera El Gididaa Cairo, Egypt 11835</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 footer_col footermap">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=new%20cairo%20academy&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                                    <div class="copyright">
                                    Copyright &copy; Medical Tecnology Team
                                    </div>
                                     <ul class="d-flex flex-row align-items-center justify-content-start" style="margin-left: 75%;">
                                            <li style="padding-left: 10px;"><a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li style="padding-left: 10px;"><a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li style="padding-left: 10px;"><a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>			
                </div>
            </footer>
            <!-- End Footer -->

      
            <!--End container-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
       <script>
            fetch('https://api.thevirustracker.com/free-api?global=stats')
          .then((response) => {
            return response.json();
          })
          .then((data) => {


          document.getElementById('total').innerHTML = `<div class="stats">
              <div class="factor"><h3 style ='color: #d63031'>Infected</h3></div>
              <div class="number">${data.results[0].total_cases}</div>
            </div>`;

          document.getElementById('recover').innerHTML = `<div class="stats">
              <div class="factor"><h3 style ='color: #00b894'>Recovered</h3></div>
              <div class="number">${data.results[0].total_recovered}</div>
            </div>`;

          document.getElementById('sick').innerHTML = `<div class="stats">
              <div class="factor"><h3 style ='color: #0984e3'>Sick</h3></div>
              <div class="number">${data.results[0].total_active_cases}</div>
            </div>`;

          document.getElementById('dead').innerHTML = `<div class="stats">
              <div class="factor"><h3 style ='color: red'>Deaths</h3></div>
              <div class="number">${data.results[0].total_deaths}</div>
            </div>`;    
          });
        
        </script>
        <script>
          var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 3000); // Change image every 3 seconds
            }
        </script>
        <script>
            var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
                }

                setTimeout(function() {
                that.tick();
                }, delta);
            };

            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                      new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                document.body.appendChild(css);
            };
        </script>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../plugins/greensock/TweenMax.min.js"></script>
        <script src="../plugins/easing/easing.js"></script>
        <script src="../plugins/parallax-js-master/parallax.min.js"></script>
        <script src="../styles/bootstrap-4.1.2/popper.js"></script>
        <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
        <script src="../plugins/greensock/TimelineMax.min.js"></script>
        <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
        <script src="../js/custom.js"></script>
         <script>
            anime.timeline({loop: true})
              .add({
                targets: '.ml15 .word',
                scale: [14,1],
                opacity: [0,1],
                easing: "easeOutCirc",
                duration: 800,
                delay: (el, i) => 800 * i
              }).add({
                targets: '.ml15',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
              });
        </script>
         <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
    </body>
</html>