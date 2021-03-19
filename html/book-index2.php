<?php 
include('../cred/init.php');
include('../inc_dr_bk/header.php');
include('../inc_dr_bk/drs_img.php');

?>
    <div class="filter-container">
        <!---
                section : select    
        ---->
        <section class="filter-part" style="width: 100%;margin:0 40%">

        <?php show_speciality(); ?>
           
        </section>
        <div class="container-book">
            <!----
            submit  
        -->
            <button type="submit" class="submit-filter"
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