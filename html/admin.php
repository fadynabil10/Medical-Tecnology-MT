<?php
include('../cred/init.php');
error_reporting(0);
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Le Basic Page Needs
    =================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        
            Admin Panal
        
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <script type="text/javascript">
        var host = "bootadmin.org";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
            window.location.protocol = "https";
    </script>

    <!-- Le Meta Data -->
    <meta content="Bootadmin" property="og:site_name">
    <meta content="Bootadmin" property="og:title">
    <meta content="website" property="og:type">
    <meta content="Bootadmin is an open source bootstrap admin panel." property="og:description">
    <meta name="keywords" content="bootstrap, admin, theme, panel, administration, material">
    
    
    <meta content="/images/logo.png" property="og:image">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@iamshipon1988">
    <meta name="twitter:creator" content="@iamshipon1988">
    
    <meta name="twitter:title" content="Bootadmin">
    
    
    <meta name="twitter:description" content="An opensource bootstrap admin panel.">
    

    <!-- Le App Banner Data -->
    <meta name="apple-itunes-app" content="app-id=1245521413">
    <!--<meta name="apple-itunes-app" content="app-id=1245521413, affiliate-data=myAffiliateData, app-argument=myURL">-->

    <!-- Le Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">

    <!-- Le IE Conditionals
    ================================================== -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Javascript Pre-loads
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Le Page Specific Codes
    ================================================== -->
    

    <!-- Le Favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/ico" href="../images/iconstwo.png" />


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>

<body id="landing" class="sidebar-open">
<div class="loading">
    <div class="loading-center"><img src="https://bootadmin.org/images/loading/map.gif" alt="Loading" /></div>
</div>
<div class="page-container animsition">
    <div id="dashboardPage">
        

<!-- Main Menu -->
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 hidden-xs">
                <div class="logo">
                    <a href="/admin.php">
                        <span class="logo-emblem"><img src="../images/logoheader.png" alt="logo" /></span>
                        <span class="logo-full">Admin Panal</span>
                    </a>
                </div>
                <a href="#" class="menu-toggle wave-effect">
                    <i class="feather icon-menu"></i>
                </a>
            </div>
            <div class="col-md-7 text-right">
                <ul>
                    <!-- Profile Menu -->
                    <li class="btn-group user-account">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-content">
                                <div class="user-name"><?php 
                                
                                
                                if(logged_in_admin()){
                                    echo $_SESSION['admin']; 
                                }
                                
                                ?>
                                
                                </div>

                            </div>
                            <div class="avatar">
                                <img src="../images/person_4.jpg" alt="profile" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="login-admin.php" class="animsition-link dropdown-item wave-effect"><i class="feather icon-log-in"></i> Logout</a></li>
                        </ul>
                </ul>
            </div>
        </div>
    </div>
</div>



        

<!-- Main Menu -->
<div class="sidebar">
    <div class="logo">
        <a href="admin.php">
            <span class="logo-emblem" style="width:70px;"><img src="../images/logoheader.png" alt="logo" style="width:50px;height:38px;max-width:50px;max-height:40px;"/></span>
            <span class="logo-full">Admin Panal</span>
        </a>
    </div>
    <ul id="sidebarCookie">
        <li class="spacer"></li>
        <li class="profile">
            <span class="profile-image">
                <img src="../images/person_4.jpg" alt="profile" />
            </span>
            <span class="profile-name" style="margin-top: 10px;">
                <?php

// if(logged_in()){
//     echo "Welcome. " . $_SESSION['username'];
// }else{
//     redirect("login_role.php");
// }
?>
            </span>
<!--
            <span class="profile-info">
            <div class="user-name"><?php //echo "Welcome ya, ".  ?></div>
            </span>
-->
            
            <span class="profile-info">
            <div class="user-name" style="font-weight: bold;"><?php echo "Welcome, ". $_SESSION['role'] ?></div>
            </span>
            
        </li>
        <li class="spacer"></li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">Main</span>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" data-parent="#sidebarCookie" data-toggle="collapse" href="#navDashboard" aria-expanded="false" aria-controls="page-dashboards">
                <i class="feather icon-grid"></i>
                <span class="menu-title">Dashboard</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navDashboard">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="admin.php?source=add_patients">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Add Patients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="admin.php?source=add_doctor">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Add User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="admin.php?source=search_doctor">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Search Doctor</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQEbJJo2pPd7jXsKb4rq0blemuyBqr8w18_OT4twFG1Ohuy-zKqgid8gmiMLX03h9ZNfHrfJZCcYcqh/pubhtml?">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Forget Password for patient</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRT7zjZ-vuXIW0ifQJfOERRzxDTnEPWiMvZsCI44glfTD-mY2t0WWHcIfe-Bi6ckazRggfhGXrcq-Lu/pubhtml?">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Forget Password for users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        
    </ul>
</div>

        <main>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title">Dashboard</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Doctors Counter</small>
                            <h4 class="mb-0">200</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-green">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>user</small>
                            <h4 class="mb-0">3,000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-red">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Patients Counter</small>
<!--                             <h4 class="mb-0">$3,567.53</h4> -->
                            <h4 class="mb-0">500</h4>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover" style="background-color:#4fd1c5;color:#fff;">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Wallet Balance</small>
                            <h4 class="mb-0">$3,567.53</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <?php

dynamic_page();
            ?>

            </div>
        </div>
    </div>

   
</div>


            <!-- Footer -->
<footer>
    <p>&copy; Medical Tecnology Team</p>
</footer>

        </main>
    </div>

</div>



<!-- Le Javascript -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
<script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>



<script src="https://bootadmin.org/scripts/core/main.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-104952515-1', 'auto');
    ga('send', 'pageview');
</script>






</body>
</html>



