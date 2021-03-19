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
            echo $row_selection;
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
//login for patient
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
            $db_password = $rows['password'];
            $id = $rows['id'];
            $email_addr = $rows['email'];
            $activation_code = $rows['activation_code'];
            $status = $rows['status'];    
             if(md5($password) == $db_password){
                $_SESSION['email'] = $email_addr;
                $to_email = '"'.$email_addr.'"';
                $subject = 'Testing PHP Mail';
                //activation code to test php
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

function logged_in(){
    if(isset($_SESSION['email'])){
        return true;
    }else{
        return false;
    }

}

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
            if(md5($password) === $db_password){
                switch($role){
                    case 'doctor':
                        redirect("profile_doctor.php?id=$id");
                        $_SESSION['username'] = $username;
                        break;  
                    case 'admin':
                        redirect("admin.php?id=$id");
                        break;
                    case 'pharmacian':
                        redirect("confirm_pharmacy.php?id=$id");
                        break;       
                    }
                }else{
                    valid_error("Invalid username or password");
                }    
            }
        }
    }
}

function logged_in_role(){
    if(isset($_SESSION['username'])){
        return true;
    }else{
        return false;
    }
}

//function update_dr_profile(){}

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

                echo '<img src="'.$imgs.'" class="doctor-feedback rounded-circle rounded float-left">';

                echo "</div>";

                echo "<h5>$f_name  $l_name</h5>";

                echo '<span style="margin-bottom: 0">Wednesday,18 december 2019 11:49 AM</span>';

                echo "</div>";

                echo "</div>"; 

                echo "<div class='row'>";

                echo "<div class='col-12'>";

                echo "<div class='feedback-text'>";

                echo "<p class='text'>&quot;<span>$comments</span>&quot;</p>";

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

function medical_record(){
   
        if(isset($_GET['p_id']) && isset($_GET['dr_id'])){
            $p_id = $_GET['p_id'];
            $dr_id = $_GET['dr_id'];

        }else{
            $p_id = '';
            $dr_id = '';
        }

         if(isset($_POST['confirm_mr'])){
            $description = clear($_POST['description']);
            $medicines = clear($_POST['medicines']);
            $doexam = date("y-m-d h:m:s");
            $timestamp = time()+date("Z");
            $last_doexam =  gmdate("Y/m/d H:i:s",$timestamp);
            $sql_mr = "INSERT INTO medical_record(`description`, `medicines`, `p_id`, `dr_id`, `date_of_exam`) ";
            $sql_mr .= " VALUES('".$description."', '".$medicines."', '".$p_id."', '".$dr_id."', '".$last_doexam."')";
            $result_mr = query($sql_mr);
             if($result_mr){
                valid_success('Medical record for patient has been inserted Successfully.');
             }else{
                valid_error('Medical record for patient has not inserted Successfully.');

             }
        }
  

}

function display_mr_report(){
    if(logged_in() && logged_in_role()){
        $email = $_SESSION['email'];
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
          $dr_name_rows = $rows_q_med_rec['dr_name'];
          $dr_specialization_rows = $rows_q_med_rec['dr_specialization'];
          $date_of_exam_rows = $rows_q_med_rec['date_of_exam'];   
          $mobile_rows = $rows_q_med_rec['mobile'];
          $dob_rows = strtotime($rows_q_med_rec['dob']);
          // Current date and time
          $something_date = date("Y", $dob_rows);
          $last_dob = date("Y") - $something_date;
            echo "<tr>";
             for($i = 1; $i <= $dr_name_rows;$i++){   
             }
             echo    "<td>$i</td>";
             echo    "<td><a href='#'>$dr_name_rows</a></td>";
             echo    "<td>$dr_specialization_rows</td>";
             echo    "<td>$date_of_exam_rows</td>";
             echo    "<td><a href='report.php?p_id=$something_id&dr_id=$dr_id'>view</a></td>";
             echo    "</tr>";

             }
      
         }
          
}

function show_speciality(){
         echo'    <select name="sspeciality" class="form-control selectpicker">';
         echo'    <option value=" ">Select Specialty</option>';

          $sql = "SELECT distinct `dr_specialization` from doctor";
            $result = query($sql);

    while($rows = fetching($result)){
       $result_speciality = $rows['dr_specialization'];
       echo "<option value='".$rows['dr_specialization']."'>". $rows['dr_specialization'] ."</option>";
    }
    echo '</select>';
}

function fetch_drs(){
  if(isset($_POST['search_dr'])){
        $sspecialty = clear($_POST['sspeciality']);
        $sql_results = "select * from doctor where dr_specialization =  '".$sspecialty."'  ";
        $result_drs = query($sql_results);
          while($rows_drs = fetching($result_drs)){
            $dr_name_result = $rows_drs['dr_name'];
            $dr_spec_result = $rows_drs['dr_specialization'];
            $dr_addr_result = $rows_drs['dr_clinic_address'];
            $dr_fees_result = $rows_drs['fees'];
            $dr_day_1 = $rows_drs['day_1'];
            $dr_day_2 = $rows_drs['day_2'];
            $dr_day_3 = $rows_drs['day_3'];

            $dr_day_exploding = explode("T", $dr_day_1);
            $date_dr = $dr_day_exploding[0]; //date
            $time_dr = $dr_day_exploding[1]; //time
            $unixts = strtotime($date_dr);
            $dow_dr = date("l", $unixts);
        
            $dr_day_exploding2 = explode("T", $dr_day_2);
            $date_dr2 = $dr_day_exploding2[0]; 
            $time_dr2 = $dr_day_exploding2[1];
            $unixts2 = strtotime($date_dr2);
            $dow_dr2 = date("l", $unixts2);

            $dr_day_exploding3 = explode("T", $dr_day_3);
            $date_dr3 = $dr_day_exploding3[0]; 
            $time_dr3 = $dr_day_exploding3[1];
            $unixts3 = strtotime($date_dr3);
            $dow_dr3 = date("l", $unixts3);

                echo "<form action='' method='POST'>";  
                echo  '<div class="container" id="Doctor1">';
                echo  '<div class="row">';
                echo  '<div class="col-xs-12 col-sm-6 col-md-6" style="width: 100%;">';
                echo  '<div class="well well-sm" >';
                echo  '<div class="row">';
                echo  '<div class="col-sm-4">';
                echo  '<img src="../images/doc-7.jpg" style="border-radius: 150px;" alt="" class="img-rounded img-responsive"/>';
                echo  '</div>';
                echo  '<div class="col-sm-6 col-md-4">';
                echo  "<h3 class='name-doctor'>Dr / $dr_name_result</h3>";
                echo  "<h5 class='department'>$dr_spec_result</h5>";
                echo  '<div class="stars">';
                echo  '<i class="glyphicon glyphicon-star"></i>';
                echo  '<i class="glyphicon glyphicon-star"></i>';
                echo  '<i class="glyphicon glyphicon-star"></i>';
                echo  '<i class="glyphicon glyphicon-star"></i>';
                echo  '<i class="glyphicon glyphicon-star-empty"></i>';
                echo  '</div>';
                echo  '<p>';
                echo  "<i class='glyphicon glyphicon-map-marker' style='color: #59cdc4;'></i>$dr_addr_result, Al Qahirah, Egypt<br/>";
                echo  "<i class='glyphicon glyphicon-credit-card' style='color: #59cdc4;'></i>Fees : $dr_fees_result <i style='color: #59cdc4;'>EGP</i><br/>";
                echo  '<i class="glyphicon glyphicon-earphone" style="color: #59cdc4;"></i>0126433758</p>';
                echo  '</div>';
                echo  '<div  id="wrap">';
                echo  '<div id="accordian">';
                echo  '<div class="content" id="email">';
                echo  '<form class="go-right">';		
                echo  "<button class='create hidden_areas' style='background-color:#59cdc4;border:none;'>
                          $dow_dr </button>";
                echo  "<button class='create  hidden_areas' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>$date_dr<br> $time_dr  </button>";
                echo  '<button class="create" style="background-color:#fd0000;border:none;">Book</button>';
                echo  '</form>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';
                echo  '<div id="wrap">';
                echo  '<div id="accordian">';
                echo  '<div class="content" id="email">';
                echo  '<form class="go-right">';		
                echo  "<button class='create' style='background-color:#59cdc4;border:none;'>$dow_dr2</button>";
                echo  "<button class='create' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>$date_dr2<br> $time_dr2  </button>";
                echo  '<button class="create" style="background-color:#fd0000;border:none;">Book</button>';
                echo  '</form>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';
                echo  '<div id="wrap">';
                echo  '<div id="accordian">';
                echo  '<div class="content" id="email">';
                echo  '<form class="go-right">';		
                echo  "<button class='create' style='background-color:#59cdc4;border:none;'>$dow_dr3</button>";
                echo  "<button class='create' style='background-color:#f8f8f8;color:#c5c5c5;border:none; height: 100px;'>$date_dr3<br> $time_dr3  </button>";
                echo  '<button class="create" style="background-color:#fd0000;border:none;">Book</button>';
                echo  '</form>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';     
                echo  "</form>";
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
//login pharmacy
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
//login admin
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
                     $strs = explode(' ', $rows['dr_name']);
                     $strs2 =  strtoupper($strs[0][0] . $strs[1][0]);
                     echo '<div class="d-flex align-items-center">';
                     echo '<div class="m-r-10"><a class="btn btn-circle btn-info text-white">'.$strs2.'</a></div>';
                     echo '<div class="">';
                     echo '<h4 class="m-b-0 font-16">';
                     echo '</h4>';
                     echo '</div>';
                     echo '</div>';
                     echo '</td>';
                     echo '<td>';
                     echo '<label class="label label-danger">'. $rows['dr_clinic_address'] . '</label>';
                     echo '</td>';
                     echo '<td>'. $rows['dr_specialization'] . '</td>';
                     echo '<td>'. $rows['dr_degree'] . '</td>';
                     echo '<td>'. $rows['phone'] . '</td>';
                     echo '<td>'. $rows['fees'] . '</td>';
                     echo '<td>'. $rows['bio'] . '</td>';
                     echo '<td>'.'<img with="80" height="80" src="'.$rows['img'].'" />' .'</td>';
                     echo '<td>'. $rows['area'] . '</td>';
                     echo '<td> <a class="btn btn-primary" href="admin.php?source=edit_doctor&id='.$id_doctor.'">Edit'.'</a></td>';
                     echo '<td> <a class="btn btn-danger" href="admin.php?source=delete_doctor&id='.$id_doctor.'">X'.'</a></td>';
                     echo '</tr>';
              }
    }
}
//to update data(information)about doctor
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
//delete doctor from admin panel
function delete_doctor(){
     if(isset($_GET['id'])){
       $id_delete = $_GET['id'];
    }else{
      $id_delete = '';
}

$sql_doctor_fetch = "SELECT * from doctor where id = '".$id_delete."' ";
$result_dr = query($sql_doctor_fetch);
$dr_name_fetched = fetching($result_dr);

$sql_delete_doctor =  "DELETE FROM `doctor` WHERE id = '".$id_delete."' ";
$result_delete = query($sql_delete_doctor);

if(!$result_delete){
    echo " not deleted ";
}else{} 
}
?>
