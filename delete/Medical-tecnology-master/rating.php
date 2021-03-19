<!DOCTYPE html>
<html lang="en">
<head>
        <title>feedback</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="../styles/rating.css">
</head>
<body>
<div class="super_container">

        <!-- start Header -->

        <header class="header trans_400" id="headerlogo">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
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
    <div class="container-rating">
        <div class="row">
            <div class="col-12">
                <div class="feedback-main" style="background-color: #fff">
                    <div class="feedback-sub" style="background-color: #fff">
                        <form class="rating" id="product1">

                            <button type="submit" class="star" data-star="1">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">1 Star</span>
                            </button>
                            <button type="submit" class="star" data-star="2">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">2 Stars</span>
                            </button>
                            <button type="submit" class="star" data-star="3">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">3 Stars</span>
                            </button>
                            <button type="submit" class="star" data-star="4">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">4 Stars</span>
                            </button>
                            <button type="submit" class="star" data-star="5">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">5 Stars</span>
                            </button>
                            <input type="text" class="form-control" placeholder="write your comment" style='outline: none; width: 85%; border-radius: 2%; height: 60px;'>
                            <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 85%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;'>Send</button>
                        </form>
                        
                    </div>
                    <form class="rating-btn" id="product1" style="position: absolute; top: 60%; left: 18%; right: 0; bottom: 0;">
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;'>Back to Profile</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(237,20,91); border: none;'>View Report</button>
                    </form>
                </div>
            
            </div>
        
        </div>
            
       <!-- start Footer -->
    </div>
        <footer class="footer" id="Contactus">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- Footer About -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="logo">
                                    <a href="index.html">
                                        <div><img src="../images/logofooter.png" title="medical tecnology logo" style="height: 81%"></div>
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
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap-4.1.2/popper.js"></script>
    <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="../plugins/greensock/TimelineMax.min.js"></script>
    <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
    <script src="../js/custom.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script>
		// Listen for form submissions
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			
			var stars = Array.from(form.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			var stars = Array.from(form.querySelectorAll('.star'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);

	</script>
</body>
</html>
