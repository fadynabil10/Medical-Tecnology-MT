
        
        
<?php 

if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];
}else{
    $p_id = '';
}


?>
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
			<nav class="main_nav" style="margin-left:5%;">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
                    <li><a href="corona.php">Health awareness</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
                    <li><a href="#Services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                
                <div class="dropdown">


                <?php 


$sql_person_pico = "SELECT * from profile_patients where id = '".$p_id."' ";
$query_person_pico = query($sql_person_pico);
$fetching_person_pico = fetching($query_person_pico);
$get_person_pico = $fetching_person_pico['img'];
?>
                    
                  <img src="<?php echo $get_person_pico; ?>" onclick="myFunction()" class="dropbtn"/>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="./profile_patient.php?id='.$id3.'">Profile Patients</a>  
                    <a href="./Book-index.php?p_id='.$id3.'">Make appointment</a>  
                    <a type="button" href="./confirm_booking.php?p_id='.$id3.'">Cancel appointment</a>  
                    <a type="button" href="./medical_record.php?id='.$id3.'">My Medical Record</a>  
                    <a href="../html/logout.php">logout</a>  
                  </div>
                </div>

            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>

            </div>
        </header>
    <div class="container-rating" style="height:auto">
        <div class="row">
            <div class="col-12">
                <div class="feedback-main" style="background-color: #fff">
                    <!-- <div class="feedback-sub" style="background-color: #fff">

                    
                        <form class="rating" id="product1" method="POST">

                            <button type="submit"   class="star" id="star1"  name="rate1" data-star="1" onclick="myFunction1()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">1 Star</span>

                            </button>
                            <button type="submit"  class="star" id="star2" name="rate2" data-star="2" onclick="myFunction2()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">2 Stars</span>
                            </button>
                            <button type="submit"   class="star" id="star3" name="rate3" data-star="3" onclick="myFunction3()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">3 Stars</span>
                            </button>
                            <button type="submit"  class="star"  id="star4" name="rate4" data-star="4" onclick="myFunction4()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">4 Stars</span>
                            </button>
                            <button type="submit"   class="star" id="star5" name="rate5" data-star="5" onclick="myFunction5()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">5 Stars</span>
                            </button>

                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testimonial"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-myapp" name="send_rate" style='outline: none; width: 85%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;'>Send</button>
                        </form>
                        
                    </div> -->
                    <form class="rating-btn" id="product1" style="position: absolute; top: 60%; left: 18%; right: 0; bottom: 0;">
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;'>Back to Profile</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(237,20,91); border: none;'>View Report</button>
                    </form>
                </div>
            
            </div>
        
        </div>




