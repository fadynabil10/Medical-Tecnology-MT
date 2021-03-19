<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="medical tecnology">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/ico" href="../images/iconstwo.png" />
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" href="../styles/payment.css" type="text/css"/>    

</head>
<body>

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div>
                        <img src="../images/logoheader.png" title="medical tecnology logo"></div>
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
    
    <div class="container-payment">
        <div class="col-xl-">
            <div class="row main-row">
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#visa"><img src="../images/1.png"/></button>
                </div>
                <div class="col-3 pay-box p2">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#paypal" class="draw-p2"><img src="../images/2.png"/></button>
                </div>
                <div class="col-3 pay-box p3">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#vod" class="draw-p3"><img src="../images/3.png"/></button>

                </div>
                <div class="col-3 pay-box p4">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#fawry" class="draw-p4" style="padding: 0;"><img src="../images/f.jpg" style='width: 100%;'/></button>
                </div>
            
            </div>
        </div>


<!--Forms-->
        <!-- visa form -->
            <div class="modal fade" id="visa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 600px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/1.png">
                      </div>
                      <form>
                      <div class="form-group">
                        <label>Name in Card</label>
                        <input type="text" class="form-control" placeholder="Enter name" style='outline: none'>
                      </div>
                      <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" style='outline: none' onkeypress='validate(event)'>
                        <small class="form-text text-muted">We'll never share your card number with anyone else.</small>
                      </div>

                          <!----->
                           <form class="form-inline">
                                <div class="partone pt">
                                  <label style='font-weight: 600'>Expiration</label>
                                  <input type="text" class="form-control form-control-part" placeholder="MM/YY" style='outline: none'>
                                </div>
                                <div class="parttwo pt">
                                  <label style='font-weight: 600'>Cvv</label>
                                  <input type="text" class="form-control form-control-part" placeholder="311" maxlength="3" style="width: 50%; outline: none;" onkeypress='validate(event)'>
                                </div>
                            </form>
                           <div class="pay-amount">
                            <p>Total : <span id='amount'>120</span> EGP</p>
                           </div>

                      </form>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Pay</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End visa form-->
        <!-- paypal form -->
            <div class="modal fade" id="paypal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 500px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/2.png">
                      </div>
                      <form>
                      <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" style='outline: none' onkeypress='validate(event)'>
                        <small class="form-text text-muted">We'll never share your card number with anyone else.</small>
                      </div>

                          <!----->
                           <form class="form-inline">
                                <div class="partone pt">
                                  <label style='font-weight: 600'>Expiration</label>
                                  <input type="text" class="form-control form-control-part" placeholder="MM/YY" style='outline: none'>
                                </div>
                                <div class="parttwo pt">
                                  <label style='font-weight: 600'>Cvv</label>
                                  <input type="text" class="form-control form-control-part" placeholder="311" maxlength="3" style="width: 50%; outline: none;" onkeypress='validate(event)'>
                                </div>
                            </form>
                           <div class="pay-amount">
                            <p>Total : <span id='amount'>120</span> EGP</p>
                           </div>

                      </form>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Pay</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End visa form-->
        <!-- vodiphone form -->
            <div class="modal fade" id="vod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 315px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 0px;">
                      
                      <form>
                          <div class="part-T">
                              <div class="form-group">
                                <input type="text" readonly class="form-control" value="01121378325">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Enter confirm code" style='outline: none' onkeypress='validate(event)'>
                              </div>
                            </div>
                      </form>
                      <div class="part-O">
                            <img src="../images/3.png" style="width: 100%;">
                      </div>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Confirm</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End vodaphone form-->
        <!-- fawry form -->
              <div class="modal fade" id="fawry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 315px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 0px;">
                      
                      <form>
                          <div class="part-T">
                              <div class="form-group">
                                <input type="text" readonly class="form-control" value="01121378325">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Enter confirm code" style='outline: none' onkeypress='validate(event)'>
                              </div>
                            </div>
                      </form>
                      <div class="part-O">
                            <img src="../images/f.jpg" style="width: 100%; padding-left: 10px;">
                      </div>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Confirm</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End fawry form-->
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

<script>
   function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

</body>
</html>