<?php


if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = '';
}

echo $_SESSION['email'];



$sql_pt = "SELECT * from profile_patients where email = '".$_SESSION['email']."' ";
$query_pt = query($sql_pt);
while($fetching_pt_id = fetching($query_pt)){
    $fetched_id_pt = $fetching_pt_id['id'];
}

$sql = "SELECT * from doctor where id = '".$id."' ";
$result = query($sql);
while($rows = fetching($result)){
    $dr_name = $rows['dr_name'];
    $dr_clinic_address = $rows['dr_clinic_address'];
    $dr_specialization = $rows['dr_specialization'];
    $doctor_degree = $rows['dr_degree'];

    $dr_id = $rows['id'];
    $dr_phone = $rows['phone'];
    $fees = $rows['fees'];
    $bio = $rows['bio'];
    $dr_area = $rows['area'];
    $img = $rows['img'];
    $retrv_day_1 = $rows['day_1'];
    $retrv_day_2 = $rows['day_2'];
    $retrv_day_3 = $rows['day_3'];
}


?>

 

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
                    <div class="button header_button b2">
                        <a href="<?php echo '../html/logout_role.php' ?>">logout</a>
                    </div>
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>

            </div>
        </header>

       <div class="container-patient" style="height:auto;">
           
               <div class="row">

                <div class="col-6 left-section">
                    <div class="left-content">
                       
                       
                        <div class="profile-img c1">
                            <img src="<?php echo $img; ?>" class="doctor-image rounded-circle rounded" style="width:150px; height:150px;float:left;">
                        </div>
                         <h4 style="">
                          <?php  echo $dr_name; ?>

                        </h4>
                    </div>
                </div> 
                <div class="col-6 right-section">
                    <div class="right-content">
                        <div class="row">
                            <a type="button" href="./profile_doctor.php?id=<?php echo $id; ?>" class="btn btn-danger btn-top" style='padding:10px;' >Profile Doctor</a>
                        </div>
                       
                        <div class="row">
                             <a type="button" href="medical_record.php?dr_id=<?php echo $dr_id; ?>&p_id=<?php echo $fetched_id_pt;?>" class="btn btn-dark btn-buttom"style='padding:10px;color:#fff' >My Medical Record</a> 
                        </div>
                    </div>
                </div>

<?php

if(isset($_SESSION['username'])){
  
        if(isset($_POST['update_dr'])){

            $dr_name = clear($_POST['dr_name']);
            $dr_clinic_address = clear($_POST['dr_clinic_address']);
            $dr_specialization = clear($_POST['dr_specialization']);
            $dr_phone = clear($_POST['phone']);
            $fees = clear($_POST['fees']);
            $dr_degree = clear($_POST['dr_degree']);
            $dr_bio = clear($_POST['bio']);
            $area = clear($_POST['area']);


            $select_day1_name = clear($_POST['select_day1_name']);
            $times_day1 = $_POST['times_day1'];
            
            $implode_times_day1 = implode(",", $times_day1);
            $explode_times_day1 = explode(",", $implode_times_day1);

            
            


            $select_day2_name = clear($_POST['select_day2_name']);
            $times_day2 = $_POST['times_day2'];




            $implode_times_day2 = implode(",", $times_day2);
            $explode_times_day2 = explode(",", $implode_times_day2);





            $select_day3_name = clear($_POST['select_day3_name']);
            $times_day3 = $_POST['times_day3'];




            $implode_times_day3 = implode(",", $times_day3);
            $explode_times_day3 = explode(",", $implode_times_day3);




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
            `img` = '".$target."', `area` = '".$area."', `day_1` = '".$select_day1_name."', `day_2` = '".$select_day2_name."', `day_3` = '".$select_day3_name."', 
            `times1_day1` = '".$explode_times_day1[0]."', `times2_day1` = '".$explode_times_day1[1]."', `times3_day1` = '".$explode_times_day1[2]."',
            `times1_day2` = '".$explode_times_day2[0]."', `times2_day2` = '".$explode_times_day2[1]."', `times3_day2` = '".$explode_times_day2[2]."',
            `times1_day3` = '".$explode_times_day3[0]."', `times2_day3` = '".$explode_times_day3[1]."', `times3_day3` = '".$explode_times_day3[2]."'
            where `id` = '".$dr_id."' ";

            
            $result2 = query($sql2);

            if($result2){

            }   else{

                valid_error("Doctor Profile not updated!");
            } 
        }

    }else{
        
        redirect("login_role.php");
    }

?>

                <form action="" method="POST" enctype="multipart/form-data" style='margin-top:0px;margin-left:10%;margin-bottom:60px;'>
                        <div class=" row profile-info" style="height:auto;position:relative;">
                            <div class='title-bar'>
                                <div class="columnone">
                                    <img class ='rounded float-right' src="../images/icon!.png"/>
                                </div>
                                <div class="columntwo">
                                    <p class="col-text">personal information</p> 
                                </div>
                            </div><br><br>
                            <table class="table table-content table-borderless" style="line-height:1.5;">

                            <tbody >
                             
                                <tr>
                                <td class="head-tr"  style="border-top:none">Doctor Name</td>
                                <td  style="border-top:none"><input type="text" value="<?php echo $dr_name;  ?>" name="dr_name"/></td>
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
                                <td><input type="text" value="<?php echo $doctor_degree; ?>" name="dr_degree" /></td>
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
                                <td><input type="text"  name="area" value="<?php echo $dr_area; ?>"/></td>
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


                                <tr>
                                <td class="head-tr">Day One</td>
                                <td>
                                

<input type="date" name="select_day1_name" class="form-control">

                                </td>
                                <td>
                                
<select name="times_day1[]" id="framework" id="framework1" class="form-control selectpicker" 
data-live-search="true" multiple>
      
    <option value="00:00">12.00 AM</option>
    <option value="00:30">12.30 AM</option>
    <option value="01:00">01.00 AM</option>
    <option value="01:30">01.30 AM</option>
    <option value="02:00">02.00 AM</option>
    <option value="02:30">02.30 AM</option>
    <option value="03:00">03.00 AM</option>
    <option value="03:30">03.30 AM</option>
    <option value="04:00">04.00 AM</option>
    <option value="04:30">04.30 AM</option>
    <option value="05:00">05.00 AM</option>
    <option value="05:30">05.30 AM</option>
    <option value="06:00">06.00 AM</option>
    <option value="06:30">06.30 AM</option>
    <option value="07:00">07.00 AM</option>
    <option value="07:30">07.30 AM</option>
    <option value="08:00">08.00 AM</option>
    <option value="08:30">08.30 AM</option>
    <option value="09:00">09.00 AM</option>
    <option value="09:30">09.30 AM</option>
    <option value="10:00">10.00 AM</option>
    <option value="10:30">10.30 AM</option>
    <option value="11:00">11.00 AM</option>
    <option value="11:30">11.30 AM</option>
    <option value="12:00">12.00 PM</option>
    <option value="12:30">12.30 PM</option>
    <option value="13:00">01.00 PM</option>
    <option value="13:30">01.30 PM</option>
    <option value="14:00">02.00 PM</option>
    <option value="14:30">02.30 PM</option>
    <option value="15:00">03.00 PM</option>
    <option value="15:30">03.30 PM</option>
    <option value="16:00">04.00 PM</option>
    <option value="16:30">04.30 PM</option>
    <option value="17:00">05.00 PM</option>
    <option value="17:30">05.30 PM</option>
    <option value="18:00">06.00 PM</option>
    <option value="18:30">06.30 PM</option>
    <option value="19:00">07.00 PM</option>
    <option value="19:30">07.30 PM</option>
    <option value="20:00">08.00 PM</option>
    <option value="20:30">08.30 PM</option>
    <option value="21:00">09.00 PM</option>
    <option value="21:30">09.30 PM</option>
    <option value="22:00">10.00 PM</option>
    <option value="22:30">10.30 PM</option>
    <option value="23:00">11.00 PM</option>
    <option value="23:30">11.30 PM</option>


      
     </select>


                                </td>

                                
                             
                                </tr>

                                <tr>
                                <td class="head-tr">Day Two</td>
                                <td>
                                

     <input type="date" name="select_day2_name" class="form-control">

                                </td>
                                <td>
                                
                                <select name="times_day2[]" id="framework" id="framework2" class="form-control selectpicker" 
data-live-search="true" multiple>
      
    <option value="00:00">12.00 AM</option>
    <option value="00:30">12.30 AM</option>
    <option value="01:00">01.00 AM</option>
    <option value="01:30">01.30 AM</option>
    <option value="02:00">02.00 AM</option>
    <option value="02:30">02.30 AM</option>
    <option value="03:00">03.00 AM</option>
    <option value="03:30">03.30 AM</option>
    <option value="04:00">04.00 AM</option>
    <option value="04:30">04.30 AM</option>
    <option value="05:00">05.00 AM</option>
    <option value="05:30">05.30 AM</option>
    <option value="06:00">06.00 AM</option>
    <option value="06:30">06.30 AM</option>
    <option value="07:00">07.00 AM</option>
    <option value="07:30">07.30 AM</option>
    <option value="08:00">08.00 AM</option>
    <option value="08:30">08.30 AM</option>
    <option value="09:00">09.00 AM</option>
    <option value="09:30">09.30 AM</option>
    <option value="10:00">10.00 AM</option>
    <option value="10:30">10.30 AM</option>
    <option value="11:00">11.00 AM</option>
    <option value="11:30">11.30 AM</option>
    <option value="12:00">12.00 PM</option>
    <option value="12:30">12.30 PM</option>
    <option value="13:00">01.00 PM</option>
    <option value="13:30">01.30 PM</option>
    <option value="14:00">02.00 PM</option>
    <option value="14:30">02.30 PM</option>
    <option value="15:00">03.00 PM</option>
    <option value="15:30">03.30 PM</option>
    <option value="16:00">04.00 PM</option>
    <option value="16:30">04.30 PM</option>
    <option value="17:00">05.00 PM</option>
    <option value="17:30">05.30 PM</option>
    <option value="18:00">06.00 PM</option>
    <option value="18:30">06.30 PM</option>
    <option value="19:00">07.00 PM</option>
    <option value="19:30">07.30 PM</option>
    <option value="20:00">08.00 PM</option>
    <option value="20:30">08.30 PM</option>
    <option value="21:00">09.00 PM</option>
    <option value="21:30">09.30 PM</option>
    <option value="22:00">10.00 PM</option>
    <option value="22:30">10.30 PM</option>
    <option value="23:00">11.00 PM</option>
    <option value="23:30">11.30 PM</option>


      
     </select>
                                
                                
                                </td>
                                
                                </tr>



                                <tr class="hidden_dr">
                                <td class="head-tr">Day Three</td>
                                <td>
                                

     <input type="date" name="select_day3_name" class="form-control">

                                </td>
                                <td>
                                
                                <select name="times_day3[]" id="framework" id="framework3" class="form-control selectpicker" 
data-live-search="true" multiple>
      
    <option value="00:00">12.00 AM</option>
    <option value="00:30">12.30 AM</option>
    <option value="01:00">01.00 AM</option>
    <option value="01:30">01.30 AM</option>
    <option value="02:00">02.00 AM</option>
    <option value="02:30">02.30 AM</option>
    <option value="03:00">03.00 AM</option>
    <option value="03:30">03.30 AM</option>
    <option value="04:00">04.00 AM</option>
    <option value="04:30">04.30 AM</option>
    <option value="05:00">05.00 AM</option>
    <option value="05:30">05.30 AM</option>
    <option value="06:00">06.00 AM</option>
    <option value="06:30">06.30 AM</option>
    <option value="07:00">07.00 AM</option>
    <option value="07:30">07.30 AM</option>
    <option value="08:00">08.00 AM</option>
    <option value="08:30">08.30 AM</option>
    <option value="09:00">09.00 AM</option>
    <option value="09:30">09.30 AM</option>
    <option value="10:00">10.00 AM</option>
    <option value="10:30">10.30 AM</option>
    <option value="11:00">11.00 AM</option>
    <option value="11:30">11.30 AM</option>
    <option value="12:00">12.00 PM</option>
    <option value="12:30">12.30 PM</option>
    <option value="13:00">01.00 PM</option>
    <option value="13:30">01.30 PM</option>
    <option value="14:00">02.00 PM</option>
    <option value="14:30">02.30 PM</option>
    <option value="15:00">03.00 PM</option>
    <option value="15:30">03.30 PM</option>
    <option value="16:00">04.00 PM</option>
    <option value="16:30">04.30 PM</option>
    <option value="17:00">05.00 PM</option>
    <option value="17:30">05.30 PM</option>
    <option value="18:00">06.00 PM</option>
    <option value="18:30">06.30 PM</option>
    <option value="19:00">07.00 PM</option>
    <option value="19:30">07.30 PM</option>
    <option value="20:00">08.00 PM</option>
    <option value="20:30">08.30 PM</option>
    <option value="21:00">09.00 PM</option>
    <option value="21:30">09.30 PM</option>
    <option value="22:00">10.00 PM</option>
    <option value="22:30">10.30 PM</option>
    <option value="23:00">11.00 PM</option>
    <option value="23:30">11.30 PM</option>


      
     </select>
                                
                                
                                
                                </td>
                                
                                </tr>


                                <tr>
                                    <td><button type="submit" class="btn btn-primary btn-lg btn-block btn-myapp" style='margin-top:60px;margin-left:0px;' name="update_dr"> Save</button>
</td>
                                </tr>    

                            </tbody>
                            </table>

                        </div>

                    </form>

                                


            </div>
        </div>



