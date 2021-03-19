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
           
        
           
       <!-- start main form -->
        
          <div class="form">
       <!-- sign in form -->
            <div class="signin" id="sign-in-info" style="width: 56%;margin: 0% 22%;">
              <h1  style="color: red">Sign In</h1>
    
              <form id="sign-in-form">      
                <input type="email" placeholder="Email"/>
                <input type="password" placeholder="Password"/>
                <p class="forgot-password" data-toggle="modal" data-target="#forget">Forgot your password?</p>
                <button class="control-button in"  style="background-color:red">Sign In</button>
              </form>
            </div>
        <!-- end sign in form -->
              
 <!------  start forget password------->
        <div class="modal fade" id="forget" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog md" role="document">
                    <div class="modal-content m-content">
                      <div class="modal-header">
                        <h5 style="padding-top: 5px;">Reset Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                          <span aria-hidden="true" style='outline: none'>&times;</span>
                        </button>
                          
                      </div>
                      <div class="modal-body">
                        <div style="width: 100%; text-align: center;">
                            <p style="padding: 10px 10px; margin-bottom: 20px; background-color: rgb(213,236,218);">Enter New password reset
                            </p>
                          </div>
                          <div>
                            <input type="Password" class="form-control" placeholder="New password" style='outline: none; width: 80%; margin-bottom: 10px;'  required>
                          </div>
                          <div>
                            <input type="Password" class="form-control form-control-part" placeholder="Confirm password" style='outline: none; width: 80%;margin-bottom: 20px;' required>
                          </div>
                          <button type="button" class="btn btn-success btn-top float-right" style="width: 40%">OK</button>
                        </div>
                    </div>
                </div>
            </div>
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