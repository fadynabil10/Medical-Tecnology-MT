

<?php

// session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0 ;



if(isset($_GET['room'])){
    $id_room = $_GET['room'];

}else{
    $id_room = '';
}


// echo $_SESSION['email'] . "<br>";
// echo $_SESSION['username'];

$connection5 = mysqli_connect("localhost", "root", "", "medical_tec");

$sql_username_get = "SELECT * from users_chat where room = '".$id_room."' AND type_user = 'patients' ";
$query_username_get = mysqli_query($connection5, $sql_username_get);
$fetching_username_get = mysqli_fetch_assoc($query_username_get);

$get_username_after_fetching = $fetching_username_get['username'];

$get_username_after_fetching_pts = $fetching_username_get['user_id'];




$sql_username_get_doctors = "SELECT * from users_chat where room = '".$id_room."' AND type_user = 'doctor' ";
$query_username_get_doctors = mysqli_query($connection5, $sql_username_get_doctors);
$fetching_username_get_doctors = mysqli_fetch_assoc($query_username_get_doctors);

$get_username_after_fetching_doctors = $fetching_username_get_doctors['username'];

$get_username_after_fetching_doctors = $fetching_username_get_doctors['user_id'];



$sql_img_get_dr = "SELECT * from doctor where id = '".$get_username_after_fetching_doctors."'   ";
$query_img_get_dr = mysqli_query($connection5, $sql_img_get_dr);
$fetching_img_get_dr = mysqli_fetch_assoc($query_img_get_dr);

$get_img_after_fetching_dr = $fetching_img_get_dr['img'];



if(isset($_POST['send_msgs'])){
    $messages = $_POST['entry'];

    $img_profile = $_FILES['img_sending']['tmp_name'];
        $img_name = $_FILES['img_sending']['name'];
        $uploaded_last = date("y-m-d") .  "_" . $img_name;
        $target= 'images/imgs/' . $uploaded_last;

        move_uploaded_file($img_profile, $target);
                                                                                             
        // if(empty($target)=== true && empty($messages) === true){
                
        //     echo "<script>alert('please put the message!')</script>";
        // }else{
            if(empty($messages) === true && empty($uploaded_last) === true){
                $messages = '';
                $uploaded_last = '';
            }else{
                      
                // $another_target = $target;
                sending_msg($_SESSION['user'], $messages, $target, $id_room);
            }
            
        // }
    
    


        


              
    
//   }

}



?>

<center> 


<div class="chat" style='margin-top:100px;'>
  <div class="chat-header clearfix">

<?php


$connection9 = mysqli_connect("localhost", "root", "", "medical_tec");

$sql_msgs_username = "SELECT * from users_chat 
where room = '".$_GET['room']."' AND type_user = 'doctor' ";
$query_msgs_username = mysqli_query($connection9, $sql_msgs_username);
$fetching_msgs_username = mysqli_fetch_assoc($query_msgs_username);
$username_after_fetching = $fetching_msgs_username['username'];
$username_room_fetching = $fetching_msgs_username['room'];
$userid_room_fetching = $fetching_msgs_username['user_id'];



$sql_msgs_pts = "SELECT * from users_chat 
where room = '".$_GET['room']."' AND type_user = 'patients' ";
$query_msgs_pts = mysqli_query($connection9, $sql_msgs_pts);
$fetching_msgs_pts = mysqli_fetch_assoc($query_msgs_pts);
$username_after_fetching_pts = $fetching_msgs_pts['username'];
$username_room_fetching_pts = $fetching_msgs_pts['room'];
$userid_room_fetching_pts = $fetching_msgs_pts['user_id'];

if( $userid_room_fetching == $_SESSION['user'] || $userid_room_fetching_pts == $_SESSION['user'] ){

echo "<img src='$get_img_after_fetching_dr' style='width:45px;height:45px;border-radius:50%' alt='avatar' />";

}
?>

    <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
    
        <!-- <a href="#" class="myButton1" style="background-color:#ef1158;border-radius:5px;margin-left:10px;border: none;display:inline-block;cursor:pointer;color:#ffffff;font-family:Arial;font-size:17px;padding:15px 25px;text-decoration:none;text-shadow:0px 1px 0px #2f6627;float: right;">View Medical Record</a> -->
        <!-- <button type="button" class="btn btn-lg btn-danger myButton1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">View Medical Record</button> -->
        
        <?php 
$connection10 = mysqli_connect("localhost", "root", "", "medical_tec");

            $sql_for_btns = "SELECT * from users_chat where user_id = '".$_SESSION['user']."' AND room = '".$_GET['room']."' ";
            $query_for_btns = mysqli_query($connection10, $sql_for_btns);
            $fetching_for_btns = mysqli_fetch_assoc($query_for_btns);
            $gettype_for_btns = $fetching_for_btns['type_user'];



            if($gettype_for_btns == 'doctor'){

              echo "<button class='popup-btn btn btn-lg btn-danger myButton1' style='background-color:#ef1158;border-radius:5px;margin-left:10px;border: none;display:inline-block;cursor:pointer;font-size:13px;padding:17px 25px;text-decoration:none;float: right;margin-top:0px;'>View Medical Record</button>";

            }else{
              echo "<button class='popup-btn btn btn-lg btn-danger myButton1' style='background-color:#ef1158;border-radius:5px;margin-left:10px;border: none;display:none;cursor:pointer;font-size:13px;padding:17px 25px;text-decoration:none;float: right;margin-top:0px;'>View Medical Record</button>";

            }
  ?>
        <!-- <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto d"> <a href="#" class="myButton1" style="color: #fff;" onclick="document.getElementById('id01').style.display='block'">View Medical Record</a> </div> -->



        <div class="popup" >
            <div class="popup-inner">
            <h1 style='color:#000'><?php echo "< " . ucfirst($get_username_after_fetching) . " - <span style='color:red'>Patients</span>" . " >"; ?></h1>

            <div class="sliderwrap">
      <div class="wrap">
          <div class="sliderblock">
              <h2>Patients Reports</h2>
              <div id="slider" style="width:100%" >
                  <ul style='margin-top: 50px;margin-left:100px;padding:100px;'>
                




    <table class='rwd-table' style='width:100%;'>

    
    <tbody>
      <tr>
        <th>Patient Name</th>
        <th>Description</th>
        <th>Medicines</th>
        <th>Date Of Exam</th>
        
        
      </tr>

                    <?php 
                  $sql_get_pt_mr = "SELECT * from medical_record where username_mr = '".$get_username_after_fetching."' ";
$query_get_pt_mr = mysqli_query($connection5, $sql_get_pt_mr);
while($fetching_get_pt_mr = mysqli_fetch_array($query_get_pt_mr)){
    $get_pt_mr_fetching_dsc = $fetching_get_pt_mr['description'];
    $get_pt_mr_fetching_medicines = $fetching_get_pt_mr['medicines'];
    $get_pt_mr_fetching_username = $fetching_get_pt_mr['username_mr'];
    $get_pt_mr_fetching_doe = $fetching_get_pt_mr['date_of_exam'];


    






      echo "<tr>
        <td data-th='Patient Name'>
          $get_pt_mr_fetching_username
        </td>";
        echo "<td data-th='Description'>
          $get_pt_mr_fetching_dsc
        </td>";
        echo "<td data-th='Medicines'>
          $get_pt_mr_fetching_medicines
        </td>";
        echo "<td data-th='Date Of Exam'>
          $get_pt_mr_fetching_doe
        </td>";
        
      echo "</tr>";
      
      
      
      
      
      











}

?>
            </tbody>

                      </table>




  
                        


                      <!-- <li><img src="http://fpoimg.com/1024x400?text=Preview&bg_color=6cb03a&text_color=ffffff" alt="Images1" /></li>
                      <li><img src="http://fpoimg.com/1024x400?text=Preview&bg_color=ede85a&text_color=ffffff" alt="Images1" /></li>
                      <li><img src="http://fpoimg.com/1024x400?text=Preview&bg_color=4c4c4c&text_color=ffffff" alt="Images1" /></li>
                      <li><img src="http://fpoimg.com/1024x400?text=Preview&bg_color=38badb&text_color=ffffff" alt="Images1" /></li>
                   -->
                  </ul>
                  <a class="prevarrow">&laquo;</a>
                  <a class="nextarrow">&raquo;</a>
              </div>
              <div class="clear"></div>
          </div>
          
          
      </div>
  </div>






            <div class="close-popup">
                <span class="bar"></span>
                <span class="bar"></span>
            </div>                
            </div>
        </div>



        
    
    </div>
<?php


include(__DIR__.'/ajax/count_msgs.php');


?>


<?php 

$sql_check_if_doctor = "SELECT * from users_chat where room = '".$_GET['room']."' AND username = '".$username_after_fetching."' AND type_user = 'doctor' ";
$query_check_if_doctor = query($sql_check_if_doctor);
$fetching_check_if_doctor = fetching($query_check_if_doctor);
$get_check_if_doctor = $fetching_check_if_doctor['user_id'];


//echo $get_check_if_doctor;

$get_check_if_room_doctor = $fetching_check_if_doctor['room'];


$sql_check_if_pts = "SELECT * from users_chat where room = '".$_GET['room']."' AND username = '".$username_after_fetching_pts."' AND type_user = 'patients' ";
$query_check_if_pts = query($sql_check_if_pts);
$fetching_check_if_pts = fetching($query_check_if_pts);
$get_check_if_pts = $fetching_check_if_pts['user_id'];
$get_check_if_room_pts = $fetching_check_if_pts['room'];



//echo $get_check_if_pts;










if($gettype_for_btns == 'patients'){
    echo "<a href='#' class='myButton1' id='endChat' onclick='endChat()' style='border: none;'>End Chat</a>";

    echo "<script>
            function endChat(){
                var endChat = confirm('Are You sure you want to End Chat?');
                if(endChat){
                  window.location.href= 'http://localhost/group_project/medicaltecnology-project/mt/html/Start-rating.php?p_id=$get_check_if_pts&dr_id=$get_check_if_doctor';
                
                }
            }
    </script>
    ";
}else{
  echo "<a href='#' class='myButton1' id='endChat' style='border: none;display:none'>End Chat</a>";

}
?>


            <?php 

              if($gettype_for_btns == 'patients' || $gettype_for_btns == 'doctor'){
                echo "<div href='#' class='myButton2' id='countdown'  style='border: none; margin-right: 10px'></div>
                ";
              }
            

            ?>
          
            
    <!-- <p style="display:none">FINISH!!!</p> -->
        <div ></div>

  </div> <!-- end chat-header -->




  <div class='chat-history'>
  <ul style='list-style: none;' class='seconds'>





<?php 






    // fetchMessages();
    // echo "<br><br><br><br><br>";         

    include(__DIR__.'/ajax/chat.php');

?>






</ul>

                </div>
          <!-- end chat-history -->
                       
  



                <!-- // echo  "<li>";
                // echo "<div class='message-data align-left'>";
                // echo  "<span class='message-data-name'><i class='fa fa-circle online'></i>"; 
                // echo  "</span>";

                // echo  "<span class='message-data-time'>$messages_chat_at, Today</span>";
                // echo $messages_username . "fwefwef";
                // echo  "</div>";
                // echo  "<div class='message  my-message messages_here'>";
                //     echo $messages_chat;
                //   echo "i need that";
                // echo "<a href='' target='blank' style='display:block;margin-top:30px'><img src='' style='width:100px;height=100px'; /></a>";
                
                // echo    "</div>";
                // echo    "</li>";    -->

       <?php         
        
                
        

        
    

       
// if(isset($_POST['message']) === true){

    // if($method === 'message'){
 
// }   

// sending_msg($_SESSION['user'], $messages);


  ?>
        
        
        <div class="chat-message clearfix" > 
                    <form class="conversation-compose" name="form_chat" method="POST"  enctype="multipart/form-data"> 
                    <div class="input-msg" name="input" placeholder="Type a message" autocomplete="off" autofocus>
                     <textarea placeholder="Type a message" name="entry" id="entries" class="entry"></textarea> 
                     </div> 
                     <div class="photo" > <label for="file-input">
                      <i class="fa fa-paperclip" aria-hidden="true" style="cursor: pointer;" ></i> </label>
                       <input type="file" class="file-input hide" name="img_sending" id="file-input"> </div>
                        <button type="submit" name="send_msgs" onclick="checkMsgs()" class="send" > 
                        <div class="circle" style="margin-left: 10px;margin-right: 10px; cursor: pointer;"> <i class="fa fa-paper-plane-o"></i> </div> 
                        </button> 
                        
                        </div> <div class="filename-container hide"></div> 
                        </form> 
                </div>
            </center>   
            <!--End container-->
        
       
       
        
            <script> $(document).ready(function() { $('.file-input').change(function() { $file = $(this).val(); $file = $file.replace(/.*[\/\\]/, ''); 
            //grab only the file name not the path 
            $('.filename-container').append("<span class='filename'>" + $file + "</span>").show(); 
            })
             }) 
             </script> 



<!-- 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --> 


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



<script>


// $(document).ready(function() {
//         var timer2 = localStorage.getItem('timer');
//         if(timer2 === null) timer2 = "30:00";
//         $('#countdown').html(timer2);

//         var interval = setInterval(function() {
//             var timer = timer2.split(':');
//             var minutes = parseInt(timer[0], 10);
//             var seconds = parseInt(timer[1], 10);
//             --seconds;
//             minutes = (seconds < 0) ? --minutes : minutes;
//             if(minutes < 1){
//                 var countdown = document.getElementById('countdown');
//                 countdown.style.color = 'red';
//             }else if (minutes < 0){
//                 clearInterval(interval);
//                 localStorage.removeItem('timer');
//                 $('#countdown').text('FINISHED!');



//               if($get_check_if_pts){
//                 window.location.href='http://localhost/group_project/medicaltecnology-project/mt/pts'

//               }else if($get_check_if_doctor){
//                 window.location.href='http://localhost/group_project/medicaltecnology-project/mt/doctor'

//               }



//             }else{
//                 seconds = (seconds < 0) ? 59 : seconds;
//                 seconds = (seconds < 10) ? '0' + seconds : seconds;
//                 $('#countdown').html(minutes + ':' + seconds);
//                 timer2 = minutes + ':' + seconds;
//                 localStorage.setItem('timer',timer2);
//             }
//         }, 1000);

//       });









//var hoursleft = 0;
var minutesleft = 03; //give minutes you wish
// var secondsleft = 60*30; // give seconds you wish
var secondsleft = 00; // give seconds you wish

var finishedtext = "Countdown finished!";
var end1;
if(localStorage.getItem("end1")) {
end1 = new Date(localStorage.getItem("end1"));
} else {
end1 = new Date();
end1.setMinutes(end1.getMinutes()+minutesleft);
end1.setSeconds(end1.getSeconds()+secondsleft);

}
var counter = function () {
var now = new Date();
var diff = end1 - now;

diff = new Date(diff);

var milliseconds = parseInt((diff%1000)/100)
    var sec = parseInt((diff/1000)%60)
    var mins = parseInt((diff/(1000*60))%60)
    //var hours = parseInt((diff/(1000*60*60))%24);

if (mins < 10) {
    mins = "0" + mins;
}
if (sec < 10) { 
    sec = "0" + sec;
}     
if(now >= end1) {     
    clearTimeout(interval);
   // localStorage.setItem("end", null);
     localStorage.removeItem("end1");
     localStorage.clear();
    document.getElementById('countdown').innerHTML = finishedtext;
    //  if(confirm("TIME UP!")){
      
      

      if(window.location.href == (window.location.href='http://localhost/group_project/medicaltecnology-project/mt/html/chat-form.php?user=<?php echo $get_check_if_pts; ?>&room=<?php echo $get_check_if_room_pts; ?>')){
        
          <?php $last_pts = $get_check_if_pts;
          

          ?>


          
          window.location.href= 'http://localhost/group_project/medicaltecnology-project/mt/html/Start-rating.php?p_id=<?php echo $get_check_if_pts;?>&dr_id=<?php echo $get_check_if_doctor; ?>'

       }else if(window.location.href == (window.location.href='http://localhost/group_project/medicaltecnology-project/mt/html/chat-form.php?user=<?php echo $get_check_if_doctor; ?>&room=<?php echo $get_check_if_room_doctor; ?>')) {

          window.location.href= 'http://localhost/group_project/medicaltecnology-project/mt/html/write_report.php?dr_id=<?php echo $get_check_if_doctor; ?>&p_id=<?php echo $last_pts;?>'        
       }



//        echo $get_check_if_pts . "<br>";

// echo $get_check_if_room_pts;




// echo $get_check_if_doctor . "<br>";
// echo $get_check_if_room_doctor;


    //  }
} else {
    var value = mins + ":" + sec;
    localStorage.setItem("end1", end1);
    document.getElementById('countdown').innerHTML = value;
}
}
var interval = setInterval(counter, 1000);


</script>