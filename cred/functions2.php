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


function valid_success($msg_success){
    $msg_success = <<<DELIMITER
    <div class="alert alert-success" role="alert">
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
             $id = $check_email['id'];

            

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
                
                    // echo "welcome ya " .$_SESSION['email'];
                    $_SESSION['email'] = $email_addr;
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









function chat_connection(){
        if(isset($_POST['sending'])){
            $msg = $_POST['msg'];
        
            $img_profile = $_FILES['img_sending']['tmp_name'];
            $img_name = $_FILES['img_sending']['name'];
            $uploaded_last = "chat" .  "_" . $img_name;
            $target= 'imgs/' . $uploaded_last;
            move_uploaded_file($img_profile, $target);

            if(empty($msg)){
                echo "<script>alert('Enter your message')</script>";
            }else{
                
            $sql = "INSERT INTO chat(output, img_sending) VALUES('".$msg."', '".$target."')";
            query($sql);  

            }
        }
}




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
    $sql_rating = "SELECT img_p, f_name, l_name, rating, comments from rates 
                        INNER JOIN  signup On signup.id = rates.id_signup
                        INNER JOIN  doctor On doctor.id = rates.id_doctor where doctor.id = '".$id."' ";

                        $result3  = query($sql_rating);

                        


                    



                        while($rows3 = fetching($result3)){
                            $f_name = $rows3['f_name'];
                            $l_name = $rows3['l_name'];
                            $rating = $rows3['rating'];
                            $comments = $rows3['comments'];
                            $imgs = $rows3['img_p'];
                            
                echo "<div class='table-feedback'>";

               
                echo "<div class='row'>";

                echo "<div class='col-12'>";
                    echo "<div class='feedback-img'>";
                        echo   '<img src="'.$imgs.'" class="doctor-feedback rounded-circle rounded float-left">';
                        echo    "</div>";
                        echo    "<h5>$f_name  $l_name</h5>";
                        echo    '<span style="margin-bottom: 0">Wednesday,18 december 2019 11:49 AM</span>';
                    echo "</div>";
                echo "</div>"; 

                echo "<div class='row'>";
                    echo "<div class='col-12'>";
                        echo "<div class='feedback-text'>";
                        echo    "<p class='text'>&quot;<span>$comments</span>&quot;</p>";
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
    
    
    
    
    $sql3 = "UPDATE `profile_patients` SET `id`= '".$id3."', `address`= '".$address."', `mobile`= '".$mobile."'";
    // $sql3 .= ", `weight`='".$weight."', `height`= '".$height."', ";
    $sql3 .= " ,`batholigical_case`= '".$batholigical_case."', `blood_group`= '".$blood_group."', ";
    $sql3 .= " `pharmacy_id` = '".$pharmacy_id."', `img`='".$target."' , `id_signup` = '".$id_signup."', `weight`='".$weight."', `height`='".$height."' where `id` = '".$id_signup."' ";
    $result4 = query($sql3);
    
    if($result4){
        img_patient();
        valid_success('Patient Profile Updated Successfully!');
    
    }else{
        valid_error('Patient Profile Not Updated Successfully!');
        
    }
    
    }
}



function medical_record(){
    // if(logged_in_role()){

        // if(isset($_GET['p_id']) && isset($_GET['dr_id'])){
        //     $p_id = $_GET['p_id'];
        //     $dr_id = $_GET['dr_id'];

        // }else{
        //     $p_id = '';
        //     $dr_id = '';
        // }

            $email_mr = $_SESSION['email'];
            $username_mr = $_SESSION['username'];

            $sql_fetch_pt = "SELECT id from profile_patients where email = '".$email_mr."' ";
            $query_fetch_pt = query($sql_fetch_pt);
            $fetching_pt = fetching($query_fetch_pt);
            $id_fetched_pt = $fetching_pt['id'];


            $sql_fetch_dr = "SELECT id from signin where username = '".$username_mr."' ";
            $query_fetch_dr = query($sql_fetch_dr);
            $fetching_dr = fetching($query_fetch_dr);
            $id_fetched_dr = $fetching_dr['id'];

        if(isset($_POST['confirm_mr'])){
            $description = clear($_POST['description']);
            $medicines = clear($_POST['medicines']);
            $doexam = date("y-m-d h:m:s");
            $timestamp = time()+date("Z");
            $last_doexam =  gmdate("Y/m/d H:i:s",$timestamp);
            $sql_mr = "INSERT INTO medical_record(`description`, `medicines`, `p_id`, `dr_id`, `date_of_exam`) ";
            $sql_mr .= " VALUES('".$description."', '".$medicines."', '".$id_fetched_pt."', '".$id_fetched_dr."', '".$last_doexam."')";

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

    

    echo'    <select name="sspeciality" class="form-control selectpicker">';
    echo'    <option value=" ">Select Specialty</option>';

        

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

            // $dr_sch_date = $rows_drs['sch_date'];
            // $dr_sch_day = $rows_drs['sch_day'];
            $dr_img = $rows_drs['img'];

            $dr_day_exploding = explode("T", $dr_day_1);
            global $date_dr;
            $date_dr = $dr_day_exploding[0]; //date
            $time_dr = $dr_day_exploding[1]; //time

            echo $time_dr . "<br>";
            

            $unixts = strtotime($date_dr);
            $dow_dr = date("l", $unixts);
            
            $dow_to_date = date("Y-m-d", $unixts);
            
            
            // echo $dow_to_date;


            

            $dr_day_exploding2 = explode("T", $dr_day_2);
            $date_dr2 = $dr_day_exploding2[0]; 
            $time_dr2 = $dr_day_exploding2[1];


            $unixts2 = strtotime($date_dr2);
            $dow_dr2 = date("l", $unixts2);

            $dow_to_date2 = date("Y-m-d", $unixts2);
            
            
            // echo $dow_to_date2;


            

            $dr_day_exploding3 = explode("T", $dr_day_3);
            $date_dr3 = $dr_day_exploding3[0]; 
            $time_dr3 = $dr_day_exploding3[1];






            $unixts3 = strtotime($date_dr3);
            $dow_dr3 = date("l", $unixts3);

            $dow_to_date3 = date("Y-m-d", $unixts3);
            
            
            // echo $dow_to_date3 . "<br>";


            $array_drs = array(
                array('Saturday'=>$dr_id_spec, 'Sunday'=>$dr_id_spec, 'Monday'=>$dr_id_spec, 'Tuseday'=>$dr_id_spec, 'Wednesday'=>$dr_id_spec, 'Thursday'=>$dr_id_spec, 'Friday'=>$dr_id_spec)
            );


            // $arrays_day_of_week = array(
            //     array('Saturday'=>'Saturday', 'Sunday'=>'Sunday', '')
            // )


            $array_of_ids = $array_drs[0][Thursday];

            // $dr_1 =  $array_drs[0][0] . "<br>" . $array_drs[0][1] . "<br>".$array_drs[0][2] . "<br>" . $array_drs[0][3];
            // $dr_2 = $array_drs[1][0] . "<br>" . $array_drs[1][1] . "<br>".$array_drs[1][2] . "<br>" . $array_drs[1][3];
            // $dr_3 = $array_drs[2][0] . "<br>" . $array_drs[2][1] . "<br>".$array_drs[2][2] . "<br>" . $array_drs[2][3];

            // echo $array_drs[0][saturday];
            // for($x = 0; $x < 3; $x++){
            //     for($y = 0; $y < 4;$y++){
            //         if($array_drs[$x][$y] == "") {
            //             echo "????" . "<br>";
            //         }else{
            //             echo $array_drs[$x][$y]. "<br>";
            //         }
                         
            //     }

            // }


            // for($x = 1; $x <= 7;$x++){
            //     if($x == 1 && $dow_dr == 'Saturday'){
            //         $day_1_sat = "Saturday";
            //         echo $day_1_sat;
            //     }else if($x == 2 && $dow_dr == 'Sunday'){
            //         $day_2_sun = "Sunday";
            //         echo $day_2_sun;
            //     }else if($x == 3 && $dow_dr == 'Monday'){
            //         $day_3_mon = "Monday";
            //         echo $day_3_mon;
            //     }else if($x == 4 && $dow_dr == 'Tuseday'){
            //         $day_4_tus = "Tuseday";
            //         echo $day_4_tus;
            //     }else if($x == 5 && $dow_dr == 'Wednesday'){
            //         $day_5_wed = "Wednesday";
            //         echo $day_5_wed;
            //     }else if($x == 6 && $dow_dr == 'Thursday'){
            //         $day_6_thu = "Thursday";
            //         echo $day_6_thu;
            //     }else if($x == 7 && $dow_dr == 'Friday'){
            //         $day_7_fri = "Friday";
            //         echo $day_7_fri;
            //     }
            // }




            // booking_dr_patients();
            
            // $another_dr_spec = $dr_spec;

            //     echo $another_dr_spec;

                echo "<form action='' method='POST'>";  
                    echo    '<div class="container" id="Doctor1">';
                    echo    '<div class="row">';
                    echo      '<div class="col-xs-12 col-sm-6 col-md-6" style="width: 100%;">';
                            echo   '<div class="well well-sm" >';
                            echo       '<div class="row">';
                                echo      '<div class="col-sm-4">';
                                echo           "<img src='$dr_img' style='border-radius: 150px;' alt='' class='img-rounded img-responsive'/>";
                                echo      '</div>';
                                echo        '<div class="col-sm-6 col-md-4">';
                                echo           "<h3 class='name-doctor' name='dr_name_result'>Dr / $dr_name_result</h3>";
                                echo            "<h5 class='department'>$dr_spec_result</h5>";
                                echo         '<div class="stars">';
                                echo           '<i class="glyphicon glyphicon-star"></i>';
                                echo           '            <i class="glyphicon glyphicon-star"></i>';
                                echo           '            <i class="glyphicon glyphicon-star"></i>';
                                echo           '            <i class="glyphicon glyphicon-star"></i>';
                                echo           '            <i class="glyphicon glyphicon-star-empty"></i>';
                                echo           '            </div>';
                                echo           '            <p>';
                                echo           "            <i class='glyphicon glyphicon-map-marker' style='color: #59cdc4;'></i>$dr_addr_result, Al Qahirah, Egypt<br/>";
                                echo           "            <i class='glyphicon glyphicon-credit-card' style='color: #59cdc4;'></i>Fees : $dr_fees_result <i style='color: #59cdc4;'>EGP</i><br/>";
                                echo           "            <i class='glyphicon glyphicon-earphone' style='color: #59cdc4;'></i>$dr_phone</p>";
                                echo           '</div>';

                                echo '<div id="wrap" style="padding-right:50px;">';
                                echo    '<div id="accordian">';
                                echo        '<div class="content" id="email">';
                                    echo       '<form class="go-right" method="POST">';		
                                    echo        "<button class='create ' style='background-color:#59cdc4;border:none;' name='dow_dr'>$dow_dr</button>";
            
                                    
                                    echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;' name='date_dr'>$date_dr<br> $time_dr </button>";
            
                                    // echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>Empty </button>";
                                    
            
                                    for($x = 1; $x <= 7;$x++){
                                        if($x == 1 && $dow_dr == 'Saturday'){
                                            $day_1_sat = "Saturday";

                                            
                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day1_saturday' onclick='day1_day1_saturday()' href=''  >Book</a>";


                                        }else if($x == 2 && $dow_dr == 'Sunday'){
                                            $day_2_sun = "Sunday";

                                            // if($date_dr == $dow_dr2){
                                                    
                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day2_sunday' onclick='day1_day2_sunday()' href='' >Book</a>";
                                            // }

                                        }else if($x == 3 && $dow_dr == 'Monday'){
                                            $day_3_mon = "Monday";

                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day3_monday' onclick='day1_day3_monday()' href='' >Book</a>";

                                            


                                        }else if($x == 4 && $dow_dr == 'Tuesday'){
                                            $day_4_tus = "Tuesday";
                                            
                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day4_tuesday' onclick='day1_day4_tuesday()' href='' >Book</a>";



                                        }else if($x == 5 && $dow_dr == 'Wednesday'){
                                            $day_5_wed = "Wednesday";

                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day5_wednesday' onclick='day1_day5_wednesday()' href='' >Book</a>";


                                        }else if($x == 6 && $dow_dr == 'Thursday'){
                                            $day_6_thu = "Thursday";
                                            
                                            
                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day6_thursday' onclick='day1_day6_thursday()' href='' >Book</a>";

                                        }else if($x == 7 && $dow_dr == 'Friday'){
                                            $day_7_fri = "Friday";
                                            echo        "<a class='create' style='background-color:#fd0000;border:none;
                                            background-color: red;
                                            border: none;
                                            border-top-left-radius: 0;
                                            border-top-right-radius: 0;    display: block;
                                            background: red;
                                            width: 130px;
                                            border: 0;
                                            padding: 5px 15px;
                                            font-size: 1.0em;
                                            color: #FFF;
                                            border-bottom: 3px solid #000;
                                            text-align:center;
                                            border-radius: 5px;' name='dr_day1' id='day1_day7_friday' onclick='day1_day7_friday()'  href='' >Book</a>";

                                        }
                                    }
                                    
                                    echo        '</form>';
                                    echo    '</div>';
                                    echo  '</div>';
                                echo '</div>';

//********************************** DAY 2 ************************************ */

                    echo '<div id="wrap" style="padding-right:50px;">';
                    echo    '<div id="accordian">';
                    echo        '<div class="content" id="email">';
                        echo       '<form class="go-right" method="POST">';		
                        echo        "<button class='create ' style='background-color:#59cdc4;border:none;' name='dow_dr2'>$dow_dr2</button>";

                        
                        echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;' name='date_dr2'>$date_dr2<br> $time_dr2 </button>";

                        // echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>Empty </button>";

                        for($x = 1; $x <= 7;$x++){
                            if($x == 1 && $dow_dr2 == 'Saturday'){
                                $day_1_sat = "Saturday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                        border: none;
                        border-top-left-radius: 0;
                        border-top-right-radius: 0;    display: block;
                        background: red;
                        width: 130px;
                        border: 0;
                        padding: 5px 15px;
                        font-size: 1.0em;
                        color: #FFF;
                        border-bottom: 3px solid #000;
                        text-align:center;
                        border-radius: 5px;' name='dr_day2' id='day2_day1_saturday' onclick='day2_day1_saturday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';

                   
                                
                            }else if($x == 2 && $dow_dr2 == 'Sunday'){
                                $day_2_sun = "Sunday";
                                echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                        border: none;
                        border-top-left-radius: 0;
                        border-top-right-radius: 0;    display: block;
                        background: red;
                        width: 130px;
                        border: 0;
                        padding: 5px 15px;
                        font-size: 1.0em;
                        color: #FFF;
                        border-bottom: 3px solid #000;
                        text-align:center;
                        border-radius: 5px;' name='dr_day2' id='day2_day2_sunday' onclick='day2_day2_sunday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                            }   else if($x == 3 && $dow_dr2 == 'Monday'){
                                $day_3_mon = "Monday";
                                echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                        border: none;
                        border-top-left-radius: 0;
                        border-top-right-radius: 0;    display: block;
                        background: red;
                        width: 130px;
                        border: 0;
                        padding: 5px 15px;
                        font-size: 1.0em;
                        color: #FFF;
                        border-bottom: 3px solid #000;
                        text-align:center;
                        border-radius: 5px;' name='dr_day2' id='day2_day3_monday' onclick='day2_day3_monday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                            }else if($x == 4 && $dow_dr2 == 'Tuesday'){
                                $day_4_tus = "Tuesday";
                                echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                        border: none;
                        border-top-left-radius: 0;
                        border-top-right-radius: 0;    display: block;
                        background: red;
                        width: 130px;
                        border: 0;
                        padding: 5px 15px;
                        font-size: 1.0em;
                        color: #FFF;
                        border-bottom: 3px solid #000;
                        text-align:center;
                        border-radius: 5px;' name='dr_day2' id='day2_day4_tuesday' onclick='day2_day4_tuesday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';   
                    }else if($x == 5 && $dow_dr2 == 'Wednesday'){
                        $day_5_wed = "Wednesday";
                echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                            border: none;
                            border-top-left-radius: 0;
                            border-top-right-radius: 0;    display: block;
                            background: red;
                            width: 130px;
                            border: 0;
                            padding: 5px 15px;
                            font-size: 1.0em;
                            color: #FFF;
                            border-bottom: 3px solid #000;
                            text-align:center;
                            border-radius: 5px;' name='dr_day2' id='day2_day5_wednesday' onclick='day2_day5_wednesday()' href=''>Book</a>";
                            echo        '</form>';
                            echo    '</div>';
                            echo  '</div>';
                        echo '</div>';   
                        }else if($x == 6 && $dow_dr2 == 'Thursday'){
                            $day_6_thu = "Thursday";
                    echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                                border: none;
                                border-top-left-radius: 0;
                                border-top-right-radius: 0;    display: block;
                                background: red;
                                width: 130px;
                                border: 0;
                                padding: 5px 15px;
                                font-size: 1.0em;
                                color: #FFF;
                                border-bottom: 3px solid #000;
                                text-align:center;
                                border-radius: 5px;' name='dr_day2' id='day2_day6_thursday' onclick='day2_day6_thursday()' href=''>Book</a>";
                                echo        '</form>';
                                echo    '</div>';
                                echo  '</div>';
                            echo '</div>';   
                            }else if($x == 7 && $dow_dr2 == 'Friday'){
                                $day_7_fri = "Friday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;' name='dr_day2' id='day2_day7_friday' onclick='day2_day7_friday()' href=''>Book</a>";
                                    echo        '</form>';
                                    echo    '</div>';
                                    echo  '</div>';
                                echo '</div>';   
                                }

                }

//*********************************Day3 *************************************/
                

                

                    echo '<div id="wrap" style="padding-right:50px;">';
                    echo    '<div id="accordian">';
                    echo        '<div class="content" id="email">';
                        echo       '<form class="go-right" method="POST">';		
                        echo        "<button class='create ' style='background-color:#59cdc4;border:none;' href='something.html' name='dow_dr3'>$dow_dr3</button>";

                        
                        echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'href='something.html' name='date_dr3'>$date_dr3<br> $time_dr3 </button>";

                        // echo        "<button class='create ' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>Empty </button>";

                        for($x = 1; $x <= 7;$x++){
                            if($x == 1 && $dow_dr3 == 'Saturday'){
                                $day_1_sat = "Saturday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day1_saturday' onclick='day3_day1_saturday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    
                    }else if($x == 2 && $dow_dr3 == 'Sunday'){
                        $day_2_sun = "Sunday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day2_sunday' onclick='day3_day2_sunday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }else if($x == 3 && $dow_dr3 == 'Monday'){
                        $day_3_mon = "Monday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day3_monday' onclick='day3_day3_monday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }else if($x == 4 && $dow_dr3 == 'Tuesday'){
                        $day_4_tus = "Tuesday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day4_tuesday' onclick='day3_day4_tuesday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }else if($x == 5 && $dow_dr3 == 'Wednesday'){
                        $day_5_wed = "Wednesday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day5_wednesday' onclick='day3_day5_wednesday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }else if($x == 6 && $dow_dr3 == 'Thursday'){
                        $day_6_thu = "Thursday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day6_thursday' onclick='day3_day6_thursday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }else if($x == 7 && $dow_dr3 == 'Friday'){
                        $day_7_fri = "Friday";
                        echo        "<a class='create' style='background-color:#fd0000;border:none;
                        background-color: red;
                                    border: none;
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;    display: block;
                                    background: red;
                                    width: 130px;
                                    border: 0;
                                    padding: 5px 15px;
                                    font-size: 1.0em;
                                    color: #FFF;
                                    border-bottom: 3px solid #000;
                                    text-align:center;
                                    border-radius: 5px;
                        '  name='dr_day3' id='day3_day7_friday' onclick='day3_day7_friday()' href=''>Book</a>";
                        echo        '</form>';
                        echo    '</div>';
                        echo  '</div>';
                    echo '</div>';
                    }
                }
                    
                echo "</form>";
                echo "</div>";

                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";



                

                
                echo "<script type='text/javascript'>



//********************** DAY 1 **************************//

                function day1_day1_saturday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day1_saturday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_1_sat');
                    }
                  }

                  function day1_day2_sunday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day2_sunday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_2_sun');
                    }
                  }

                  function day1_day3_monday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day3_monday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_3_mon');
                    }
                  }

                  function day1_day4_tuesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day4_tuesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_4_tus');
                    }
                  }

                  function day1_day5_wednesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day5_wednesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_5_wed');
                    }
                  }

                  function day1_day6_thursday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day6_thursday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_6_thu');
                    }
                  }

                  function day1_day7_friday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day1_day7_friday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date&time=$time_dr&spec=$dr_spec_result&day=$day_7_fri');
                    }
                  }


//********************** DAY 2 **************************//


                function day2_day1_saturday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day1_saturday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_1_sat');
                    }
                  }


                  function day2_day2_sunday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day2_sunday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_2_sun');
                    }
                  }


                  function day2_day3_monday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day3_monday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_3_mon');
                    }
                  }

                  function day2_day4_tuesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day4_tuesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_4_tus');
                    }
                  }


                  function day2_day5_wednesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day5_wednesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_5_wed');
                    }
                  }

                  function day2_day6_thursday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day6_thursday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_6_thu');
                    }
                  }


                  function day2_day7_friday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day2_day7_friday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date2&time=$time_dr2&spec=$dr_spec_result&day=$day_7_fri');
                    }
                  }

//********************** DAY 3 **************************//

                function day3_day1_saturday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day1_saturday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_1_sat');
                    }
                  }


                function day3_day2_sunday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day2_sunday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_2_sun');
                    }
                  }


                function day3_monday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day3_monday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_3_mon');
                    }
                  }



                function day4_tuesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day4_tuesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_4_tus');
                    }
                  }



                function day5_wednesday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day5_wednesday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_5_wed');
                    }
                  }



                function day6_thursday() {
                    var answer = confirm('Are you sure you want to Booking?')
                    if (answer){
                  document.getElementById('day3_day6_thursday').setAttribute('href','confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_6_thu');
                    }
                  }


                function day3_day7_friday() {
                  var answer = confirm('Are you sure you want to Booking?')
                  if (answer){
                document.getElementById('day3_day7_friday').setAttribute('href', 'confirm_booking.php?id=$array_of_ids&date=$dow_to_date3&time=$time_dr3&spec=$dr_spec_result&day=$day_7_fri');
                  }
                }

                </script>";
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

            if($random_id === $rand_id && $coupon === $coupon_id && $code === "Approved"){
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

                $sql_create_doctor = "INSERT INTO doctor(id, signin_id) values('".$id_something_db."', '".$id_something_db."') ";
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
                                                echo "<tr><td>" . $rows['dr_name']; 
                                            
                                                // $strs = strtoupper($rows['p_name'][0].''.$rows['p_name'][1]);

                                                $strs = explode(' ', $rows['dr_name']);

                                                $strs2 =  strtoupper($strs[0][0] . $strs[1][0]);
                                                // if(isset($strs2)){
                                                //     $fchat = $strs2;
                                                // }else{
                                                //     $fchat = '';
                                                // }
                                                
                                    echo '<div class="d-flex align-items-center">';
                                    echo '<div class="m-r-10"><a class="btn btn-circle btn-info text-white">'.$strs2.'</a></div>';
                                    echo '<div class="">';
                                    echo '<h4 class="m-b-0 font-16">';
                                            
                                    echo  '</h4>';
                                    echo  '</div>';
                                    echo  '</div>';
                                    echo  '</td>';
                                
                                echo '<td>';
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
    $dr_day_exploding = explode("T", $dr_day_1_sch);

    $date_dr = $dr_day_exploding[0]; //date
    $time_dr = $dr_day_exploding[1]; //time

    $time_dr_gia_1 =  date('g:ia', strtotime($time_dr)) . "</p><br><br>";
            
    if($time_dr_gia_1){
        $time_dr_gia_1;
    }else{
        $time_dr_gia_1 = '';
    }
            $unixts = strtotime($date_dr);
            $dow_dr = date("l", $unixts);

    /***********     Day 2  *****/

            $dr_day_exploding2 = explode("T", $dr_day_2_sch);

            $date_dr2 = $dr_day_exploding2[0]; //date
            $time_dr2 = $dr_day_exploding2[1]; //time
        
                    
            $time_dr_gia_2 =  date('g:ia', strtotime($time_dr2)) . "</p><br><br>";

        
                    $unixts2 = strtotime($date_dr2);
                    $dow_dr2 = date("l", $unixts2);
                    
                    

                        /***********     Day 3  *****/


                    $dr_day_exploding3 = explode("T", $dr_day_3_sch);

    $date_dr3 = $dr_day_exploding3[0]; //date
    $time_dr3 = $dr_day_exploding3[1]; //time


            $unixts3 = strtotime($date_dr3);
            $dow_dr3 = date("l", $unixts3);


            $time_dr_gia_3 =  date('g:ia', strtotime($time_dr3)) . "</p><br><br>";

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
                                    echo           "               <button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                                } else{
                                    echo           "               <button class='btn-book-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";

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
?>
