

<?php

// session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0 ;

echo $_SESSION['user'];

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
$fetching_username_get = mysqli_fetch_array($query_username_get);

$get_username_after_fetching = $fetching_username_get['username'];





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

    <img src="" style='width:45px;height:45px;border-radius:50%' alt="avatar" />
    <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
        <!-- <a href="#" class="myButton1" style="background-color:#ef1158;border-radius:5px;margin-left:10px;border: none;display:inline-block;cursor:pointer;color:#ffffff;font-family:Arial;font-size:17px;padding:15px 25px;text-decoration:none;text-shadow:0px 1px 0px #2f6627;float: right;">View Medical Record</a> -->
        <!-- <button type="button" class="btn btn-lg btn-danger myButton1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">View Medical Record</button> -->
        
        
        <button class="popup-btn btn btn-lg btn-danger myButton1" style="background-color:#ef1158;border-radius:5px;margin-left:10px;border: none;display:inline-block;cursor:pointer;font-size:13px;padding:17px 25px;text-decoration:none;float: right;margin-top:0px;">View Medical Record</button>

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
    <a href="#" class="myButton1" style="border: none;">End Chat</a>
    <a href="#" class="myButton2" id='CountDown' style="border: none; margin-right: 10px">30:00</a>
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


<script>

/*!
 * The Final Countdown for jQuery v2.1.0 (http://hilios.github.io/jQuery.countdown/)
 * Copyright (c) 2015 Edson Hilios
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */


</script>


<script>


</script>

<!-- 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

