<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile Patient</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" href="../styles/profile-patient.css" type="text/css"/>    

    </head>
    <body>

    <div class="super_container">

        <!-- start Header -->

        <header class="header trans_400" id="headerlogo">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
                    </a>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#BestCare">Best Care</a></li>
                        <li><a href="index.html#whych">Why choose us?</a></li>
                        <li><a href="index.html#Services">Services</a></li>
                        <li><a href="index.html#offers">Offers</a></li>
                        <li><a href="#Contactus">Contact us</a></li>

                    </ul>
                </nav>

                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                    <div class="button header_button b2">
                        <a href='#'>logout</a>
                    </div>
                <!-- Hamburger main icon display when minimize size of screen  -->
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>

            </div>
        </header>

       <div class="container-patient">
           
               <div class="row">

                <div class="col-6 left-section">
                    <div class="left-content">
                        <img src="../images/person_4.jpg" class="patiant-image rounded-circle rounded float-left">
                        <h4>omar reda</h4>
                        <span class="edit-icon">
                            <a href ='#'id=''><img src ='../images/edite.png' class="rounded-circle" /></a>
                        </span>
                        <!--rounded float-left-->
                    </div>
                </div> 
                <div class="col-6 right-section">
                    <div class="right-content">
                        <div class="row">
                            <button type="button" class="btn btn-danger btn-top">make an appointment</button>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-success btn-buttom">Cancel appointment</button>
                        </div>
                        <div class="row">
                            <button type="button" href='medical-record.html' class="btn btn-dark btn-buttom" >My Medical Record</button>
                        </div>
                    </div>
                </div>
                <div class=" row profile-info">
                    <div class='title-bar'>
                        <div class="columnone">
                            <img class ='rounded float-right' src="../images/icon!.png"/>
                        </div>
                        <div class="columntwo">
                            <p class="col-text">personal information</p> 
                        </div>
                    </div><br><br>
                    <table class="table table-content table-borderless">

                      <tbody>
                        <tr>
                          <td class="head-tr">patiant id</td>
                          <td>5558514545</td>

                        </tr>
                        <tr>
                          <td class="head-tr">E-mail</td>
                          <td>omarreda@yahoo.com</td>
                          <td><a href='#'><img class ='edit-icon rounded float-right' src = '../images/edite.png'/></a></td>
                          </tr>
                        <tr>
                          <td class="head-tr">address</td>
                          <td>Badr,Al Qahirah,Egypt</td>
                          <td><a href='#'><img class ='edit-icon rounded float-right' src = '../images/edite.png'/></a></td>
                        </tr>
                          <tr>
                          <td class="head-tr">mobile</td>
                          <td>0125637378</td>
                          <td><a href='#'><img class ='edit-icon rounded float-right' src = '../images/edite.png'/></a></td>
                        </tr>
                          <tr>
                          <td class="head-tr">birth day</td>
                          <td>12/3/1998</td>
                          <td><a href='#'><img class ='edit-icon rounded float-right' src = '../images/edite.png'/></a></td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp">My appointment</button>

                </div>


            </div>
        </div>

        <!-- start Footer -->

        <footer class="footer" id="Contactus">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- Footer About -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="logo">
                                    <a href="index.html">
                                        <div><img src="../images/logofooter.png" title="medical tecnology logo" style="height: 81%"></div>
                                    </a>
                                 </div>
                                <div class="footer_about_text">
                                    <p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci eleme ntum eleifend tempor, nunc libero porttitor tellus.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Info -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Contact Info</div>
                                <ul class="contact_list">
                                    <li>+53 345 7953 32453</li>
                                    <li>yourmail@gmail.com</li>
                                    <li>contact@gmail.com</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Locations -->
                        <div class="col-lg-3 footer_col">
                            <div class="footer_location">
                                <div class="footer_title">Our Locations</div>
                                <ul class="locations_list">
                                    <li>
                                        <div class="location_title">Miami</div>
                                        <div class="location_text">45 Creekside Av  FL 931</div>
                                    </li>
                                    <li>
                                        <div class="location_title">Los Angeles</div>
                                        <div class="location_text">1481 Creekside Lane Avila Beach, CA 931</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 footer_col footermap">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=new%20cairo%20academy&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                                <div class="copyright">
                                Copyright &copy; Medical Tecnology
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </footer>
        <!-- End Footer -->
        </div>
        <!--End container-->

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
    