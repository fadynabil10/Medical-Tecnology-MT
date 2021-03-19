<?php
function clear($string){
    return htmlentities($string);
}


function redirect($location){
    return header("Location: ${location}");
}


function valid_error($msg_error){
    $msg_error = "
    <div class='alert alert-danger' role='alert'>
    $msg_error

</div>";
echo $msg_error;
}

//style=' position: absolute;top: 192%;width: 47%;text-align: center;'

function valid_success($msg_success){
    $msg_success = <<<DELIMITER
    <div class="alert alert-success" role="alert" >
    $msg_success

    </div>


DELIMITER;
echo $msg_success;
}

function user_reg(){

    $errors = [];

    if(isset($_POST['signup']) == "POST"){

        $f_name = clear($_POST['f_name']);
        $l_name = clear($_POST['l_name']);
        $email = clear($_POST['email']);
        $gender = clear($_POST['gender']);
        $password = clear(md5($_POST['password']));
        $bday = clear($_POST['dob']);


        //activation code generation 

        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
        $activation_code=NULL;
    for($x=1;$x<=32;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $activation_code .= substr($Caracteres,$Posicao,1);
    }


        


        if(empty($f_name)){
            $errors[] = "f name shouldn't be empty";


        }

        if(empty($l_name)){
            $errors[] = "l name shouldn't be empty";


        }

        if(empty($email)){
            $errors[] = "email shouldn't be empty";


        }

        if(empty($gender)){
            $errors[] = "gender shouldn't be empty";


        }

        if(empty($password)){
            $errors[] = "paassword shouldn't be empty";


        }

        if(empty($bday)){
            $errors[] = "birthday  shouldn't be empty";

        }



        $sql_check_user = "SELECT * from signup where email = '".$email."' ";

        $result = query($sql_check_user);
        // $another = fetching($result);
        // $id = $another['id'];
        // $rows =



           if(num_rows($result) >= 1){
            $errors[] = "Email Already Exist";
           }
        





        if(!empty($errors)){
            foreach($errors as $err){
             echo "<small>" . valid_error($err) ."</small>";
            }
        }else{


            $select_id = "SELECT id from profile_patients ORDER BY id DESC limit 0, 1"; 
            $result_select = query($select_id);
            $id_selection = fetching($result_select);
            
            $row_selection = $id_selection['id'];
            // echo $row_selection;
            $img_query = "SELECT img from profile_patients where id = '".$row_selection."' ";
            $result_img = query($img_query);
            
            $row_img = fetching($result_img);
                
            $imgs_fetched = $row_img['img'];


            $sql = "INSERT INTO signup(`f_name`, `l_name`, `email`, `gender`, `password`, `dob`, `activation_code`, `status`, `img_p`)";
            $sql .= " VALUES('".$f_name."', '".$l_name."', '".$email."',
             '".$gender."', '".$password."', '".$bday."', '".$activation_code."', 0, '".$imgs_fetched."' ) ";
             


             $sql_check_patient = "SELECT * from signup where email = '".$email."' ";

             $result2 = query($sql_check_patient);
             $check_email = fetching($result2);

            

            $result_check = query($sql);

            if($result_check){
                
                echo "<script>alert('user Created Successfully!');</script>";

            }else{
                echo "<script>alert('not user Created Successfully!');</script>";

            }
        }
    }
}

function login_user(){
    
    if(isset($_POST['login'])){
        $email = clear($_POST['email']);
        $password = clear($_POST['password']);

        if(empty($email)){
            $errors[] = "email shouldn't be empty";


        }

        if(empty($password)){
            $errors[] = "password shouldn't be empty";
        }


        if(!empty($errors)){
            foreach($errors as $err){
             echo "<small>" . valid_error($err) ."</small>";
            }

            

                    
        }else{


            
            $sql3 = "SELECT * from signup where email = '".$email."' AND status = 1";
            $result = query($sql3);
            confirm($result);
            $rows = fetching($result);
            // while($rows = fetching($result)){
            $db_password = $rows['password'];
            $id = $rows['id'];
            $email_addr = $rows['email'];

            $activation_code = $rows['activation_code'];
            $status = $rows['status'];    
            if(md5($password) == $db_password){
                
                
                // $_SESSION['p_id'] = $id;
                // if(logged_in()){
                

                    
                    $Caracteres = '0123456789';
                    $QuantidadeCaracteres = strlen($Caracteres);
                    $QuantidadeCaracteres--;
                    $activation_code=NULL;
                    for($x=1;$x<=30;$x++){
                        $Posicao = rand(0,$QuantidadeCaracteres);
                        $activation_code .= substr($Caracteres,$Posicao,1);
                        
                    }
                    

                    $sql_insert_session_values = "UPDATE profile_patients SET `session_id`='".$activation_code."' where `id` = '".$id."' ";
                    query($sql_insert_session_values);
                    $_SESSION['email'] = $email_addr;

                    $sql_fetch_session_id = "SELECT * from profile_patients where id = '".$id."' ";
                    $query_session_id = query($sql_fetch_session_id);
                    while($fetching_session_id = fetching($query_session_id)){

                    $_SESSION['session_id'] = $fetching_session_id['session_id'];


                    $username_chat_session = $fetching_session_id['username'];
                    $_SESSION['username'] = $username_chat_session;


                        }
                    // }

                $to_email = '"'.$email_addr.'"';
                $subject = 'Testing PHP Mail';
                $message = "This mail is sent using the PHP mail function
                    check this link for activating your account
                    https://nullproj.000webhostapp.com/MT2/MT/html/code.php?activation_code='".$activation_code."'&email='".$email_addr."'
                
                    http://localhost/group_project/MT/html/code.php?activation_code='".$activation_code."'&email='".$email_addr."'

                ";
                $headers = 'From: noreply@company.com';
                if(mail($to_email,$subject,$message,$headers)){
                echo "Sent!";
                }else{
                echo "Not!";
                }
                
                
                

                    redirect("profile_patient.php?id=$id");




                }else{
                    valid_error("Not Logged in");
                }
        }

    }
}

// function logged_in(){

//     if(isset($_SESSION['email'])){
//         $_SESSION['email'] = $email_addr;
//     }else{
//         $_SESSION['email'] = '';
//     }

// }












function activate_patients(){
    if(isset($_GET['activation_code']) && isset($_GET['email'])){
        $email = $_GET['email'];
        $activation_code = $_GET['activation_code'];
    }else{
        $email = '';
        $activation_code = '';
    }

    $sql = "SELECT id from signup where email = '".$email."' AND activation_code = '".$activation_code."' ";
    $result = query($sql);
    while($rows = fetching($result)){
        $id = $rows['id'];
    }

    $sql2 = "UPDATE signup SET status = 1, activation_code = '' where email = '".$email."' ";
    $result2 = query($sql2);
    if($result2){
        valid_success("Your email has been activated!");
        // redirect("login.php");
    }else{
        valid_error("Your email has not been activated!");
    }

}



function doctor_admin_role(){

    



    if(isset($_POST['login_role'])){



        $username = clear($_POST['username']);
        $password = clear($_POST['password']);
        $errors = [];

        if(empty($username)){
            $errors[] = "username shouldn't be empty";
    
    
        }
    
        if(empty($password)){
            $errors[] = "password shouldn't be empty";
        }
    
    
        if(!empty($errors)){
            foreach($errors as $err){
             echo "<small>" . valid_error($err) ."</small>";
            }
        }else{



        $sql = "SELECT * from signin where username =  '".$username."' ";
        $result = query($sql);
        while($rows = fetching($result)){
            $db_password = $rows['password'];
            $role = $rows['role'];
            $id = $rows['id'];
            $user_db = $rows['username'];

            if(md5($password) === $db_password){
                switch($role){
                    case 'doctor':


                        $Caracteres = '0123456789';
                    $QuantidadeCaracteres = strlen($Caracteres);
                    $QuantidadeCaracteres--;
                    $activation_code=NULL;
                    for($x=1;$x<=30;$x++){
                        $Posicao = rand(0,$QuantidadeCaracteres);
                        $activation_code .= substr($Caracteres,$Posicao,1);
                        
                    }
                    
                    $_SESSION['id'] = $id;

                    $sql_insert_session_values_dr = "UPDATE doctor SET `session_id`='".$activation_code."' where `id` = '".$id."' ";
                    query($sql_insert_session_values_dr);

                    $sql_fetch_session_id = "SELECT * from doctor where id = '".$id."' ";
                    $query_session_id = query($sql_fetch_session_id);
                    $fetching_session_id = fetching($query_session_id);

                    $_SESSION['session_id'] = $fetching_session_id;




                            $_SESSION['username'] = $user_db;
                        
                        redirect("profile_doctor.php?id=$id");
                        
                        break;  
                    case 'admin':
                        redirect("admin.php?id=$id");
                        break;
                    case 'pharmacian':
                        redirect("confirm_pharmacy.php?id=$id");
                            $_SESSION['username'] = $user_db;
                        break;    
                        
                    }
                }else{
                    // redirect("login_role.php");
                    valid_error("Invalid username or password");

                }    


            }
        }
    }
}


// function logged_in_role(){

//     if(isset($_SESSION['username'])){
//         return true;
//     }else{
//         return false;
//     }

// }








function testimonial(){

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = '';
    }
    $sql_rating = "SELECT img_p, f_name, l_name, rate, dt_rated from star 
                        INNER JOIN  signup On signup.id = star.p_id
                        INNER JOIN  doctor On doctor.id = star.dr_id where doctor.id = '".$id."' ";

                        $result3  = query($sql_rating);

                        


                    



                        while($rows3 = fetching($result3)){
                            $f_name = $rows3['f_name'];
                            $l_name = $rows3['l_name'];
                            $rating = $rows3['rate'];
                            // $comments = $rows3['comment'];
                            $imgs = $rows3['img_p'];
                            $dt_rated = $rows3['dt_rated'];

                echo "<div class='table-feedback'>";

               
                echo "<div class='row'>";

                echo "<div class='col-12'>";
                    echo "<div class='feedback-img'style=''>";
                        echo   '<img src="'.$imgs.'" class="doctor-feedback rounded-circle rounded float-left">';
                        echo    "</div>";
                        echo    "<h5 style='margin-bottom:5px'>$f_name  $l_name</h5>";

                        
                            if($rating == 1){
                                           echo '<span class="fa fa-star checked"></span>';

                            }else if($rating == 2){
                                echo '<span class="fa fa-star checked "></span>';
                                echo '<span class="fa fa-star checked"></span>';
                            }else if( $rating == 3){
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
                    
                            $conv_date = explode(" ", $dt_rated);
                            $exploded_date = $conv_date[0];
                        
                            $dayOfWeek = date("l", strtotime($exploded_date));
                            echo    "<span style='margin-bottom: 0; display: block; padding-left: 92px;'>$dayOfWeek  $dt_rated </span>";
                    echo "</div>";
                echo "</div>"; 

                echo "<div class='row'>";
                    echo "<div class='col-12'>";
                        echo "<div class='feedback-text'>";
                        echo    "<p class='text'>&quot;<span></span>&quot;</p>";
                        echo "</div>";












                        
                    echo "</div>";
               echo "</div>";
               echo "</div>";
                    }

                    
}

function img_patient(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = '';
    }
    $sql_img_p = "SELECT img from profile_patients where id = '".$id."' ";
    $result_img_p = query($sql_img_p);
    while($rows_img_p = fetching($result_img_p)){
        $img_p = $rows_img_p['img'];
    }

    
    $sql_update_img_p = "UPDATE signup SET img_p = '".$img_p."' where id = '".$id."' ";
    query($sql_update_img_p);
}




function update_patients(){
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
    
    
    $sql_get_mail = "SELECT * from signup where id = '".$id_signup."' ";

            $query_email = query($sql_get_mail);
            $fetching_emails = fetching($query_email);
            $result_fetched_mails = $fetching_emails['email'];

            $select_email_strips = "SELECT * from signup where email = '".$result_fetched_mails."' ";

             $query_email_strips = query($select_email_strips);
             
             
             
             $another_email_strips = fetching($query_email_strips);
             $email_to_chat = $another_email_strips['email'];

             $Caracteres = '0123456789';
             $QuantidadeCaracteres = strlen($Caracteres);
             $QuantidadeCaracteres--;
             $activation_code=NULL;
             for($x=1;$x<=5;$x++){
                 $Posicao = rand(0,$QuantidadeCaracteres);
                 $activation_code .= substr($Caracteres,$Posicao,1);

             }
             $strips_email = explode("@", $email_to_chat);
             
             $final_strips_email = $strips_email[0] . $activation_code . "_pts";

             echo $final_strips_email . "<br><br>";
    
    $sql3 = "UPDATE `profile_patients` SET `id`= '".$id3."', `address`= '".$address."', `mobile`= '".$mobile."'";
    $sql3 .= " ,`batholigical_case`= '".$batholigical_case."', `blood_group`= '".$blood_group."', ";
    $sql3 .= " `pharmacy_id` = '".$pharmacy_id."', `img`='".$target."' , `id_signup` = '".$id_signup."', `weight`='".$weight."', `height`='".$height."', ";
    $sql3 .= " `username` = '".$final_strips_email."' where `id` = '".$id_signup."' ";
    $result4 = query($sql3);
    
    if($result4){
        img_patient();
        valid_success("Patient Profile Updated Successfully!");
    
    }else{
        valid_error('Patient Profile Not Updated Successfully!');
        
    }
    
    }
}



function medical_record(){

            $email_mr = $_SESSION['email'];
            $username_mr = $_SESSION['username'];


            
            $sql_fetch_pt = "SELECT id, username from profile_patients where email = '".$email_mr."' ";
            $query_fetch_pt = query($sql_fetch_pt);
            $fetching_pt = fetching($query_fetch_pt);
            $id_fetched_pt = $fetching_pt['id'];
            $username_fetched_pt = $fetching_pt['username'];


            
            // $sql_fetch_dr = "SELECT id from signin where username = '".$username_mr."' ";
            // $query_fetch_dr = query($sql_fetch_dr);
            // $fetching_dr = fetching($query_fetch_dr);
            // $id_fetched_dr = $fetching_dr['id'];


            // echo $id_fetched_dr;


        if(isset($_POST['confirm_mr'])){
            $description = clear($_POST['description']);
            $medicines = clear($_POST['medicines']);
            // $doexam = date("y-m-d h:m:s");
            // $timestamp = time()+date("Z");
            // $last_doexam =  gmdate("Y/m/d H:i:s",$timestamp);
            $sql_mr = "INSERT INTO medical_record(`description`, `medicines`, `p_id`, `dr_id`, `username_mr`) ";
            $sql_mr .= " VALUES('".$description."', '".$medicines."', '".$id_fetched_pt."', '".$_GET['dr_id']."', '".$username_fetched_pt."')";

            $result_mr = query($sql_mr);
            if($result_mr){
                valid_success('Medical record for patient has been inserted Successfully.');
            }else{
                valid_error('Medical record for patient has not inserted Successfully.');

            }
        }
    // }

    
}



function display_mr_report(){

    if(isset($_SESSION['email'])){
        // $username = $_SESSION['username'];
        $email = $_SESSION['email'];

        // echo $email;
      
        $sql_test = "SELECT id from profile_patients where email = '".$email."' ";
        $results = query($sql_test);
        while($something = fetching($results)){
          $something_id =  $something['id'];

        }
      
        $sql_query_med_rec = "SELECT medical_record.dr_id, medical_record.p_id, f_name, l_name, mobile, signup.email, gender, dob, dr_name, dr_specialization, date_of_exam from profile_patients 
        INNER JOIN medical_record ON profile_patients.id = medical_record.p_id
        INNER JOIN doctor ON medical_record.dr_id = doctor.id
        INNER JOIN signup ON profile_patients.id_signup = signup.id where medical_record.p_id = '".$something_id."' ";
      
      
        $result_q_med_rec = query($sql_query_med_rec);
        while($rows_q_med_rec = fetching($result_q_med_rec)){
          $p_id = $rows_q_med_rec['p_id'];
          $dr_id = $rows_q_med_rec['dr_id'];
          $f_name = $rows_q_med_rec['f_name'];
          $l_name = $rows_q_med_rec['l_name'];
          $email_rows = $rows_q_med_rec['email'];
          $gender_rows = $rows_q_med_rec['gender'];
          // $dob_rows = $rows_q_med_rec['dob'];
          $dr_name_rows = $rows_q_med_rec['dr_name'];
          $dr_specialization_rows = $rows_q_med_rec['dr_specialization'];
          $date_of_exam_rows = $rows_q_med_rec['date_of_exam'];   
          $mobile_rows = $rows_q_med_rec['mobile'];
          $dob_rows = strtotime($rows_q_med_rec['dob']);
          // Current date and time
          $something_date = date("Y", $dob_rows);
          
          $last_dob = date("Y") - $something_date;
           
          $another = implode(",", $dr_name_rows);
          echo $another;
            
            echo "<tr>";
            $x = 1;
             while($x<=count($dr_name_rows)){

                echo "<td>" . $x . "</td>";
                $x++;
             }

             
             echo    "<td><a href='#'>$dr_name_rows</a></td>";

    
             echo      "<td>$dr_specialization_rows</td>";
             echo    "<td>$date_of_exam_rows</td>";
             echo    "<td><a href='report.php?p_id=$something_id&dr_id=$dr_id'>view</a></td>";
           echo "</tr>";

                        

                    }
      
      
      
      
                }else{
                    redirect('login.php');
                }
          


}



function show_speciality(){

    


    
        

    echo'    <select name="sspeciality" class="form-control selectpicker" style="width:15%; height:35px;float:left;">';
    echo'           <option value=" ">Choose Area</option>';

    

                
    $sql = "SELECT distinct `dr_specialization` from doctor";

    $result = query($sql);




    while($rows = fetching($result)){

    $result_speciality = $rows['dr_specialization'];
    // $result_drname = $rows['dr_name'];
    // $result_area = $rows['area'];




    echo "<option value='".$rows['dr_specialization']."'>". $rows['dr_specialization'] ."</option>";








    }


    echo '</select>';


}




function booking_dr_patients(){
    if(isset($_GET['id']) || isset($_GET['date']) || isset($_GET['day']) || isset($_GET['spec'])){
        $id_bok =  clear($_GET['id']) . "<br>";
        $date_bok = clear($_GET['date']) . "<br>";
        $day_bok = clear($_GET['day']) . "<br>";
       
        
    }else{
        $id_bok = '';
        $date_bok = '';
        $day_bok = '';
    }



    $sql_query_bok = "SELECT * from doctor where id= '".$id_bok."' ";
        $query_bok = query($sql_query_bok);
        while($rows = fetching($query_bok)){
            global $dr_spec;

            $dr_spec =  $rows['dr_specialization'];

            echo $dr_spec;
        }
}







function fetch_drs(){



if(isset($_POST['search_dr'])){
    $sspecialty = clear($_POST['sspeciality']);
        $sql_results = "select * from doctor where dr_specialization =  '".$sspecialty."' ";

        $result_drs = query($sql_results);
        while($rows_drs = fetching($result_drs)){
            $dr_name_result = $rows_drs['dr_name'];
            $dr_spec_result = $rows_drs['dr_specialization'];
            $dr_addr_result = $rows_drs['dr_clinic_address'];
            $dr_fees_result = $rows_drs['fees'];
            $dr_day_1 = $rows_drs['day_1'];
            $dr_day_2 = $rows_drs['day_2'];
            $dr_day_3 = $rows_drs['day_3'];
            $dr_phone = $rows_drs['phone'];
            $dr_id_spec = $rows_drs['id'];


            $dr_img = $rows_drs['img'];

     


            
            


            $doctor_times1_day1 = $rows_drs['times1_day1'];


            $doctor_times1_day1_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times1_day1)));


            

            $doctor_times2_day1 = $rows_drs['times2_day1'];

            $doctor_times2_day1_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times2_day1)));

            $doctor_times3_day1 = $rows_drs['times3_day1'];
            $doctor_times3_day1_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times3_day1)));




            $doctor_times1_day2 = $rows_drs['times1_day2'];

            $doctor_times1_day2_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times1_day2)));





            $doctor_times2_day2 = $rows_drs['times2_day2'];

            $doctor_times2_day2_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times2_day2)));


            $doctor_times3_day2 = $rows_drs['times3_day3'];
            $doctor_times3_day2_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times3_day2)));

            

            $doctor_times1_day3 = $rows_drs['times1_day3'];

            $doctor_times1_day3_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times1_day3)));


            $doctor_times2_day3 = $rows_drs['times2_day3'];

            $doctor_times2_day3_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times2_day3)));

            $doctor_times3_day3 = $rows_drs['times3_day3'];

            $doctor_times3_day3_endTime = date("H:i", strtotime('+30 minutes', strtotime($doctor_times3_day3)));



            $unixts1 = strtotime($dr_day_1);
            $dow_day1 = date("l", $unixts1);
            
            
            $arrays_of_days = array(
                array('Saturday'=>$dr_name_result, 'Sunday'=>$dr_name_result, 'Monday'=>$dr_name_result, 'Tuesday'=>$dr_name_result, 'Wednesday'=>$dr_name_result,'Thursday'=>$dr_name_result, 'Friday'=>$dr_name_result)

            );

  
            
            $unixts2 = strtotime($dr_day_2);
            $dow_day2 = date("l", $unixts2);

            $unixts3 = strtotime($dr_day_3);
            $dow_day3 = date("l", $unixts3);
            
            


            $current_date = date("Y-m-d");

            
             
            echo '<div class="main-section" style="width: 75%; background-color: #f8f8f8; box-shadow: 5px 10px 5px 3px #ccc;">';

            if(empty($doctor_times1_day1) && empty($doctor_times2_day1) && empty($doctor_times3_day1)
            && empty($doctor_times1_day2) && empty($doctor_times2_day2) && empty($doctor_times3_day2)
            && empty($doctor_times1_day3) && empty($doctor_times2_day3) && empty($doctor_times3_day3)
            ){
                echo "<span style = 'text-align: center;z-index:9999; position: absolute;top: 0%;left: 0%;background-color: rgba(43, 39, 39, 0.8);width: 100%;height: 260px'> 
            <i class='fa fa-question-circle' style='font-size:155px;color:#888;font-size: 175px;margin-top:15px'>
            </i> <h3 style='color: #ccc;'>Not Available In This Week</h3> </span>";
            }
                

            
            


            echo '<div class="column-one" style="">';
            echo    '<div class="profile-img c1">';
            echo        "<img src='$dr_img' style='width: 150px;height: 150px;border-radius: 50%;' 
                class='doctor-image rounded-circle rounded float-left'>";
            echo    "</div>";
                echo '<div class="profile-info c1">';
                    echo "<h5><span style='color:red'>Doctor </span><span style=''>$dr_name_result</span></h5>";

                    echo "<h5 style='color: #57ccc3; font-size: 12px;'>$dr_spec_result</h5>";
                    echo '<span>3.5</span>';
                    echo '<span class="fa fa-star checked star"></span>';
                   

                    echo '<h5>';
                    echo    "<span class='p-icon'><img src='../images/location.png' style='width: 15px;'
                                class='edit-icon rounded float-left' /></span><span>$dr_addr_result</span>";
                    echo "</h5>";

                    echo "<h5>";
                    echo    "<span class='p-icon'><img src='../images/mony.png'
                                class='edit-icon rounded float-left' /></span>Fees : <span
                            style='margin-right: 10px;'><span>$dr_fees_result</span> <span
                                style='color: #57ccc3; font-size: 12px;'>L.E</span></span>";
                    echo '</h5>';
                    echo '<h5>';
                    echo   "<span class='p-ic on'><img src='../images/phone.png' class='edit-icon rounded float-left'
                                style='margin-right:15px;' /></span><span>$dr_phone</span>";
                    echo "</h5>";
                
                echo "</div>";

            echo "</div>";




            if($dr_day_1 == $current_date){

            

/*************************************** Day1 - times 1 day 1 */

                    echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';

                            
                            if(!empty($doctor_times1_day1)){
                                
                                echo "<div class='sub-table' style='width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                    echo "</div>";
                                    echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day1 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day1_endTime</h6>";
                                    echo "</div>";
                                    
                            echo "<a class='btn-book  btn-booked' ><span id='time1_day1_$dr_id_spec' onclick='time1_day1_$dr_id_spec()' href=''
                            class ='btn-text'  style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";



                                echo "<script>
                            function time1_day1_$dr_id_spec(){
                                var time1_day1_$dr_id_spec = document.getElementById('time1_day1_$dr_id_spec');
                                
                                question = confirm('Are you sure for booking this time ? ');
                                
                                if(question){

                                    
                                        // links!!!!!!!!!!!


                                        time1_day1_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_1&times=$doctor_times1_day1&dow=$dow_day1');
                                        var times1_day1_url_$dr_id_spec = time1_day1_$dr_id_spec.getAttribute('href');
                                        window.location.href= times1_day1_url_$dr_id_spec;
                                    }
                                
                                
                                }
                                </script>";




                                
                                








                                }else{
                                echo "<div class='sub-table' style='display:none; width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                    echo "</div>";
                                    echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day1 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day1_endTime</h6>";
                                    echo "</div>";
                                    
                            echo "<a class='btn-book book btn-booked'><span
                            class ='btn-text' id='time1_day1' onclick='time1_day1()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";

                            }

                                            

                                            
                                echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";


/*************************************** Day 1 - times 2 day 1 */


                    echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times2_day1)){

                                echo "<div class='sub-table' style='width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                    echo "</div>";
                                    echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times2_day1 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times2_day1_endTime</h6>";
                                    echo "</div>";
                                    echo "<a class='btn-book book btn-book' ><span id='time2_day1_$dr_id_spec' onclick='time2_day1_$dr_id_spec()' href=''
                                            class ='btn-text' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";


                                echo "<script>
                            function time2_day1_$dr_id_spec(){
                                var time2_day1_$dr_id_spec = document.getElementById('time2_day1_$dr_id_spec');
                                
                                question = confirm('Are you sure for booking this time ? ');
                                
                                if(question){
                                        
                                        time2_day1_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_1&times=$doctor_times2_day1&dow=$dow_day1');
                                        var times2_day1_url_$dr_id_spec = time2_day1_$dr_id_spec.getAttribute('href');
                                        window.location.href= times2_day1_url_$dr_id_spec;
                                    }
                                
                                
                                }
                                </script>";




                                    }else{
                                        echo "<div class='sub-table' style='display:none;width:128%;'>";
                                        echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                        border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                            echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                        echo "</div>";
                                        echo "<div class='time-content'>";
                                            echo "<h6 class='t-clo'>From $doctor_times2_day1 </h6>";
                                            echo "<h6 class='t-clo'>To $doctor_times2_day1_endTime</h6>";
                                        echo "</div>";
                                        echo "<a class='btn-book book btn-book'><span
                                            class ='btn-text' id='time2_day1' onclick='time2_day1()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }
                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";


/*************************************** Day1 - times 3 day 1 */


echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times3_day1)){
                                echo "<div class='sub-table'style='width:128%'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day1 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day1_endTime</h6>";
                                    echo "</div>";
                                    echo "<a class='btn-book book btn-booked' ><span id='time3_day1_$dr_id_spec' onclick='time3_day1_$dr_id_spec()' href=''
                                            class ='btn-text' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";


                                echo "<script>
                                function time3_day1_$dr_id_spec(){
                                    var time3_day1_$dr_id_spec = document.getElementById('time3_day1_$dr_id_spec');
                                    
                                    question = confirm('Are you sure for booking this time ? ');
                                    
                                    if(question){
                                            
                                            time3_day1_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_1&times=$doctor_times3_day1&dow=$dow_day1');
                                            var times3_day1_url_$dr_id_spec = time3_day1_$dr_id_spec.getAttribute('href');
                                            window.location.href= times3_day1_url_$dr_id_spec;
                                        }
                                    
                                    
                                    }
                                    </script>";






                                    }else{
                                        echo "<div class='sub-table' style='display:none;width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_1 <br> $dow_day1</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day1 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day1_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time3_day1' onclick='time3_day1()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";



                }else if($current_date == $dr_day_2){

                



//***************************************Day2 - time 1 day2 */



echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            
                            if(!empty($doctor_times1_day2)){
                                

                                
                                echo "<div class='sub-table' style='width:128%>'";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2 <br> $dow_day2</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day2_endTime</h6>";
                                    echo "</div>";
                                    echo "<a class='btn-book book btn-booked' ><span id='time1_day2_$dr_id_spec' onclick='time1_day2_$dr_id_spec()'  href='' class='btn-text' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                        echo "</div>";



                        echo "<script>
                        function time1_day2_$dr_id_spec(){
                            var time1_day2_$dr_id_spec = document.getElementById('time1_day2_$dr_id_spec');
                            
                            question = confirm('Are you sure for booking this time ? ');
                            
                            if(question){
                                    
                                    time1_day2_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_2&times=$doctor_times1_day2&dow=$dow_day2');
                                    var times1_day2_url_$dr_id_spec = time1_day2_$dr_id_spec.getAttribute('href');
                                    window.location.href= times1_day2_url_$dr_id_spec;
                                }
                            
                            
                            }
                            </script>";



                                    
                                    }else{
                                        echo "<div class='sub-table' style='display:none; width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2 <br> $dow_day2</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day2_endTime</h6>";
                                    echo "</div>";


                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time1_day2' onclick='time1_day2()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }
                               
                                    
                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";

                



//***************************************Day2 - time 2 day2 */



echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times2_day2)){
                                echo "<div class='sub-table' style='width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2 <br> $dow_day2</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times2_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times2_day2_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked' ><span id='time2_day2_$dr_id_spec' onclick='time2_day2_$dr_id_spec()' href=''
                                            class ='btn-text' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";



                                echo "<script>
                        function time2_day2_$dr_id_spec(){
                            var time2_day2_$dr_id_spec = document.getElementById('time2_day2_$dr_id_spec');
                            
                            question = confirm('Are you sure for booking this time ? ');
                            
                            if(question){
                                    
                                    time2_day2_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_2&times=$doctor_times2_day2&dow=$dow_day2');
                                    var times2_day2_url_$dr_id_spec = time2_day2_$dr_id_spec.getAttribute('href');
                                    window.location.href= times2_day2_url_$dr_id_spec;
                                }
                            
                            
                            }
                            </script>";




                                    }else{
                                        echo "<div class='sub-table' style='display:none; width:128%'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2 <br> $dow_day2</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times2_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times2_day2_endTime</h6>";
                                    echo "</div>";


                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time2_day2' onclick='time2_day2()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";










                    


//***************************************Day2 - time 3 day2 */



echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times3_day2)){
                                echo "<div class='sub-table' style='width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2 <br> $dow_day2</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day2_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked' ><span id='time3_day2_$dr_id_spec' onclick='time3_day2_$dr_id_spec()' href=''
                                            class ='btn-text' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";





                                echo "<script>
                                function time3_day2_$dr_id_spec(){
                                    var time3_day2_$dr_id_spec = document.getElementById('time3_day2_$dr_id_spec');
                                    
                                    question = confirm('Are you sure for booking this time ? ');
                                    
                                    if(question){
                                            
                                            time3_day2_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_2&times=$doctor_times3_day2&dow=$dow_day2');
                                            var times3_day2_url_$dr_id_spec = time3_day2_$dr_id_spec.getAttribute('href');
                                            window.location.href= times3_day2_url_$dr_id_spec;
                                        }
                                    
                                    
                                    }
                                    </script>";











                                    }else{
                                        echo "<div class='sub-table' style='display:none;width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_2</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day2 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day2_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time3_day2' onclick='time3_day2()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";




                }else if($current_date == $dr_day_3){

                



//***************************************Day3 - time 1 day3 */



echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times1_day3)){
                                echo "<div class='sub-table' style='width:128%'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'  id='time1_day3_$dr_id_spec' onclick='time1_day3_$dr_id_spec()' href='' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";


                                echo "<script>
                                function time1_day3_$dr_id_spec(){
                                    var time1_day3_$dr_id_spec = document.getElementById('time1_day3_$dr_id_spec');
                                    
                                    question = confirm('Are you sure for booking this time ? ');
                                    
                                    if(question){
                                            
                                            time1_day3_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_3&times=$doctor_times1_day3&dow=$dow_day3');
                                            var times1_day3_url_$dr_id_spec = time1_day3_$dr_id_spec.getAttribute('href');
                                            window.location.href= times1_day3_url_$dr_id_spec;
                                        }
                                    
                                    
                                    }
                                    </script>";





                                    }else{
                                        echo "<div class='sub-table' style='display:none;width:128%'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times1_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times1_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time1_day3' onclick='time1_day3()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";






//*********************************** Day3 - time 2 day3  */




echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times2_day3)){
                                echo "<div class='sub-table' style='width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times2_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times2_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked' id='time2_day3_$dr_id_spec' onclick='time2_day3_$dr_id_spec()' href='' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";





                                echo "<script>
                                function time2_day3_$dr_id_spec(){
                                    var time2_day3_$dr_id_spec = document.getElementById('time2_day3_$dr_id_spec');
                                    
                                    question = confirm('Are you sure for booking this time ? ');
                                    
                                    if(question){
                                            
                                            time2_day3_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_3&times=$doctor_times2_day3&dow=$dow_day3');
                                            var times2_day3_url_$dr_id_spec = time2_day3_$dr_id_spec.getAttribute('href');
                                            window.location.href= times2_day3_url_$dr_id_spec;
                                        }
                                    
                                    
                                    }
                                    </script>";












                                    }else{
                                        echo "<div class='sub-table' style='display:none; width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times2_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times2_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time2_day3' onclick='time2_day3()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";





//*****************************************Day3 - time 3 day 3  */




echo  '   <div class="wrap">';
                        echo '<div class="accordian">';
                            echo '<div class="content" id="email">';
                            if(!empty($doctor_times3_day3)){
                                echo "<div class='sub-table' style='width:128%'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                    
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked' id='time3_day3_$dr_id_spec' onclick='time3_day3_$dr_id_spec()' href='ss' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";





                                echo "<script>
                                function time3_day3_$dr_id_spec(){
                                    var time3_day3_$dr_id_spec = document.getElementById('time3_day3_$dr_id_spec');
                                    
                                    question = confirm('Are you sure for booking this time ? ');
                                    
                                    if(question){
                                            
                                            time3_day3_$dr_id_spec.setAttribute('href', 'http://localhost/group_project/medicaltecnology-project/mt/html/payment-method.php?id=$dr_id_spec&date=$dr_day_3&times=$doctor_times3_day3&dow=$dow_day3');
                                            var times3_day3_url_$dr_id_spec = time3_day3_$dr_id_spec.getAttribute('href');
                                            window.location.href= times3_day3_url_$dr_id_spec;
                                        }
                                    
                                    
                                    }
                                    </script>";












                                    }else{
                                        echo "<div class='sub-table' style='display:none; width:128%;'>";
                                    echo "<div class='sub-col-title' style='border-top-left-radius: 10px;
                                    border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;'>";
                                        echo "<p class='sub-col-text'>$dr_day_3 <br> $dow_day3</p>";
                                    echo "</div>";
                                        echo "<div class='time-content'>";
                                        echo "<h6 class='t-clo'>From $doctor_times3_day3 </h6>";
                                        echo "<h6 class='t-clo'>To $doctor_times3_day3_endTime</h6>";
                                    echo "</div>";

                                    echo "<a class='btn-book book btn-booked'><span
                                            class ='btn-text' id='time3_day3' onclick='time3_day3()' style='  background-color: red;
                                                        color: #fff;
                                                        width: 100%;
                                                        padding: 5px;
                                                        border-bottom-left-radius: 5px;
                                                        border-bottom-right-radius: 5px;' >Book Now</a>";
                                echo "</div>";
                                    }

                                    
                        echo "</div>";
                        echo "</div>";
                    echo "</div>";




                }else{
                    if(!empty($dr_day_1) && $dr_day_1 > $current_date){
                    echo "<h3 id='notzisweek'>Available At $dr_day_1</h3>";
                    }else if(!empty($dr_day_2) && $dr_day_2 > $current_date){
                        echo "<h3 id='notzisweek'>Available At $dr_day_2</h3>";

                    }else if(!empty($dr_day_3) && $dr_day_3 > $current_date){
                        echo "<h3 id='notzisweek'>Available At $dr_day_3</h3>";

                    }

                }












                



                echo "</div>";
                echo "</div>";           
            
                echo "</body>";

        }

}

}







function check_coupon(){
    if(isset($_POST['confirm_c'])){
        $random_id = clear($_POST['random_id']);
        $coupon = clear($_POST['coupon']);


        $sql = "SELECT * from pharmacy where random_id = '".$random_id."' AND  coupon = '".$coupon."' ";

        $result = query($sql);
        while($rows = fetching($result)){
            $id_pharm = $rows['id'];
            $rand_id = $rows['random_id'];
            $coupon_id = $rows['coupon'];
            $code = $rows['code_status'];
            $pharmacy_name = $rows['pharmacy_name'];

            if($random_id === $rand_id && $coupon === $coupon_id && $code === "approved"){
                valid_success("Approved ~> $pharmacy_name");
                $sql2 = "UPDATE pharmacy SET `code_status` = 'Expired' where id = '".$id_pharm."' ";
                query($sql2);
            }else{
                valid_error("Expired ~> $pharmacy_name");
                
            }   
            
        }

        
        

        
        
    }
}






function login_pharmacian(){
    
        if(isset($_POST['login_pharm'])){
            $username = clear($_POST['username']);
            $password = clear($_POST['password']);
    
            if(empty($username)){
                $errors[] = "username shouldn't be empty";
    
    
            }
    
            if(empty($password)){
                $errors[] = "password shouldn't be empty";
            }
    
    
            if(!empty($errors)){
                foreach($errors as $err){
                 echo "<small>" . valid_error($err) ."</small>";
                }
            }else{
    
                $sql = "SELECT * from pharmacian where username = '".$username."' ";
                $result = query($sql);
                // $rows = fetching($result);
                while($rows = fetching($result)){
                $db_password = $rows['password'];
                $id = $rows['id'];
                $username = $rows['username'];
                $pharm_name = $rows['pharm_name'];

                
                if(md5($password) == $db_password){
                    
                    
    
                    $_SESSION['username'] = $username;
                    $_SESSION['pharm_name'] = $pharm_name;

                    
                    redirect("confirm_pharmacy.php");
    
    
    
    
                    }else{
                        valid_error("Not Logged in");
                    }
                }    
            }
    
        }
   
}











function login_administrator(){
    

    if(isset($_POST['login_area'])){



        $username = clear($_POST['username']);
        $password = clear($_POST['password']);
        $errors = [];

        if(empty($username)){
            $errors[] = "username shouldn't be empty";
    
    
        }
    
        if(empty($password)){
            $errors[] = "password shouldn't be empty";
        }
    
    
        if(!empty($errors)){
            foreach($errors as $err){
             echo "<small>" . valid_error($err) ."</small>";
            }
        }else{

            $sql = "SELECT * from signin where `username` = '".$username."' AND role='admin' ";
            $result = query($sql);
            while($rows = fetching($result)){
                $db_password = $rows['password'];
                $db_username = $rows['username'];

                $db_role = $rows['role'];
                $admin_id = $rows['id'];
                
                if(md5($password) === $db_password){
                    $_SESSION['admin'] = $db_username;
                    $_SESSION['role'] = $db_role;
                    $_SESSION['id'] = $admin_id;
                    
                    redirect("admin.php");
                }else{
                    // $_SESSION['message'] = 'Username or password is incorrect!';
                    redirect("login-doctor.php");
                }



            }
        }

    }    
}




function dynamic_page(){
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }else{
        $source = '';
    }


    switch($source){
        case 'add_doctor':
            include('add_doctor.php');
            break;
        case 'add_patients':
            include('add_patients.php');
            break;
        case 'search_doctor':
            include('search_doctor.php');
            break;
        case 'edit_doctor':
            include('edit_doctor.php');
            break;
            
        case 'delete_doctor':
            include('delete_doctor.php');
            break;
        default:
            // include('admin.php');
            include('view_all.php');
    }
}



function admin_add_user(){

	if(isset($_POST['add_new_dr'])){


        

        $username = clear($_POST['dr_username']);
        $password = clear(md5($_POST['dr_password']));
        $role = clear($_POST['role_name']);
        $rand_value = rand(000000, 999999);





        if(empty($username)){
            $errors[] = "username shouldn't be empty";


        }

        if(empty($password)){
            $errors[] = "password shouldn't be empty";
        }

        if(empty($role)){
            $errors[] = "role shouldn't be empty";
        }


        $sql_check_user = "SELECT id, username from signin where username = '".$username."' ";

        $result = query($sql_check_user);
        


           if(num_rows($result) >= 1){
            
            $errors[] = "Username Already Exist";
           }
        

        if(!empty($errors)){
            foreach($errors as $err){
             echo "<small>" . valid_error($err) ."</small>";
            }
        }else{


            
               

            $sql = "INSERT INTO signin (username, password, role) VALUES('".$username."', '".$password."', '".$role."') ";
            $result = query($sql);
            $sql_fetch_id = "SELECT * from signin where username = '".$username."' ";

            $result3 = query($sql_fetch_id);
            // $another = fetching($result);
            while($rows3 = fetching($result3)){
    
                $id_something_db = $rows3['id'];
                $username_db = $rows3['username'];

            }
            if($result){

                $sql_create_doctor = "INSERT INTO doctor(id, signin_id, rand_value) values('".$id_something_db."', '".$id_something_db."', '".$rand_value."') ";
                query($sql_create_doctor);
                valid_success("USer Added Succesfully!");
            }else{
                valid_error("User Not Added Succesfully!");
            }
        }

    }
}


function logged_in_admin(){
    if(isset($_SESSION['admin'])){
        return true;
    }else{
        return false;
    }
}




function search_doctor(){
    if(isset($_POST['search_doctor'])){
        $dr_name = clear($_POST['dr_name']);

        $sql = "SELECT * from doctor where dr_name LIKE '%".$dr_name."%' ";
        
        $result = query($sql);
        

                                              
                                            while($rows = fetching($result)){
                                                $id_doctor = $rows['id'];                                            
                                                // $strs = strtoupper($rows['p_name'][0].''.$rows['p_name'][1]);

                                                $strs = explode(' ', $rows['dr_name']);

                                                $strs2 =  strtoupper($strs[0][0] . $strs[1][0]);
                                           
                                    echo "<tr><td style='width:20%;'>";        
                                    echo '<div class="d-flex align-items-center">';
                                    echo '<div class="m-r-10"><a class="btn btn-circle btn-info text-white">'.$strs2.'</a></div>';
                                    echo '<div style="color:red">'.$rows['dr_name'].'</div>';            

                                    echo '<div class="">';
                                    echo '<h4 class="m-b-0 font-16">';
                                            
                                    echo  '</h4>';
                                    echo  '</div>';
                                    echo  '</div>';
                                    echo  '</td>';
                                
                                echo '<td style="width:20%;">';
                                echo '<label class="label label-danger">'. $rows['dr_clinic_address'] . '</label>';
                                echo  '</td>';
                                echo '<td>'. $rows['dr_specialization'] . '</td>';
                                echo '<td>'. $rows['dr_degree'] . '</td>';
                                echo '<td>'. $rows['phone'] . '</td>';
                                echo '<td>'. $rows['fees'] . '</td>';
                                echo '<td>'. $rows['bio'] . '</td>';
                                echo '<td>'.'<img with="50" height="50" style="  border-radius: 60%;" src="'.$rows['img'].'" />' .'</td>';

                                echo '<td>'. $rows['area'] . '</td>';
                                echo '<td> <a class="btn btn-primary" href="admin.php?source=edit_doctor&id='.$id_doctor.'">Edit'.'</a></td>';
                                echo '<td> <a class="btn btn-danger" href="admin.php?source=delete_doctor&id='.$id_doctor.'">X'.'</a></td>';

                           echo '</tr>';


                        }




    }
}





function update_doctor(){
    $errors = [];


    if(isset($_GET['id'])){
        $ids = $_GET['id'];
    }else{
        $ids = '';
    }

    if(isset($_POST['update_doctor'])){
        $dr_name = clear($_POST['dr_name']);
        $dr_specialization = clear($_POST['dr_specialization']);
        $dr_clinic_address = clear($_POST['dr_clinic_address']);
        $dr_degree = clear($_POST['dr_degree']);
        $phone = clear($_POST['phone']);
        $fees = clear($_POST['fees']);
        $bio = clear($_POST['bio']);


        $img_profile = $_FILES['img']['tmp_name'];
        $img_name = $_FILES['img']['name'];
        $uploaded_last = $dr_name .  "_" . $img_name;
        $target= 'images/imgs/' . $uploaded_last;
        move_uploaded_file($img_profile, $target);
        

        $area = clear($_POST['area']);
        $day_1 = clear($_POST['day_1']);
        $day_2 = clear($_POST['day_2']);
        $day_3 = clear($_POST['day_3']);
    if(empty($dr_name)){
        $errors[] = "Doctor Name shouldn't be empty";


    }

    if(empty($dr_clinic_address)){
        $errors[] = "Doctor Clinic Address shouldn't be empty";
    }

    if(empty($dr_specialization)){
        $errors[] = "Doctor Specialization shouldn't be empty";
    }

    if(!empty($errors)){
        foreach($errors as $err){
         echo "<small>" . valid_error($err) ."</small>";
        }
    }else{

    


       




            $sql_update_doctor = "UPDATE doctor SET  dr_name = '".$dr_name."' , dr_clinic_address = '".$dr_clinic_address."' , dr_specialization = '".$dr_specialization."', dr_degree = '".$dr_degree."' , 
            phone = '".$phone."', fees = '".$fees."', bio = '".$bio."', img = '".$target."', area = '".$area."' , day_1 = '".$day_1."' , day_2 = '".$day_2."', day_3 = '".$day_3."' where id = '".$ids."' ";

            $result_updated_doctor = query($sql_update_doctor);

            if($result_updated_doctor){
                valid_success("Doctor Updated Successfully!");
            }else{
                valid_error("Doctor Not Updated Successfully!");
            }
        }

    }
}











function delete_doctor(){

if(isset($_GET['id'])){
    $id_delete = $_GET['id'];

}else{
    $id_delete = '';

}

$sql_doctor_fetch = "SELECT * from doctor where id = '".$id_delete."' ";

$result_dr = query($sql_doctor_fetch);

$dr_name_fetched = fetching($result_dr);

// echo $another_dr = $dr_name_fetched['dr_name'];


$sql_delete_doctor =  "DELETE FROM `doctor` WHERE id = '".$id_delete."' ";

$result_delete = query($sql_delete_doctor);

// while($rows_delete = fetching($result_delete)){
//     $dr_name = $rows_delete['dr_name'];

// }

if(!$result_delete){
    // echo "<script>alert('Doctor Deleted Successfully!')</script>";
    echo " not deleted ";
}else{
    // echo "<script>alert('Doctor Not Deleted Successfully!')</script>";
    // echo " not deleted ";

} 

}






function schadueling(){




    

if(isset($_GET['id'])){
    global $id_sch;
    $id_sch = $_GET['id'];

}else{
    $id_sch= '';
}



// Doctor table -->
echo '<div class="modal fade" id="book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
echo '<div class="modal-dialog md-ex" role="document">';
  echo '<div class="modal-content m-content-ex">';
    echo '<div class="modal-header">';
      echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none">';
       echo ' <span aria-hidden="true" style="outline: none">&times;</span>';
      echo '</button>';
    echo '</div>';
    echo '<div class="modal-body">';
        echo '<div class="row time-table-column">';
       




$sql_sch = "SELECT * from doctor where id = '".$id_sch."' ";
$query_sch = query($sql_sch);

while($get_sch = fetching($query_sch)){
    $dr_day_1_sch = $get_sch['day_1'];
    $dr_day_2_sch = $get_sch['day_2'];
    $dr_day_3_sch = $get_sch['day_3'];


    /***********     Day 1  *****/
    // $dr_day_exploding = explode("T", $dr_day_1_sch);

    // $date_dr = $dr_day_exploding[0]; //date
    // $time_dr = $dr_day_exploding[1]; //time

    // $time_dr_gia_1 =  date('g:ia', strtotime($time_dr)) . "</p><br><br>";
            
    // if($time_dr_gia_1){
    //     $time_dr_gia_1;
    // }else{
    //     $time_dr_gia_1 = '';
    // }
    //         $unixts = strtotime($date_dr);
    //         $dow_dr = date("l", $unixts);



    /***********     Day 2  *****/

            // $dr_day_exploding2 = explode("T", $dr_day_2_sch);

            // $date_dr2 = $dr_day_exploding2[0]; //date
            // $time_dr2 = $dr_day_exploding2[1]; //time
        
                    
            // $time_dr_gia_2 =  date('g:ia', strtotime($time_dr2)) . "</p><br><br>";

        
            //         $unixts2 = strtotime($date_dr2);
            //         $dow_dr2 = date("l", $unixts2);
                    
                    

                        /***********     Day 3  *****/


    //                 $dr_day_exploding3 = explode("T", $dr_day_3_sch);

    // $date_dr3 = $dr_day_exploding3[0]; //date
    // $time_dr3 = $dr_day_exploding3[1]; //time


    //         $unixts3 = strtotime($date_dr3);
    //         $dow_dr3 = date("l", $unixts3);


    //         $time_dr_gia_3 =  date('g:ia', strtotime($time_dr3)) . "</p><br><br>";

}

fetching_schedualing();
 

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


}

function fetching_schedualing(){
    


    if(isset($_GET['id'])){
        global $id_sch;
        $id_sch = $_GET['id'];
    
    }else{
        $id_sch= '';
    }
    

$sql_sch_checking = "SELECT * from schedual where dr_id = '".$id_sch."' ";

$query_sch_checking = query($sql_sch_checking);



    while($fetching_sch_checking = fetching($query_sch_checking)){

        $sch_date = $fetching_sch_checking['sch_date'];
        $sch_day = $fetching_sch_checking['sch_day'];
        $sch_time = $fetching_sch_checking['sch_time'];

        $sch_time_gia = date('g:ia', strtotime($sch_time));


        $unixts = strtotime($sch_date);
        $dow_dr = date("l", $unixts);

        echo '<div class="col-sm">';
                               echo "   <div class='sub-table-ex'>";
                                        echo '<div class="sub-col-title-ex">';
                                            echo "<p class='sub-col-text-ex'>$dow_dr</p>"; 
                                        echo '</div>';
                                        echo '<div class="time-content-ex">';
                                        echo '<div>';
                                echo           "<h6 class='t-clo'>$sch_time_gia</h6>";
                                if(!empty($sch_day) || !empty($sch_date) || !empty($sch_time)){
                                    echo           "<button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                                } else{
                                    echo           "<button class='btn-book-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";

                                }
                                echo '          </div>';

                                 echo '<div class="sub-col-title-ex">';
                                            echo "<p class='sub-col-text-ex'>$sch_date</p>"; 
                                        echo '</div>';
                                    //        echo '<div>';
                                    //         echo'    <h6 class="t-clo">12:00 PM</h6>';
                                    // echo            "<button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                                    // echo           '        </div>';
                                    // echo           '         <div>';
                                    // echo           '                   <h6 class="t-clo">12:00 PM</h6>';
                                    // echo           "                   <button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                                    // echo           '                      </div>';
                                    // echo           '             <div>';
                                    // echo           '                   <h6 class="t-clo">12:00 PM</h6>';
                                    // echo           "                      <button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                                    // echo           '       </div>';


                                    echo           '       </div>';

                                    echo           '     </div>';                        
        echo           '  </div>';



    }

}





















function messages_pt(){
    
    if(!empty($_SESSION['email'])){

$session_chat_pt = $_SESSION['email'];
    }else{
        $session_chat_pt = '';
    }


$sql_chat_pt = "SELECT * from signup where email = '".$session_chat_pt."' ";
$query_chat_pt = query($sql_chat_pt);
while($fetching_chat_pt = fetching($query_chat_pt)){
    $f_name_pt = $fetching_chat_pt['f_name'];
    $l_name_pt = $fetching_chat_pt['l_name'];

}

$sql_chat_pt_rand = "SELECT * from profile_patients where email = '".$session_chat_pt."' ";
$query_chat_pt_rand = query($sql_chat_pt_rand);
$fetching_chat_pt_rand = fetching($query_chat_pt_rand);
$value_chat_pt_rand = $fetching_chat_pt_rand['rand_value'];

$sql_chats = "SELECT * from chat where rand_value_pt = '".$value_chat_pt_rand."' ORDER BY id DESC LIMIT 0, 5";
$chats_query = query($sql_chats);
while($fetch_chats = fetching($chats_query)){

$msgs_all_pt =    $fetch_chats['output'];
$message_at_pt =  $fetch_chats['message_at'];
$img_sending_pt = $fetch_chats['img_sending'];
$id_pt_chats = $fetch_chats['p_id'];


// $rand_value_chat_pt = $fetch_chats['rand_value_pt'];
// $rand_value_chat_dr = $fetch_chats['rand_value_dr'];

// mysqli_close($connection);

                      if($session_chat_pt){
                        if(isset($f_name_pt) || isset($l_name_pt)){
                            echo "<li class='clearfix'>";
echo "<div class='message-data align-right'>";
                      echo "<span class='message-data-time'>$message_at_pt, Today</span>"; 

                          echo "<span class='message-data-name' >
                          $f_name_pt  $l_name_pt
                          </span> <i class='fa fa-circle online'></i>";
                          echo "</div>";
                    echo "<div class='message other-message float-left'>";
                          echo $msgs_all_pt . " " . $value_chat_pt_rand;  
                          echo "<a href='$img_sending_pt' target='blank' style='display:block;margin-top:30px'><img src='$img_sending_pt' style='width:100px;height=100px'; /></a>"; 
                    
                    echo "</div>";
                        echo "</li>";


                        
                        }else{

                    //       echo "<span class='message-data-name' >

                    //       </span> <i class='fa fa-circle me'></i>";

                    //       echo "</div>";
                    // echo "<div class='message other-message float-left'>";
                    //       echo $msgs_all_pt . " " . $value_chat_pt_rand;  
                    //       echo "<a href='$img_sending_pt' target='blank' style='display:block;margin-top:30px'><img src='$img_sending_pt' style='width:100px;height=100px'; /></a>"; 
                    
                    // echo "</div>";
                    //     echo "</li>";
                        }

                        }

                        
                    

    }

}




function messages_dr(){


    if(!empty($_SESSION['username'])){
    $username_dr_chat = $_SESSION['username'];
    }else{
        $username_dr_chat = ''; 
    }
    
    $sql_chat_dr = "SELECT id from signin where username = '".$username_dr_chat."' ";
    $query_chat_dr = query($sql_chat_dr);
    $fetching_chat_dr = fetching($query_chat_dr);
    $fetching_chat_dr_id = $fetching_chat_dr['id'];

        

    $sql_chat_dr_name = "SELECT dr_name from doctor where id = '".$fetching_chat_dr_id."' ";
    $query_chat_dr_name = query($sql_chat_dr_name);
    $fetching_chat_dr_name = fetching($query_chat_dr_name);
    $fetching_chat_dr_name = $fetching_chat_dr_name['dr_name'];
    


    $sql_chat_doctor_rand = "SELECT rand_value from doctor where id = '".$fetching_chat_dr_id."' ";
    $query_chat_doctor_rand = query($sql_chat_doctor_rand);
    $fetching_chat_doctor_rand = fetching($query_chat_doctor_rand);
    $value_chat_doctor_rand = $fetching_chat_doctor_rand['rand_value'];
    // echo $value_chat_doctor_rand;

    $sql_chats_dr_all = "SELECT * from chat where rand_value_dr = '".$value_chat_doctor_rand."' ORDER BY id DESC LIMIT 0, 5 ";


    $chats_query_dr_all = query($sql_chats_dr_all);

    while($fetch_chats_dr_all = fetching($chats_query_dr_all)){

    $msgs_all_dr =    $fetch_chats_dr_all['output'];
    $message_at_dr =  $fetch_chats_dr_all['message_at'];
    $img_sending_dr = $fetch_chats_dr_all['img_sending'];
    $id_pt_chats = $fetch_chats_dr_all['p_id'];

        

                  if(isset($username_dr_chat)){
                    if(isset($fetching_chat_dr_name)){
                        echo "<li>";
                        echo "<div class='message-data align-left'>";
                      echo "<span class='message-data-name'><i class='fa fa-circle online'></i> $fetching_chat_dr_name </span>";
                      echo "<span class='message-data-time'>$message_at_dr, Today</span>";
                      echo "</div>";
                       echo "<div class='message my-message'>";
                       echo $msgs_all_dr . " " . $value_chat_doctor_rand;  
                       echo "<a href='$img_sending_dr' target='blank' style='display:block;margin-top:30px'><img src='$img_sending_dr' style='width:100px;height=100px'; /></a>"; 
                 
                       echo "</div>";
                         echo "</li>";

                         
                    }else{
                    //     echo "<li>";
                    //     echo "<div class='message-data align-left'>";
                    //   echo "<span class='message-data-name'><i class='fa fa-circle me'></i> </span>";
                    //   echo "<span class='message-data-time'>$message_at_dr, Today</span>";
                    //   echo "</div>";
                    //    echo "<div class='message my-message'>";
                    //    echo $msgs_all_dr . " " . $value_chat_doctor_rand;  
                    //    echo "<a href='$img_sending_dr' target='blank' style='display:block;margin-top:30px'><img src='$img_sending_dr' style='width:100px;height=100px'; /></a>"; 
                 
                    //    echo "</div>";
                    //      echo "</li>";

                    // echo "<li>";
                    //     echo "<div class='message-data align-left'>";
                    //   echo "<span class='message-data-name'><i class='fa fa-circle me'></i> </span>";
                    //   echo "<span class='message-data-time'>$message_at_dr, Today</span>";
                    //   echo "</div>";
                    //    echo "<div class='message my-message'>";
                    //    echo $msgs_all_dr . " " . $value_chat_doctor_rand;  
                    //    echo "<a href='$img_sending_dr' target='blank' style='display:block;margin-top:30px'><img src='$img_sending_dr' style='width:100px;height=100px'; /></a>"; 
                 
                    //    echo "</div>";
                    //      echo "</li>";
                    }
                  }

                  
                  
    }

}







function sending_msg($user_id, $message, $img_sedning){

    if(isset($_GET['room'])){
        global $room_id;
          $room_id = $_GET['room'];
          
      }else{
          $room_id = '';
      }


    $sql_insert_messages = "INSERT INTO chat (messages, message_at, img_sending, user_id, room)
     VALUES('".$message."', now(), '".$img_sedning."' , '".$user_id."', '".$room_id."' ) ";
     query($sql_insert_messages);
      
    
    }


















?>
