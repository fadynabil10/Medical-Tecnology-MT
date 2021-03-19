<?php
include('cred/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Medical Tecnology</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="medical tecnology">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/ico" href="images/iconstwo.png" />
<link rel="stylesheet" type="text/css" href="main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">    
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="chat.css" type="text/css"/>    

</head> 
<body>

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div><img src="images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
                    <li><a href="#Services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
    
    <!-- end  Header -->
    <div class="cont">
        <div class="chat-content">
            <div class="row"> 
                <div class="col-md-12">
					
					<?php chat_connection(); ?> 
					<form action="" method="POST" enctype='multipart/form-data'>
					<div name="output" class="u-full-width output">
						
					<?php 
						$sql = "SELECT * from chat ORDER BY message_at DESC";
						$result = query($sql);
	
						while($rows = fetching($result)){
							$msg_out =  $rows['output'];
							$msg_at = $rows['message_at'];
							$img_sending = $rows['img_sending'];
	
							echo $msg_out . "--" . $msg_at . "<br>";
	
							echo "<img src='$img_sending' class ='image-msg' />";
						}
						// echo $msg_out  - $msg_at;
					?>  	
                    <form action="" method="POST" enctype='multipart/form-data'>
                    <div name="output" class="u-full-width output">

                    </div>
                    <textarea name="msg" id="" class="u-full-width input" placeholder="Enter your message here"></textarea><br>
                    <input type="file" name="img_sending" value="upload-files" class = 'file' />
                    <input type="submit" name="sending"  value="Send Message"class="u-full-width send">
                    </form>
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
                                <a href="#headerlogo">
                                    <div><img src="images/logofooter.png" title="medical tecnology logo"></div>
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

</div>
    <!--End container-->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
<script src="js/custom.js"></script>
<script src="js/offerscounter.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>