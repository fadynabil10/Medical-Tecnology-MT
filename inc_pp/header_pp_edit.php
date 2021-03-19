<?php


?>
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
                        <a href="<?php echo '../html/logout.php' ?>">logout</a>
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
                                if(logged_in()){
                                    $_SESSION['email'];
                                    if(isset($_GET['id'])){
                                         $id2 = clear($_GET['id']);
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
                                        
                                     $sql2 = "SELECT * from profile_patients where id = $id2";

                                     $result2 = query($sql2);
                                     $rows3 = fetching($result2);
                                     echo '<div class="p-img">';
                                     echo '<img src="../images/person_4.jpg" class="patiant-image rounded-circle rounded" style = " float:left">';
                                     echo '</div>';
                                     /*echo '<img src="'.$rows3['img'].'" class="patiant-image rounded-circle rounded float-left">
';*/

if(isset($_POST['update_pp'])){
    if(isset($_GET['id'])){
        $id3 = $_GET['id'];
    }else{
        $id3 = '';
    }

$address = clear($_POST['address']);
$mobile = clear($_POST['mobile']);
$weight = clear($_POST['weight']);
$height = clear($_POST['height']);
$batholigical_case = clear($_POST['batholigical_case']);
$blood_group = clear($_POST['blood_group']);
$pharmacy_id = $id3;
$img_profile = $_FILES['img']['tmp_name'];
$img_name = $_FILES['img']['name'];
$uploaded_last = "chat" .  "_" . $img_name;
$target= 'images/imgs/' . $uploaded_last;
move_uploaded_file($img_profile, $target);
$id_signup = $id3;

$sql3 = "UPDATE `profile_patients` SET `id`= '".$id3."', `address`= '".$address."', ";
$sql3 .= "`mobile`= '".$mobile."', `weight`='".$weight."', `height`= '".$height."', ";
$sql3 .= " `batholigical_case`= '".$batholigical_case."', `blood_group`= '".$blood_group."', ";
$sql3 .= " `pharmacy_id` = '".$pharmacy_id."', `img`='".$target."' , `id_signup` = '".$id_signup."' where id = $id3 ";
$result4 = query($sql3);

   if($result4){
       img_patient();
       valid_success('Patient Profile Updated Successfully!');

    }else{
       valid_error('Patient Profile Not Updated Successfully!');
    }

}                                       
    }else{
         redirect("login.php");
        }
?>
     <!--rounded float-left-->
     </div>
     </div> 
     <div class="col-6 right-section">
     <div class="right-content">
     <div class="row">
     <a type="button" href="./profile_patient.php?id=<?php echo $id2; ?>" class="btn btn-danger btn-top">Profile Patients</a>
     </div>
    <div class="row">
                            <a type="button" class="btn btn-success btn-buttom" style = "color:#fff">Cancel appointment</a>
                        </div>
                        <div class="row">
                            <a type="button" href='medical-record.html' class="btn btn-dark btn-buttom" >My Medical Record</a>
                        </div>
                    </div>
                </div>

                <form class = 'personal-info' style='margin: 10px auto; width:85%; ' action="" method="POST" enctype="multipart/form-data">
                        <div class=" row profile-info" style=" max-height: auto;min-height: auto;height:none;">
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
