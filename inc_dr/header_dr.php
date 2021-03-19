<?php 
require('../cred/init.php');
?>
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
                <?php 
                if(logged_in_role()){
                    echo '<div class="button header_button b2">';

                    echo '<a href="../html/logout_role.php">logout</a>';
                }else{
                    echo '<a href="<?php echo ../html/logout_role.php ?>" style="display:none">logout</a>';
                }
                    
                ?>
                    </div>
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
            
		</div>
	</header>
    
   <div class="container-doctor">
        <div class="main-section">
            <div class="column-one">

                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];

                    }else{
                        $id= '';
                    }

                    $sql_rating = "SELECT f_name, l_name, rating, comments from rates 
                        INNER JOIN  signup On signup.id = rates.id_signup
                        INNER JOIN  doctor On doctor.id = rates.id_doctor where doctor.id = '".$id."' ";

                        $result3  = query($sql_rating);

                        while($rows3 = fetching($result3)){
                            $rating = $rows3['rating'];    
                        }
                    $sql = "SELECT * from doctor where id = $id";
                    $result = query($sql);
                    while($rows = fetching($result)){
                        $img_doctor  = $rows['img'];
                        $dr_name = $rows['dr_name'];
                        $dr_clinic_address = $rows['dr_clinic_address'];
                        $dr_specialization = $rows['dr_specialization'];
                        $dr_degree = $rows['dr_degree'];
                        $fees = $rows['fees'];
                        $phone = $rows['phone'];
                        $bio = $rows['bio'];
                        $area = $rows['area'];
                ?>
                <div class="profile-img c1">
                    <img src="<?php echo $img_doctor; ?>" class="doctor-image rounded-circle rounded float-left">
                </div>
                <div class="profile-info c1">
                    <h4>Dr/<span><?php echo $dr_name; ?></span></h4>                  
                    <h5 style="color: #57ccc3; font-size: 16px;"><?php echo $dr_specialization; ?></h5>
                    
                    <?php 
                    
                            if($rating == 1){
                                           echo '<span class="fa fa-star checked"></span>';

                            }else if($rating == 2){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                            }else if($rating == 3){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }else if($rating == 4) {
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }else if($rating == 5){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }
                    
                    
                    ?>

                    
                    <h5>
                        <span class="p-icon"><img src='../images/location.png' style="width: 15px;" class = 'edit-icon rounded float-left'/></span><?php echo $dr_clinic_address; ?>
                    </h5>
                    
                    <h5>
                        <span class="p-icon"><img src='../images/mony.png' class = 'edit-icon rounded float-left'/></span>Fees <span ><?php echo $fees; ?> <span style="color: #57ccc3; font-size: 20px;">L.E</span></span>
                    </h5>


                    <h5>
                        <span class="p-icon"><img src='../images/de.png' class = 'edit-icon rounded float-left'/></span>Dr.Degree <span style="color:#57ccc3"><?php echo $dr_degree; ?> </span>
                    </h5>
                    <h5>
                        <span class="p-ic on"><img src='../images/phone.png'class = 'edit-icon rounded float-left'/></span><?php echo $phone; ?>
                    </h5>
                </div>
             </div>
            <div class="column-two" style="padding-bottom:500px">
            <div>
                <?php
                if(!logged_in_role()){
                    echo '<a href="../html/profile_doctor_edit.php?id='.$id.'" class="btn btn-primary btn-lg btn-dark" style="margin-left:200px;margin-bottom: 20px;display:none">Update Information</a>';

                }else{
                    echo '<a href="../html/profile_doctor_edit.php?id='.$id.'" class="btn btn-primary btn-lg btn-dark" style="margin-left:200px;margin-bottom: 20px">Update Information</a>';

                }
                ?>
            </div>
            <button type="button" data-toggle="modal" data-target="#book" class="btn btn-primary btn-lg btn-danger" style=" width:35%;margin-left:200px;margin-bottom: 20px">Start Working</button>
            </div>



        </div>
        <div class='col-xl-'>
            <div class="row table-info">
                
                      <div class="col-md-11 table-title">
                            <h6><span class="icon"><img class ='edit-icon rounded float-left' src="../images/icon!.png"/></span>information</h6>
                      </div>

                <div class='table-text'>
                    <p><?php echo $bio;  ?></p>
                </div>
            </div>
        </div>

                            

       <div class='col-xl- feed-back'>
            <div class="row table-info">
                
                      <div class="col-md-11 table-title">
                            <h6><span class="icon"><img class ='edit-icon rounded float-left' src="../images/reply.png"/></span>Feedback</h6>
                      </div>
            
                 <?php 
                testimonial();
                }
                ?>
            </div>
        </div><br><br>
    </div>
    
</div>