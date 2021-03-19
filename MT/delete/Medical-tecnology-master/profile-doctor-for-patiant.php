<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="medical tecnology">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/ico" href="../images/iconstwo.png" />
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" href="../styles/profile-doctor-for-patiant.css" type="text/css"/>    

</head>
<body>

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div><img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html#BestCare">Best Care</a></li>
					<li><a href="index.html#whych">Why choose us?</a></li>
                    <li><a href="index.html#Services">Services</a></li>
					<li><a href="index.html#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                <div class="button header_button b2">
                    <a href='#'>logout</a>
                </div>
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
            
		</div>
	</header>
    
   <div class="container-doctor">
            <div class="main-section">
                <div class="column-one">
                    <div class="profile-img c1">
                        <img src="../images/doc-1.jpg" class="doctor-image rounded-circle rounded float-left">
                    </div>
                    <div class="profile-info c1">
                        <h4>Doctor <span>Omar reda</span></h4>

                        <h5 style="color: #57ccc3; font-size: 16px;">Dermatology</h5>

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>

                        <h5>
                            <span class="p-icon"><img src='../images/location.png' style="width: 15px;" class = 'edit-icon rounded float-left'/></span>Badr,Al Qahirah,Egypt
                        </h5>

                        <h5>
                            <span class="p-icon"><img src='../images/mony.png' class = 'edit-icon rounded float-left'/></span>Fees <span >200 <span style="color: #57ccc3; font-size: 20px;">L.E</span></span>
                        </h5>
                        <h5>
                            <span class="p-ic on"><img src='../images/phone.png'class = 'edit-icon rounded float-left'/></span>01121378325
                        </h5>
                    </div>
                 
            </div>
                <!----------------------------------------------------------------->
                <div class="column-two">
                    <div class="main-table-time">
                        <div class="col-title">
                            <p class="col-text">Booking Time</p> 
                        </div>
                         <div class="row time-table-column">
                            <div class="col-sm">
                                <div class='sub-table'>
                                    <div class="sub-col-title">
                                        <p class="sub-col-text">today</p> 
                                    </div>
                                    <div class="time-content">
                                        <h6 class="t-clo">12:00 PM</h6>
                                        <h6 class="t-clo">12:30 PM</h6>
                                        <h6 class="t-clo">01:00 PM</h6>
                                        <h6 class="t-clo">01:30 PM</h6>
                                        <h6 class="t-clo">02:00 PM</h6>
                                        <h6 class="t-clo">02:30 PM</h6>
                                    </div>
                                     <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                </div>                        
                             </div>
                            <div class="col-sm">
                                <div class='sub-table'>
                                    <div class="sub-col-title">
                                        <p class="sub-col-text">tomorrow</p> 
                                    </div>   
                                    <div class="time-content">
                                        <h6 class="t-clo">12:00 PM</h6>
                                        <h6 class="t-clo">12:30 PM</h6>
                                        <h6 class="t-clo">01:00 PM</h6>
                                        <h6 class="t-clo">01:30 PM</h6>
                                        <h6 class="t-clo">02:00 PM</h6>
                                        <h6 class="t-clo">02:30 PM</h6>
                                    </div>
                                     <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                </div>
                                
                             </div>
                            <div class="col-sm">
                                <div class='sub-table'>
                                    <div class="sub-col-title">
                                        <p class="sub-col-text">wed 23/3</p> 
                                    </div> 
                                    <div class="time-content">
                                        <h6 class="t-clo">12:00 PM</h6>
                                        <h6 class="t-clo">12:30 PM</h6>
                                        <h6 class="t-clo">01:00 PM</h6>
                                        <h6 class="t-clo">01:30 PM</h6>
                                        <h6 class="t-clo">02:00 PM</h6>
                                        <h6 class="t-clo">02:30 PM</h6>
                                    </div>
                                     <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                </div>                        
                             </div>
                             <div class="col-sm">
                                <div class='sub-table'>
                                    <div class="sub-col-title">
                                        <p class="sub-col-text">tus 12/3</p> 
                                    </div>
                                    <div class="time-content">
                                        <h6 class="t-clo">12:00 PM</h6>
                                        <h6 class="t-clo">12:30 PM</h6>
                                        <h6 class="t-clo">01:00 PM</h6>
                                        <h6 class="t-clo">01:30 PM</h6>
                                        <h6 class="t-clo">02:00 PM</h6>
                                        <h6 class="t-clo">02:30 PM</h6>
                                    </div>
                                    <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                </div>                        
                             </div>
                          </div>

                        </div>
                    </div>
                </div>
       <!---->
            <div class='col-xl-'>
                <div class="row table-info">

                          <div class="col-md-11 table-title">
                                <h6><span class="icon"><img class ='edit-icon rounded float-left' src="../images/icon!.png"/></span>information</h6>
                          </div>

                          <div class="col-md-1 table-title">
                              <img class ='edit-icon rounded float-right' src = '../images/edite.png' style='cursor: pointer;'/>
                          </div>
                    <div class='table-text'>
                        <p>PhD.Degree in Dermatology,Cosmetology &amp; Laser Therapy Msc. In Dermatology Faculty Of Medicine National Laser Institute</p>
                    </div>
                </div>
            </div>
           <div class='col-xl- feed-back'>
                <div class="row table-info">

                          <div class="col-md-11 table-title">
                                <h6><span class="icon"><img class ='edit-icon rounded float-left' src="../images/reply.png"/></span>Feedback</h6>
                          </div>

                          <div class="col-md-1 table-title">
                              <img class ='edit-icon rounded float-right' src = '../images/edite.png' style='cursor: pointer;'/>
                          </div>
                    <div class='table-feedback'>
                        <div class='row'>
                            <div class='col-12'>
                                <div class="feedback-img">
                                    <img src="../images/person_4.jpg" class="doctor-feedback rounded-circle rounded float-left">
                                </div>
                                <h5>Omar Reda</h5>
                                <span style="margin-bottom: 0">Wednesday,18 december 2019 11:49 AM</span>
                            </div>
                        </div>
                         <div class='row'>
                            <div class='col-12'>
                                <div class='feedback-text'>
                                    <p class="text">&quot;<span>Excellent doctor.She listens very well and is calm</span>&quot;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class='table-feedback' style="ma">
                        <div class='row'>
                            <div class='col-12'>
                                <div class="feedback-img">
                                    <img src="../images/person_4.jpg" class="doctor-feedback rounded-circle rounded float-left">
                                </div>
                                <h5>Omar Reda</h5>
                                <span style="margin-bottom: 0">Wednesday,18 december 2019 11:49 AM</span>
                            </div>
                        </div>
                         <div class='row'>
                            <div class='col-12'>
                                <div class='feedback-text'>
                                    <p class="text">&quot;<span>Excellent doctor.She listens very well and is calm</span>&quot;</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <a href="index.html">
                                    <div><img src="../images/logofooter.png" title="medical tecnology logo"></div>
                                </a>
			                 </div>
							<div class="footer_about_text">
								<p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci eleme ntum eleifend tempor, nunc libero porttitor tellus.</p>
							</div>
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+53 345 7953 32453</li>
								<li>yourmail@gmail.com</li>
								<li>contact@gmail.com</li>
							</ul>
						</div>
					</div>

					<!-- Footer Locations -->
					<div class="col-lg-3 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Miami</div>
									<div class="location_text">45 Creekside Av  FL 931</div>
								</li>
								<li>
									<div class="location_title">Los Angeles</div>
									<div class="location_text">1481 Creekside Lane Avila Beach, CA 931</div>
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
                            Copyright &copy; Medical Tecnology
                            </div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
    <!-- End Footer -->

    <!--End container-->

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>