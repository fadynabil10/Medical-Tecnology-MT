<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Code</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../styles/booking-style.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" href="../styles/profile-doctor-for-patiant.css" type="text/css" />
    <style>
        .container-book {
            margin: 0 25%;
        }

        header {
            width: 100%;
        }

        .filter-container {
            margin: 0 5%;
        }

        .filter-part {
            width: 100%;
            overflow: hidden;
        }

        .filter-part select {
            width: 26%;
        }

        .filter-container .filter-part .form-control {
            margin-top: 10px;
        }

        .main-section {
            margin: 2% auto;
        }

        .profile-info .star {
            font-size: 25px;
        }

        .profile-info h5 span {
            padding-left: 0;
        }

        h5 .p-icon img {
            margin-right: 10px;
        }

        #warp {
            margin: 10% 20%;
            display: inline-block;
            padding: 5px;
            text-align: center;
        }

        .main-section {
            padding-top: 30px;
            border-radius: 10px;
            height: 260px;
        }

        .content {
            padding-top: 10px;
            border-radius: 5px;
        }

        .sub-table {
            text-align: center;
            border-radius: 5px;
            margin-right: 10px;
        }

        .sub-col-text {
            color: #fff;
            background-color: #59cdc4;
        }

        .time-content {
            padding: 0;
            margin-top: 0;
        }

        #accordian .content button {
            background-color: red;
            border: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .time-content h6 {
            padding-bottom: 10px;
            padding-top: 10px;

        }

        .column-one {
            padding-left: 50px;
        }

        .p-ic,
        .p-icon span {
            font-size: 10px;
        }

        .profile-info h5 {
            padding-bottom: 10px;
        }

        h5 {
            font-size: 15px;
            margin: 0;
        }

        .sub-col-text {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .filter-part select {
            display: inline-block;
            width: 30%;
            padding-right: 0;
            margin-right: 0;
            border-right: 0;
        }

        select {
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container-book">
        <!---
            header image    
        ---->
        <header>
            <div class='header-image' style="width: 100%;">
                <img src="../images/doctors-15.png" style="width: 100%;">
            </div>
        </header>
    </div>
    <div class="filter-container">
        <!---
                section : select    
        ---->
        <section class="filter-part">
            <select name="Select Specialty" class="form-control selectpicker">
                <option value=" ">Select Specialty</option>
                <option>Alabama</option>
                <option>Alaska</option>
            </select>
            <select name="Choose Area" class="form-control selectpicker">
                <option value=" ">Choose Area</option>
                <option>Alabama</option>
                <option>Alaska</option>
            </select>
            <!----
                Search  
            -->
            <input name="search" placeholder="Search by doctor name " style="width: 30%;
            " class="form-control" type="text">
        </section>
        <div class="container-book">
            <!----
            submit  
        -->
            <button type="search" class="submit-filter"
                style="margin:5%;color:white;background-color:#59cdc4;border:none;width: 100%; height: 34px;border-radius: 5px;">search</button>
        </div>

        <!-------doctor form start--------->

        <section class="doctor-list">

            <div class="main-section" style="width: 100%; background-color: #f8f8f8;">
                <div class="column-one">
                    <div class="profile-img c1">
                        <img src="../images/doc-1.jpg" style='width: 150px;height: 150px;border-radius: 50%;'
                            class="doctor-image rounded-circle rounded float-left">
                    </div>
                    <div class="profile-info c1">
                        <h5>Doctor <span>Omar reda</span></h5>

                        <h5 style="color: #57ccc3; font-size: 12px;">Dermatology</h5>

                        <span class="fa fa-star checked star"></span>
                        <span class="fa fa-star checked star"></span>
                        <span class="fa fa-star checked star"></span>
                        <span class="fa fa-star checked star"></span>
                        <span class="fa fa-star checked star"></span>

                        <h5>
                            <span class="p-icon"><img src='../images/location.png' style="width: 15px;"
                                    class='edit-icon rounded float-left' /></span><span>Badr,Al Qahirah,Egypt</span>
                        </h5>

                        <h5>
                            <span class="p-icon"><img src='../images/mony.png'
                                    class='edit-icon rounded float-left' /></span>Fees : <span
                                style="margin-right: 10px;"><span>200</span> <span
                                    style="color: #57ccc3; font-size: 20px;">L.E</span></span>
                        </h5>
                        <h5>
                            <span class="p-ic on"><img src='../images/phone.png' class='edit-icon rounded float-left'
                                    style='margin-right:15px;' /></span><span>01121378325</span>
                        </h5>
                    </div>

                </div>
                <div id="wrap">
                    <div id="accordian">
                        <div class="content" id="email">
                            <div class='sub-table'>
                                <div class="sub-col-title" style="border-top-left-radius: 10px;
                                border-top-right-radius: 10px;background-color:#59cdc4;color: #fff;">
                                    <p class="sub-col-text">20/4</p>
                                </div>
                                <div class="time-content">
                                    <h6 class="t-clo">From 12:00 AM</h6>
                                    <h6 class="t-clo">To 12:30 PM</h6>
                                </div>
                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span
                                        id="btn-text">Booked</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="wrap">
                    <div id="accordian">
                        <div class="content" id="email">
                            <div class='sub-table'>
                                <div class="sub-col-title">
                                    <p class="sub-col-text">Tomorrow</p>
                                </div>
                                <div class="time-content">
                                    <h6 class="t-clo">From 12:00 AM</h6>
                                    <h6 class="t-clo">To 12:30 PM</h6>
                                </div>
                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span
                                        id="btn-text">Booked</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrap">
                    <div id="accordian">
                        <div class="content" id="email">
                            <div class='sub-table'>
                                <div class="sub-col-title">
                                    <p class="sub-col-text">Today</p>
                                </div>
                                <div class="time-content">
                                    <h6 class="t-clo">From 12:00 AM</h6>
                                    <h6 class="t-clo">To 12:30 PM</h6>
                                </div>
                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span
                                        id="btn-text">Booked</span></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-------doctor form end--------->


    </div>
</body>

</html>