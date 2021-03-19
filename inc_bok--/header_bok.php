

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
                    </a>
                </div>

               <!-- Main Navigation -->
                <nav class="main_nav" style="margin-left: 55px">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="corona.php">Health awareness</a></li>
                        <li><a href="index.php#BestCare">Best Care</a></li>
                        <li><a href="index.php#whych">Why choose us?</a></li>
                        <li><a href="index.php#Services">Services</a></li>
                        <li><a href="index.php#offers">Offers</a></li>
                        <li><a href="#Contactus">Contact us</a></li>

                    </ul>
                </nav>

                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                  

                      <div class="dropdown">
                    
                        <img src="../images/person_4.jpg" onclick="myFunction()" class="dropbtn"/>
                        <div id="myDropdown" class="dropdown-content">
                        
                        
                        <a href="./profile_patient_edit.php?id='.$id3.'">Update Profile Patients</a>  
                        <a href="./Book-index.php?p_id='.$id3.'">Make appointment</a>  
                        <a type="button" href="./medical_record.php?id='.$id3.'">My Medical Record</a>  
                        <a href="../html/logout.php">logout</a>  
                        
                        </div>
                       </div>
                    </div>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
    
    <!-- end  Header -->