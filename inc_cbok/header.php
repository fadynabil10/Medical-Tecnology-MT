
<?php 


$sql_patient = "SELECT * from signup where email = '".$_SESSION['email']."' ";
$query_patient = query($sql_patient);
$patient_fetching = fetching($query_patient);

$patient_fname = $patient_fetching['f_name']; 
$patient_lname = $patient_fetching['l_name']; 
$patient_id = $patient_fetching['id'];
$patient_img = $patient_fetching['img']; 

$dr_id = $_GET['dr_id'];
$dr_sch_date = $_GET['date'];
$dr_sch_day = $_GET['dow'];
$time_booking = $_GET['times'];

echo $dr_sch_day . "<br>";


$sql_dr_something = "SELECT * from doctor where id = '".$dr_id."' ";
$another_dr_something = query($sql_dr_something);
$fetching_another_dr = fetching($another_dr_something);







if(isset($_GET['id'])){
  $sql_insertion_dr_pt = "INSERT INTO schedual (sch_date, sch_day, dr_id, p_id, sch_time) ";
  $sql_insertion_dr_pt .= "VALUES('".$dr_sch_date."', '".$dr_sch_day."', '".$dr_id."', '".$patient_id."', '".$time_booking."') ";
  $result = query($sql_insertion_dr_pt);


  if($result){
    valid_success("Patient Has been Booking Successfully!");


  }else{
    valid_error("Patient Not been Booking Successfully!");
  }
}












$sql_doctor = "SELECT * from doctor where id = '".$dr_id."' ";
$query_doctor_query = query($sql_doctor);
while($rows = fetching($query_doctor_query)){
  // echo $rows[''];


  ?>



        <div class="super_container">

<!-- start Header -->

<header class="header trans_400" id="headerlogo">
    <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

            <!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
                    </a>
                </div>

               <!-- Main Navigation -->
                <nav class="main_nav" style="margin-left: 54px">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="corona.php">Health awareness</a></li>
                        <li><a href="index.php#BestCare">Best Care</a></li>
                        <li><a href="index.php#whych">Why choose us?</a></li>
                        <li><a href="index.php#Services">Services</a></li>
                        <li><a href="index.php#offers">Offers</a></li>
                        <li><a href="#Contactus">Contact us</a></li>

                    </ul>
                </nav>

        <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                
                <div class="dropdown">
                    
                  <?php 

if(isset($_GET['p_id'])){
  $p_id = $_GET['p_id'];
}else{
  $p_id = '';
}

$sql_person_pico = "SELECT * from profile_patients where id = '".$p_id."' ";
                            $query_person_pico = query($sql_person_pico);
                            $fetching_person_pico = fetching($query_person_pico);
                            $get_person_pico = $fetching_person_pico['img'];

?>
                  <img src="<?php echo $get_person_pico; ?>" onclick="myFunction()" class="dropbtn"/>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="./profile_patient.php?id=<?php echo $p_id; ?>">Profile Patients</a>  
                    <a href="./Book-index.php?p_id=<?php echo $p_id; ?>">Make appointment</a>  
                    <a type="button" href="./confirm_booking.php?p_id=<?php echo $p_id; ?>">appointment</a> 
                    <a type="button" href="./medical_record.php?id=<?php echo $p_id; ?>">My Medical Record</a>  
                    <a href="../html/logout.php">logout</a>  
                  </div>
                </div>

            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>

    </div>
</header>

<div class="container-booking" style="margin-top:130px">
<?php 

?>
<div class="row">
    <div class="col-6 left">
        <div class="left-content" style=" box-shadow: 5px 10px 5px 3px #ccc;">
          <div class="row">
                <h6 id='' >Patiant Name <span><?php echo $patient_fname ." ". $patient_lname; ?></span></h6>            
          </div>
          <div class="row">
                <!-- <h6>Register Date <span id='date-register'></span></h6>             -->
                <h6>Register Date <span ><?php echo $_GET['date']; ?></span></h6>            

          </div>
          <div class="row" style="border-bottom: none;">
                <h6 class = "countform-register" id="">
                    Time remaining <span id='times_here' style="padding-left: 62px">

                    <?php //echo  $dr_sch_date ."<br>" .  $time_booking; 
                    
                    //month, day of month , 2020 

                    $month_day_of_month =  date('F d', strtotime($dr_sch_date));
                    $years =  date('Y', strtotime($dr_sch_date));

                    $last_booking = "$month_day_of_month, $years $time_booking";

                    
                    ?>
<!--                    <p id="demo"></p>-->
    


                    </span>
              </h6>                                
          </div>
          <div class="row btn-Cancel" id="cancel-register" style="border-bottom: none;">
          <a type="button" id="cancel_app" onclick='cancel_app()' class="btn btn-danger" style="color:#fff;display:none;">Cancel appointment</a>
            <h4 id='cancels'></h4>

          </div>
        </div>
    </div>
    <div class="col-6 right">
      <div class="row right-content" >
                <h4 style="top: 79%;left: -35%;">Your appointment is confirm</h4>            
      </div>



        <div class="row">
            <div class="right-doc">
               <div class="row">
                    <h6>Doctor <span><?php echo $rows['dr_name']; ?></span></h6>            
              </div>
                 <div class="row">
                    <h6>Phone <span><?php echo $rows['phone']; ?></span></h6>            
              </div>
              <div class="row">
                    <h6>Address <span style="padding-left: 72px;"><?php echo $rows['dr_clinic_address']; ?></span></h6>            
              </div> 

              <?php


}
              ?>

              
          </div>
            </div>
    </div>
  </div>

</div>



<script src='https://momentjs.com/downloads/moment-with-locales.js'>

</script>



<?php 



$goto_room_user_pts = "SELECT * from users_chat where `user_id` = '".$patient_id."' AND `type_user` = 'patients' ";
$goto_room_query_pts = query($goto_room_user_pts);
while ($fetching_room_query_pts = fetching($goto_room_query_pts)){
  $room_users_pts = $fetching_room_query_pts['room'];
  $chat_type_user_pts = $fetching_room_query_pts['user_id'];
}
        


        // echo  $room_users_pts;
        // echo $chat_type_user_pts;
      

      
?>

<script> // Set the date we're counting down to 
// var countDownDate = moment().format('2020-07-21'); 
// Update the count down every 1 second
var times_here = document.getElementById('times_here');



var sch_time_hours  = new Date('<?php echo $last_booking; ?>').getHours(); //4
var sch_time_mins  = new Date('<?php echo $last_booking; ?>').getMinutes(); // 00
var sch_time_sec  = new Date('<?php echo $last_booking; ?>').getSeconds();//00





last_hours_current = parseInt(sch_time_hours) * 60 ; //hours to minutes   
last_minutes_current = parseInt(sch_time_mins); 


last_sch_calc = last_hours_current + last_minutes_current + sch_time_sec;


 var x = setInterval(function() {
    // Get today's date and time 
    


    var now = moment()

    // Find the distance between now and the count down date
     var current_min = now.get('minutes') ; 
     var current_hours = now.get('hours');
     var current_seconds = now.get('seconds');
    //  (current_hours + ":" + current_min + ":" + current_seconds);
    var last_convert_sch_hrs_min = current_hours * 60;
    var last_convert_sch_min = current_min;

    var last_current_calc = last_convert_sch_hrs_min + last_convert_sch_min;


    if(current_hours > sch_time_hours){
      times_here.innerHTML = "Expired";
    }else{
      var totals_calc = last_sch_calc - last_current_calc ;
    times_here.innerHTML = (totals_calc) +" Minutes";
    }
    



        if(totals_calc == '1'){





          var cancel_app = document.getElementById('cancel_app');
          var cancels = document.getElementById('cancels');

          cancel_app.style.display = 'none';

          cancels.innerHTML = 'You Will Redirect Now To The Chat Room with Your Doctor in less than 1 Min';



        }else if(totals_calc < 0){
          var cancel_app = document.getElementById('cancel_app');
          var cancels = document.getElementById('cancels');

          cancel_app.style.display = 'none';

          cancels.innerHTML = "Sorry timeOut";

          
        
        }else if (totals_calc == '0') {
          
          
        clearInterval(x);

    

      window.location.href="http://localhost/group_project/medicaltecnology-project/mt/html/chat-form.php?user=<?php echo $chat_type_user_pts; ?>&room=<?php echo $room_users_pts; ?>";

  }

}, 1000); 

        </script> 








<?php



function deleteUser(){

$sql_pts_for_chat = "select *  from profile_patients  where email = '".$_SESSION['email']."' ";
  $query_pts_for_chat = query($sql_pts_for_chat);
  $fetching_pts_for_chat = fetching($query_pts_for_chat);

  $id_pts_for_chat = $fetching_pts_for_chat['id'];


  $sql_pts_drs_chat = "delete from users_chat where `user_id` IN ('".$id_pts_for_chat."', '".$dr_id."') ";
  
  $check_query_executed = query($sql_pts_drs_chat);

  if($check_query_executed){
    header("refresh:3;url=http://localhost/group_project/medicaltecnology-project/mt/html/profile_patient.php?id=$patient_id");
  }
}

?>

<?php

if(!isset($_GET['confirmed'])) { //if they haven't, we display the confirmation message
?>
  <script type='text/javascript'>
    function cancel_app(){

    var responce=confirm('Are you sure to cancel this Appoinment?');
    if (!(responce==true)){
        //if confirmed, reload the page with added 'confirmed' parameter
        window.location.href = "http://localhost/group_project/medicaltecnology-project/mt/html/profile_patient.php?id=$patient_id";
      
      

    }

    }
    </script>


   <?php 
  }elseif($_GET['confirmed'] == 1) {
     deleteUser();
  }
    ?>
   


  

  





  




}

}

</script>