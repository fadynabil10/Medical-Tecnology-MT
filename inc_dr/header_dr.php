<?php 

// require('../cred/init.php');


?>


<body  style="background-color:#f8f8f8;">

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
                <nav class="main_nav" style="margin-left: 54px">
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
                
                <?php 
                if(isset($_SESSION['username'])){
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
    
	</header>
    
   <div class="container-doctor" style="height:auto">
        <div class="main-section">
            <div class="column-one" >

                <?php 
                    

                    if(isset($_GET['id'])){
                        $id = $_GET['id'];

                    }else{
                        $id= '';
                    }







                    $querys = query("SELECT * FROM star where dr_id = '".$_GET['id']."' "); 
            	while($data = fetching($querys)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
                $total_rates = substr($rate_value,0,3);








                    $sql_rating = "SELECT f_name, l_name, rate from star 
                        INNER JOIN  signup On signup.id = star.p_id
                        INNER JOIN  doctor On doctor.id = star.dr_id where doctor.id = '".$id."' ";

                        $result3  = query($sql_rating);

                        while($rows3 = fetching($result3)){
                            
                            $rating = $rows3['rate'];                            

                            
                        }

$sql_username_get_doctors = "SELECT * from users_chat where room = '".$id_room."' AND type_user = 'doctor' ";

$chat_doctor_get_room = "SELECT * from users_chat where user_id = '".$id."' AND type_user = 'doctor' ";
$chat_doctor_query_room = query($chat_doctor_get_room);
$fetch_room_no = fetching($chat_doctor_query_room);

$get_room_no_chat =  $fetch_room_no['room'];

                        
                    

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
                        // $id_dr = $rows['id'];


                               
               

                ?>


                <div class="profile-img c1">
                    <img src="<?php echo $img_doctor; ?>" class="doctor-image rounded-circle rounded float-left">
                </div>
                <div class="profile-info c1">
                    <h4>Doctor <span><?php echo $dr_name; ?></span>
                    </h4>
                    
                    <h5 style="color: #57ccc3; font-size: 16px;"><?php echo $dr_specialization; ?></h5>


                    <?php 
                    
                            if($total_rates == 1){
                                           echo '<span class="fa fa-star checked"></span>';

                            }else if($total_rates == 2){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                            }else if($total_rates == 3){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }else if($total_rates == 4) {
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }else if($total_rates == 5){
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';
                                echo '<span class="fa fa-star checked"></span>';

                            }
                    
                    
                    ?>

                    
                    <h5>
                        <span class="p-icon"style='padding-left:22px'><img src='../images/home.png' style="width: 15px;" class = 'edit-icon rounded float-left'/></span><?php echo $dr_clinic_address; ?>
                    </h5>
                    
                    <h5>
                        <span class="p-icon"><img src='../images/mony.png' class = 'edit-icon rounded float-left'/></span>Fees <span ><?php echo $fees; ?> <span style="color: #57ccc3; font-size: 20px;">L.E</span></span>
                    </h5>


                    <h5>
                        <span class="p-icon" style='padding-left:0px;'><img src='../images/certificate.png' class = 'edit-icon rounded float-left'/></span><span><?php echo $dr_degree; ?> </span>
                    </h5>
                    <h5>
                        <span class="p-icon"><img src='../images/phone.png'class = 'edit-icon rounded float-left'/></span><?php echo $phone; ?>
                    </h5>

                    <h5>
                        <span class="p-icon" style='padding-left:22px'><img src='../images/location.png'style="width: 15px;" class = 'edit-icon rounded float-left'/></span><?php echo $area; ?>
                    </h5>
                </div>
             </div>
            <div class="column-two" style="width:40.5%">

            <button type="button" data-toggle="modal" data-target="#book" class="btn-primary btn-lg btn-danger btn-myapp" style="width:371px;cursor:pointer; margin:0;">Start Working</button><br><br>
            <?php
                     
                if(isset($_SESSION['username'])){
                    echo '<a href="../html/profile_doctor_edit.php?id='.$id.'" class="btn-primary btn-lg btn-danger btn-myapp" style="width:50%;cursor:pointer;background-color:green;margin-top:10px;    margin-left: 0px;padding: 10px 67px;">Update Information</a>' . "<br> <br> <br>";
                    echo '<a href="" onclick="go_chat()" id="go_chating" class="btn-primary btn-lg btn-danger btn-myapp" style="width:50%;cursor:pointer;background-color:#333;margin-top:10px;    margin-left:0; padding: 13px 140px;">Go Chat</a>' . "<br> <br> <br>";
                    echo "<script>
                            function go_chat(){
                                var go_chat = confirm('Are you sure you want to go chat');
                                if(go_chat){
                                    var get_id_go_chating = document.getElementById('go_chating');
                                    get_id_go_chating.setAttribute('href', '../html/chat-form.php?user=$id&room=$get_room_no_chat ');
                                }
                            }
                        </script>";
                    
                }else{
                                    
                                }
                                ?>
            </div>



        </div>
        <div class='col-xl-'>
            <div class="row table-info">
                
                      <div class="col-md-11 table-title">
                            <h6><span class="icon"><img class ='edit-icon rounded float-left' src="../images/icon!.png"/></span>information</h6>
                      </div>

                      <div class="col-md-1 table-title">

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

                      <div class="col-md-1 table-title">
                          
                      </div>


                 <?php 

                testimonial();

                }
                        
                ?>
            </div>
        </div><br><br>
    </div>
    
</div>