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
        
       <div class="container-app" style="background-color:#fff!importatnt">   
          <div style="text-align:center;padding-top:300px">
              
                <?php

                    activate_patients();
                    
                ?>
        


       <!--end form move from right to left-->
          </div>
           
     
    </div>
        <script src="../js/login-signup.js" type="text/javascript"></script>
 </body>
</html>
