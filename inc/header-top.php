<div class="super_container" id="top">
	
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
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
                    <li><a href="#Services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                <div class="button header_button b2">
                    <a href='./login.php' onclick="check()" id="signin">Sign in</a>
                </div>
                <div class="button header_button b1" style="margin-right: 10px; display: none">
                    <a href='' onclick="check()" id="profile">My Profile</a>
                </div>
                
                <script>

                    function check(){
                        var  signIn = document.getElementById('signin'),
                            profile = document.getElementById('profile');
                        signIn.style.display  = 'none';
                        profile.style.display = 'block';
                    }
                </script> 
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
    
    <!-- end  Header -->

	<!-- start Menu -->

	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				    <li class="active"><a href="index.html">Home</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>
			</ul>
            
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
			<div class="menu_link">+34 586 778 8892</div>
        <div class=" menu_link"><a href="login.html">Join us</a></div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
    
<!--End Menu-->