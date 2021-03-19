
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
                    if(isset($_GET['id'])){
                        $id2 = $_GET['id'];
                    }else{
                        $id2 = '';
                    }
                    $sql2 = "SELECT * from profile_patients where id = $id2";

                     $result2 = query($sql2);
                     $rows3 = fetching($result2);
                     $email_p_p = $rows3['email'];
                     $sql_email = "SELECT * from profile_patients where email = '".$email_p_p."' ";
                    $result3 = query($sql_email);
                    
                    if(!isset($_SESSION['email'])){
                        echo '<div class="dropdown" style="display:none">';
                    
                        echo '<img src="../images/person.png" onclick="myFunction()" class="dropbtn"/>';
                        echo'<div id="myDropdown" class="dropdown-content">';
                        
                        echo'<a href="../html/login.php">login</a>';
                        
                        echo'</div>';
                       echo'</div>';

                    }else{
                        echo '<div class="dropdown">';
                    
                        echo '<img src="'.$rows3['img'].'" onclick="myFunction()" class="dropbtn"/>';
                        echo'<div id="myDropdown" class="dropdown-content">';
                        
                        
                        echo' <a href="./profile_patient.php?id='.$id2.'">My Profile</a>';
                        echo'<a href="./Book-index.php?p_id='.$id2.'">Make appointment</a>';
                        //echo'<a type="button" href="./confirm_booking.php?p_id='.$id2.'">Cancel appointment</a>';
                        echo'<a type="button" href="./medical_record.php?id='.$id2.'">My Medical Record</a>';
                        echo'<a href="../html/logout.php">logout</a>';
                        
                        echo'</div>';
                       echo'</div>';

                    }
                    ?>
                    </div>
                <!-- Hamburger main icon display when minimize size of screen  -->
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
        </header>

       <div class="container-patient" style="height:1800px">
           
               <div class="row">

                <div class="col-6 left-section">
                    <div class="left-content">
                        
                            <?php
                                if(isset($_SESSION['email'])){
                                    // $_SESSION['email'];
                                    if(isset($_GET['id'])){
                                         $id2 = clear($_GET['id']);
                                     }else{
                                         $id2 = '';
                                     }
                            


                                     $sql = "SELECT * from signup where id = $id2";
                                     $result = query($sql);
                                     $rows = fetching($result);
                                    echo '<div class="p-name" style="font-family:Montserrat, sans-serif; font-size: 25px;padding-bottom: 10px;text-transform: uppercase;">';
                                     echo $rows['f_name']." ". $rows['l_name'];
                                    echo '</div>';
                                     $email = $rows['email'];
                                        
                                     $sql2 = "SELECT * from profile_patients where id = $id2";

                                     $result2 = query($sql2);
                                     $rows3 = fetching($result2);
                                    echo '<div class="p-img" style= "padding-left :60px;">';
                                     echo '<img src="'.$rows3['img'].'" class="patiant-image rounded-circle rounded float-left">';
                                    echo '</div>';
                                    update_patients();

                                    }else{

                                    redirect("login.php");
                                }
                            ?>
            
                        <!--rounded float-left-->
                    </div>
                   </div>
                  <div class="col-6 right-section">
                    <div class="right-content">

                    <?php 
                        if(!isset($_SESSION['email'])){

                        }else{
                            
                            echo '<div class="row">
                                <a href="./profile_patient.php?id='.$id2.'" class="btn btn-danger btn-top">My Profile</a>
                            </div>';

                            echo '<div class="row">
                                <a href="./Book-index.php?p_id='.$id2.'" class="btn btn-info btn-top">Make appointment</a>
                            </div>';
                            
                                                   
                            echo '<div class="row">
                                <a type="button" href="./medical_record.php?id='.$id2.'" class="btn btn-dark btn-buttom" >My Medical Record</a>
                            </div>';
                        }

                    ?>
                    </div>
                </div>
   
                </div>


                <form class = 'personal-info' style='margin: 10px auto; width:85%; ' action="" method="POST" enctype="multipart/form-data">
                        <div class=" row profile-info" style=" max-height: auto;min-height: auto;height:1162px;">
                            <div class='title-bar'>
                                <div class="columnone">
                                    <img class ='rounded float-right' src="../images/icon!.png"/>
                                </div>
                                <div class="columntwo">
                                    <p class="col-text" style='float: left;'>personal information</p>
                                    <button style = 'margin:0 10% 0 78%; width:10%;float: rigth;'type="submit" class="btn btn-primary btn-lg btn-block btn-myapp" name="update_pp"> save</button> 
                                </div>
                            </div><br><br>
                            <table class="table table-content table-borderless">

                            <tbody>
                                <tr>
                                <td class="head-tr">patiant id</td>
                                <td>5558514545</td>

                                </tr>
                                
                                <tr>
                                <td class="head-tr">E-mail</td>
                                <td><input type="text"value="<?php echo $rows['email']; ?>" name="email"/></td>
                            
                                </tr>
                                
                                <tr>
                                <td class="head-tr">address</td>
                                <td><input type="text"value="<?php echo $rows3['address']; ?>" name="address" /></td>
                                
                                </tr>
                                
                                <tr>
                                <td class="head-tr">mobile</td>
                                <td><input type="text"value="<?php echo $rows3['mobile']; ?>" name="mobile" /></td>
                               
                                </tr>

                                <tr>
                                <td class="head-tr">weight</td>
                                <td><input type="number"value="<?php echo $rows3['weight']; ?>" name="weight" /></td>
                                
                                </tr>

                                <tr>
                                <td class="head-tr">height</td>
                                <td><input type="number"value="<?php echo $rows3['height']; ?>" name="height" /></td>
                                </tr>


                                <tr>
                                <td class="head-tr">batholigical_case</td>
                                <td><input type="text"value="<?php echo $rows3['batholigical_case']; ?>" name="batholigical_case" /></td>
                                
                                </tr>

                                
                                <tr>
                                <td class="head-tr">blood_group</td>
                                <td><input type="text"value="<?php echo $rows3['blood_group']; ?>" name="blood_group"/></td>
                                
                                </tr>

                                <tr>
                                <td class="head-tr">image_patient</td>
                                <td><input type="file"value="<?php echo $rows3['img']; ?>" name="img" /></td>
                              
                                </tr>

                                
                                <tr>
                                <td class="head-tr">birth day</td>
                                <td><input type="text"value="<?php echo $rows['dob']; ?>" name="dob" /></td>
                               
                                </tr>
                            </tbody>
                            </table>

                        </div>

                    </form>

                                


            </div>
        </div>

