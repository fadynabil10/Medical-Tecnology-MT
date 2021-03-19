<?php
include('../cred/init.php');
?>

<!doctype html>
<html>
    <head>
        <title>medical tecnology</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../styles/login.css" rel="stylesheet" type="text/css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
      </head>
    <body>
    <!--start form-->
        
       <div class="container-app">   
          <div class="overlay" id="overlay">
              <!-- start form move from left to rigth-->
            <div class="signup" id="sign-up">
            <h1><?php user_reg(); ?></h1>
              <h1>Welcome!</h1>
              <p>
                  To make an appointment<br><span>please sign up with your personal info</span></p>
              <button class="switch-button" id="slide-right-button">Sign Up</button>
            </div>
      <!--end form move from left to rigth-->
      <!--start form move from right to left-->

            <div class="signin" id="sign-in">
                
              <h1>Welcome Back!</h1>
              <p>To keep connected with us please login with your personal info</p>
              <button class="switch-button" id="slide-left-button">Sign In</button>
                
            </div>
              
       <!--end form move from right to left-->
          </div>
           
       <!-- start main form -->
        
          <div class="form">
            <?php 
              include('../inc/signin_p.php');
            ?>
              
        <!-- start sign up form -->
              
            <div class="signup" id="sign-up-info">
              <h1>Sign Up</h1>
                
              <form id="sign-up-form" action="login.php" method="POST">
                  
                <input type="text" placeholder="FirstName" class="input-g" name="f_name" />
                <input type="text" placeholder="LastName"class="input-g" name="l_name"/>
                <input type="email" placeholder="Email" class="input-g"  name="email"/> 
                <div class="labelgender">Gender</div>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female<br>

                <input type="password" placeholder="Password" class="input-g" name="password"/><br>
                <div class="labelbirthday">Birthday</div>
                <input type="date" name="dob" class="input-g size"/>

                <input type="submit" class="control-button up" value="Sign Up" name="signup" />
                  
              </form>

            </div>
            <!-- end sign up form -->

      </div>
      <!-- end main form -->
    </div>
        <script src="../js/login-signup.js" type="text/javascript"></script>
 </body>
</html>
