<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Report</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" href="../styles/report.css" type="text/css"/>
    </head>
    <body>

    <div class="super_container">
    
        <button type="button" id='pr' class="btn btn-primary btn-lg btn-block print" style="margin-top: 136px;" onclick="printFunction()" >Print</button>
       <div class="container-report">
            <div class="col-12 content">
                <div class="row">
                    <div class="col-12" style="padding-left: 75px;">
                        <div class="col-6 image-logo">
                            <img src='../images/logoheader.png' class = 'ic-logo'/>
                        </div>
                        <div class="col-6 logo-text">
                            <h3 style="padding-top: 10%">Medical Report</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cw">
                            <div class="col-6 image-logo">
                                <div class="content-lf">
                                    <h5>Name : <span id="">Omar reda</span></h5>
                                    <h5>Address : <span id="">1481 Creekside Lane Avila Beach, CA 931</span></h5>
                                    <h5>Mobile : <span id="">01121378325</span></h5>
                                    <h5 style="float: left;">Gender : <span id="">Male</span></h5>
                                    <h5 style="float: right; padding-right: 45%">Age : <span id="">23</span> year</h5>
                                </div>
                            </div>
                            <div class="col-6 image-logo">
                                <div class="content-lf" style="padding-top: 20px;">
                                    <h5>Doctor Name : <span id="">ِِAmr Mohammed</span></h5>
                                    <h5>Specilization : <span id="">Creekside</span></h5>
                                    <h5>Date of examination : <span id="">25 / 12 / 2020</span></h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row" style="height: auto">
                    <div class="col-12" style="height: auto">
                        <div class="dm" style="padding: 20px; padding-top: 35px;">
                            <div class="col-6" style="height: auto">
                                <div class="content-text" style="height: auto">
                                    <h3 style="text-decoration: underline;">Description :</h3>
                                    <p>
                                        Often, the body paragraph demonstrates and develops your topic sentence through an ordered, logical progression of ideas. There are a number of useful techniques for expanding on topic sentences and developing your ideas in a paragraph.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6" style="height: auto">
                               <div class="content-text" style="height: auto">
                                    <h3 style="text-decoration: underline;">Medicines :</h3>
                                    <p>
                                        Often, the body paragraph demonstrates and develops your topic sentence through an ordered, logical progression of ideas. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>      
        </div>



    </div>
        <!--End container-->

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap-4.1.2/popper.js"></script>
    <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="../plugins/greensock/TweenMax.min.js"></script>
    <script src="../plugins/greensock/TimelineMax.min.js"></script>
    <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../plugins/jquery-datepicker/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
    <script src="../js/custom.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script>
        function printFunction(){
            document.getElementById('pr').style.display = 'none';
            window.print();
        }    
        
    </script>

    </body>
</html>