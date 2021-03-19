<?php


include('../cred/init.php');

?>


<!doctype html>
<html>
    <head>
        <title>Medical Tecnology</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../styles/login-doctor.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">

        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <style>
            
        .buttons {
          isolation: isolate;
        }

        .form-img{
            position: absolute;
            top: 10%;
            left: 40%;
        }
        .form-img img{
            border: 2px solid red;
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 30%;
            padding: 15px;

        }
        .form-inline{
            width: 100%;
        }
        .modal-body h4{
            position: absolute;
            top: 55%;
            left: 25%;
        }
            .signin{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
            }
        </style>
    </head>
    <body>
    <!--start form-->
        
       <div class="container-app">
           <?php

           
            login_administrator();
            
            ?>
           
       <!-- start main form -->
        
          <div class="form">
       <!-- sign in form -->
            <div class="signin" id="sign-in-info" style="width: 56%;margin: 0% 22%;">
              <h1  style="color: red">Sign In</h1>
    
              <form id="sign-in-form" action="" method="POST">      
                <input type="text" placeholder="Username" name="username"/>
                <input type="password" placeholder="Password" name="password"/>
                <p class="forgot-password" data-toggle="modal" data-target="#forget">Forgot your password?</p>
                <button type="submit" class="control-button in" name="login_area"  style="background-color:red">Sign In</button>
              </form>
            </div>
        <!-- end sign in form -->
              

        <!------End forget password------->
      </div>
      <!-- end main form -->
    </div>
    <script src="../js/login-signup.js" type="text/javascript"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap-4.1.2/popper.js"></script>
    <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="../plugins/greensock/TimelineMax.min.js"></script>
    <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
    <script src="../js/custom.js"></script>
 </body>
</html>