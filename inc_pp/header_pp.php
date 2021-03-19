
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
                    <?php 
                      if(!logged_in()){
                        echo '<div class="button header_button b2" style="display:none">';
                        echo '<a href="../html/logout.php" style="display:none">logout</a>';
                    }else{
                        echo '<div class="button header_button b2">';
                        echo '<a href="../html/logout.php">logout</a>';

                    }
                     ?>
                    </div>
                <!-- Hamburger main icon display when minimize size of screen  -->
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>

            </div>
        </header>

       <div class="container-patient">
           
     <div class="row">

         <div class="col-6 left-section">
            <div class="left-content">
                <?php
                    if(isset($_GET['id'])){
                        $id2 = $_GET['id'];
                    }else{
                        $id2 = '';
                    }

                                                    $sql = "SELECT * from signup where id = $id2";
                                                    $result = query($sql);
                                                    $rows = fetching($result);
                                                    echo '<div class="p-name" style="">';
                                                    echo $rows['f_name']." ". $rows['l_name'];
                                                    echo '</div>';
                                                    $email = $rows['email'];
                                                    $random_id = rand(100000, 999999);
                                                    $numbers = '0123456789abcdefghjiklmnopqstruvwxyz';
                                                    $random_coupon = substr(str_shuffle($numbers), 0 , 6);
                                                    $id_signup = $rows['id'];
                                                    $sql2 = "SELECT * from profile_patients where id = $id2";

                                                    $result2 = query($sql2);
                                                    $rows3 = fetching($result2);
                                                    $email_p_p = $rows3['email'];
                                                    $sql_email = "SELECT * from profile_patients where email = '".$email_p_p."' ";
                                                    $result3 = query($sql_email);
                                                    echo '<div class="p-img">';
                                                    echo '<img src="../images/person_4.jpg" class="patiant-image rounded-circle rounded" style = " float:left">';
                                                    echo '</div>';
                                                    /* echo '<img src="'.$rows3['img'].'" class="patiant-image rounded-circle rounded float-left">
                ';*/

                $pharmX = array("ezaby", "Seif","Abd elma3bod", "Fakhry", "Shefaa", "Khayreya");

                $pharIndex = array_rand($pharmX);

                $pharmacy = $pharmX[$pharIndex];
                $sql4 = "INSERT INTO pharmacy(id, pharmacy_name, random_id, coupon, code_status)VALUES('".$id2."', '".$pharmacy."', '".$random_id."', '".$random_coupon."', 'approved')";
                query($sql4);

                if(num_rows($result3) >= 1){
                }else{
                    $sql7 = "INSERT INTO profile_patients(id, email, pharmacy_id, id_signup, dr_id) VALUES ('".$id2."', '".$email."', '".$id2."', '".$id_signup."', 5)";
                    query($sql7);
                }
                ?>
        <!--rounded float-left-->
 </div>
    </div> 
<div class="col-6 right-section">
  <div class="right-content">

                    <?php 
                         if(!logged_in()){

                        }else{
                            
                            echo '<div class="row">
                            <a href="./profile_patient_edit.php?id='.$id2.'" class="btn btn-danger btn-top">Update Profile Patients</a>
                            </div>';

                            echo '<div class="row">
                                <a href="./Book-index.php?id='.$id2.'" class="btn btn-info btn-top">Make appointment</a>
                            </div>';
                            
                            echo '<div class="row">
                                <a type="button" class="btn btn-success btn-buttom" style = "color:#fff">Cancel appointment</a>
                            </div>';
                            
                            echo '<div class="row">
                                <a type="button" href="medical-record.html" class="btn btn-dark btn-buttom" >My Medical Record</a>
                            </div>';
                        }

                    ?>    
                    </div>
                </div>



                <form class = 'personal-info' style='margin: 10px auto; width:85%; ' action="" method="POST" enctype="multipart/form-data">
                    <div class=" row profile-info" style=" max-height: auto;min-height: auto;height:none;">
                            <div class='title-bar'>
                                <div class="columnone">
                                    <img class ='rounded float-right' src="../images/icon!.png"/>
                                </div>
                                <div class="columntwo">
                                    <p class="col-text">personal information</p> 
                                </div>
                            </div><br><br>
                            <table class="table table-content table-borderless">

                            <tbody>
                                <tr>
                                <td class="head-tr">E-mail</td>
                                <td><?php echo $rows['email']; ?></td>
                                </tr>
                                
                                <tr>
                                <td class="head-tr">address</td>
                                <td><?php echo $rows3['address']; ?></td>
                                </tr>

                                <tr>
                                <td class="head-tr">mobile</td>
                                <td><?php echo $rows3['mobile']; ?></td>
                                </tr>

                                <tr>
                                <td class="head-tr">weight</td>
                                <td><?php echo $rows3['weight']; ?></td>
                                </tr>

                                <tr>
                                <td class="head-tr">height</td>
                                <td><?php echo $rows3['height']; ?></td>
                                </tr>


                                <tr>
                                <td class="head-tr">batholigical_case</td>
                                <td><?php echo $rows3['batholigical_case']; ?></td>
                                </tr>

                                
                                <tr>
                                <td class="head-tr">blood_group</td>
                                <td><?php echo $rows3['blood_group']; ?></td>
                                </tr>


                                <tr>
                                <td class="head-tr">birth day</td>
                                <td><?php echo $rows['dob']; ?></td>
                                </tr>

                            </tbody>
                            </table>

                        </div>

                    </form>
            </div>
        </div>

