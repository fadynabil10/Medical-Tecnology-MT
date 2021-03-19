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
								<li>+201121378325</li>
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
							<div class="copyright" style="font-size:11px;">
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

        </div>
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
    