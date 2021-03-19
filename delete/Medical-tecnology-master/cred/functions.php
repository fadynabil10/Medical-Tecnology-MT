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
//to sign in for patient
function user_reg(){

    $errors = [];

    if(isset($_POST['signup']) == "POST"){

        $f_name = clear($_POST['f_name']);
        $l_name = clear($_POST['l_name']);
        $email = clear($_POST['email']);
        $gender = clear($_POST['gender']);
        $password = clear(md5($_POST['password']));
        $bday = clear($_POST['dob']);


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
             $sql = "INSERT INTO signup(f_name, l_name, email, gender, password, dob)";
             $sql .= " VALUES('".$f_name."', '".$l_name."', '".$email."',
             '".$gender."', '".$password."', '".$bday."') ";
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
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
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

            $sql3 = "SELECT * from signup where email = '".$email."' ";
            $result = query($sql3);
            confirm($result);
            $rows = fetching($result);
            $db_password = $rows['password'];

            if(md5($password) == $db_password){

                $_SESSION['email'] = $email;
                redirect("admin.php");

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
?>