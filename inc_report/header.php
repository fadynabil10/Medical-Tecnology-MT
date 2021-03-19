<?php

if(isset($_GET['p_id']) && isset($_GET['dr_id'])){
    $p_id = $_GET['p_id'];
    $dr_id = $_GET['dr_id'];

}else{
    $p_id = '';
    $dr_id = '';
}

$sql_display_p_report = "SELECT f_name, l_name, address, mobile, gender, dob, doctor.dr_name, dr_specialization, date_of_exam, description, medicines from profile_patients 
INNER JOIN medical_record ON profile_patients.id = medical_record.p_id
INNER JOIN doctor ON medical_record.dr_id = doctor.id
INNER JOIN signup ON profile_patients.id_signup = signup.id where profile_patients.id = '".$p_id."' AND doctor.id = '".$dr_id."' ";

$display_report = query($sql_display_p_report);

while($rows_display_report = fetching($display_report)){
    $f_name = $rows_display_report['f_name'];
    $l_name = $rows_display_report['l_name'];
    $address = $rows_display_report['address'];
    $mobile = $rows_display_report['mobile'];
    $gender = $rows_display_report['gender'];
    $dob = strtotime($rows_display_report['dob']);
    // Current date and time
    $something_date = date("Y", $dob);
    
    $last_dob = date("Y") - $something_date;
    $dr_name = $rows_display_report['dr_name'];
    $dr_specialization = $rows_display_report['dr_specialization'];
    $date_of_exam = $rows_display_report['date_of_exam'];
    $description = $rows_display_report['description'];
    $medicines = $rows_display_report['medicines'];

}

?>




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
                                <h5>Name : <span id=""><?php echo $f_name . $l_name; ?></span></h5>
                                <h5>Address : <span id=""><?php echo $address; ?></span></h5>
                                <h5>Mobile : <span id=""><?php echo $mobile; ?></span></h5>
                                <h5 style="float: left;">Gender : <span id=""><?php echo $gender; ?></span></h5>
                                <h5 style="float: right; padding-right: 45%">Age : <span id=""><?php echo $last_dob; ?></span> year</h5>
                            </div>
                        </div>
                        <div class="col-6 image-logo">
                            <div class="content-lf" style="padding-top: 20px;">
                                <h5>Doctor Name : <span id="">ِِ<?php echo $dr_name;?></span></h5>
                                <h5>Specilization : <span id=""><?php echo $dr_specialization;  ?></span></h5>
                                <h5>Date of examination : <span id=""><?php echo $date_of_exam; ?></span></h5>
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
                                    <?php echo $description;?>
                                </p>
                            </div>
                        </div>
                        <div class="col-6" style="height: auto">
                           <div class="content-text" style="height: auto">
                                <h3 style="text-decoration: underline;">Medicines :</h3>
                                <p>
                                <?php echo $medicines;?>

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