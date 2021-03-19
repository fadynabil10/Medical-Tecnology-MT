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
        
       <div class="container-app" style='width: 600px;height: 500px;'>   
                   
       <!-- start main form -->
    
          <div class="form">
            <?php 

              include('./signin_d_role.php');

            ?>
              
        

      </div>
      <!-- end main form -->
    </div>
        <script src="../js/login-signup.js" type="text/javascript"></script>
 </body>
</html>
