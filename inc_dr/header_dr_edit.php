<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = '';
}

$sql = "SELECT * from doctor where id = '".$id."' ";
$result = query($sql);
while($rows = fetching($result)){
    $dr_name = $rows['dr_name'];
    $dr_clinic_address = $rows['dr_clinic_address'];
    $dr_specialization = $rows['dr_specialization'];
    $dr_id = $rows['id'];
    $dr_phone = $rows['phone'];
    $fees = $rows['fees'];
    $bio = $rows['bio'];
    $img = $rows['img'];
    $day_1 = $rows['day_1'];
    $day_2 = $rows['day_2'];
    $day_3 = $rows['day_3'];
}
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
                        <a href="<?php echo '../html/logout_role.php' ?>">logout</a>
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
                        <h4 style='padding: 0; margin-top: 40px;'>DR/
                       <?php  echo $dr_name; ?>

                        </h4>
                    <div class="profile-img c1">
                    <img src="<?php echo $img; ?>" class="doctor-image rounded-circle rounded float-left" style="height:200px;weight:200px;">
                    </div>
                        <!--rounded float-left-->
                </div>
                </div> 
                <div class="col-6 right-section">
                    <div class="right-content">
                        <div class="row">
                            <a type="button" href="./profile_doctor.php?id=<?php echo $id; ?>" class="btn btn-danger btn-top">Profile Doctor</a>
                        </div>
                        <!-- <div class="row">
                            <a type="button" class="btn btn-success btn-buttom">Cancel appointment</a>
                        </div> -->
                        <div class="row">
                            <a type="button" href='medical-record.html' class="btn btn-dark btn-buttom" >My Medical Record</a>
                        </div>
                    </div>
                </div>

<?php

if(logged_in_role()){
    
        if(isset($_POST['update_dr'])){
            $dr_name = clear($_POST['dr_name']);
            $dr_clinic_address = clear($_POST['dr_clinic_address']);
            $dr_specialization = clear($_POST['dr_specialization']);
            $dr_phone = clear($_POST['phone']);
            $fees = clear($_POST['fees']);
            $dr_degree = clear($_POST['dr_degree']);
            $dr_bio = clear($_POST['bio']);
            $area = clear($_POST['area']);
            $dr_day_1 = clear($_POST['day_1']);
            $dr_day_2 = clear($_POST['day_2']);
            $dr_day_3 = clear($_POST['day_3']);
            $img_profile = $_FILES['img']['tmp_name'];
            $img_name = $_FILES['img']['name'];
            $uploaded_last = "chat" .  "_" . $img_name;
            $target= 'images/imgs/' . $uploaded_last;
            move_uploaded_file($img_profile, $target);

            $sql2 = "UPDATE  `doctor` set `dr_name` = '".$dr_name."', 
            `dr_clinic_address` = '".$dr_clinic_address."' ";  
            $sql2 .= " , `dr_specialization` = '".$dr_specialization."', `dr_degree` = '".$dr_degree."',
            `phone` = '".$dr_phone."', ";
            $sql2 .= " `fees` = '".$fees."', `bio` = '".$dr_bio."',
            `img` = '".$target."', `area` = '".$area."', `day_1` = '".$dr_day_1."', `day_2` = '".$dr_day_2."', `day_3` = '".$dr_day_3."' where `id` = '".$dr_id."' ";

            $result2 = query($sql2);

            if($result2){
                valid_success("Doctor Profile Updated Successfully!");

            }   else{
                valid_error("Doctor Profile not updated!");
            } 
        }

        }else{
        redirect("login_role.php");
    }

?>

                    <form class = 'personal-info' action="" method="POST" enctype="multipart/form-data">
                        <div class=" row profile-info" style="max-height: auto;min-height: auto;height:none;">
                            <div class='title-bar'>
                                <div class="columnone">
                                    <img class ='rounded float-right' src="../images/icon!.png"/>
                                </div>
                                <div class="columntwo">
                                    <p class="col-text" style='width:40%; float:left;'>personal information</p>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-myapp"style='width:14%;float:right;' name="update_dr">save</button>
 
                                </div>
                            </div>
                            <table class="table table-content table-borderless">

                            <tbody>
                                <tr>
                                <td class="head-tr">Doctor Name</td>
                                <td><input type="text" value="<?php echo $dr_name;  ?>" name="dr_name"/></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Clinic Address</td>
                                <td><input type="text"value="<?php echo $dr_clinic_address; ?>" name="dr_clinic_address" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Specialization</td>
                                <td><input type="text"value="<?php echo $dr_specialization; ?>" name="dr_specialization" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Degree</td>
                                <td><input type="text" value="<?php echo $dr_degree; ?>" name="dr_degree" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Phone</td>
                                <td><input type="tel" value="<?php echo $dr_phone; ?>" name="phone" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Fees</td>
                                <td><input type="number"value="<?php echo $fees; ?>" name="fees" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Image</td>
                                <td><input type="file" value="" name = "img" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Area</td>
                                <td><input type="text"  name="area" value="<?php echo $area; ?>"/></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Doctor Bio</td>
                                <td>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio"><?php echo $bio; ?></textarea>
                                </div>
                                </td>
                                </tr>

<!-- something goes here about booking area -->
                                <tr>
                                <td class="head-tr">Day One</td>
                                <td><input type="datetime-local" value="<?php echo $day_1; ?>" name="day_1" /></td>
                                </tr>
                                <tr>
                                <td class="head-tr">Day Two</td>
                                <td><input type="datetime-local" value="<?php echo $day_2; ?>" name="day_2" /></td>
                                </tr>
                                <tr class="hidden_dr">
                                <td class="head-tr">Day Three</td>
                                <td><input type="datetime-local"  value="<?php $somethings = date("y-m-d H:M:S"); echo $somethings; ?>" name="day_3" /></td>
                                </tr>

<!-- Ending something goes here about booking area -->


                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>



