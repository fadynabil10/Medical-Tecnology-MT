<?php

// session_start();
// include('../cred/init.php');
$_SESSION['user'] = (isset($_GET['user']) === true) ? $_GET['user'] : 0 ;

// echo $_SESSION['user'];





    


countMessages();




if(isset($_POST['method2']) === true && empty($_POST['method2']) === false){

  $method2 = trim($_POST['method2']);
  if($method2 === 'fetch2'){
    
    

    
  }
  
  
      
  }









  
  function countMessages(){
  
    if(isset($_GET['room'])){
      global $room_id;
        $room_id = $_GET['room'];
        
    }else{
        $room_id = '';
    }




    $connection4 = mysqli_connect("localhost", "root", "", "medical_tec");
    
     $sql_count_msgs = "SELECT COUNT(*) from chat where room = '".$room_id."' ";
     $query_count_msgs = mysqli_query($connection4, $sql_count_msgs);
     $fetching_count_msgs = mysqli_fetch_array($query_count_msgs);
   
 
     // echo $fetching_count_msgs[0];
 
     $connection9 = mysqli_connect("localhost", "root", "", "medical_tec");

     $sql_msgs_username = "SELECT * from users_chat 
      where room = '".$room_id."' AND type_user = 'doctor' ";
     $query_msgs_username = mysqli_query($connection9, $sql_msgs_username);
     $fetching_msgs_username = mysqli_fetch_assoc($query_msgs_username);
     $username_after_fetching = $fetching_msgs_username['username'];
     $username_room_fetching = $fetching_msgs_username['room'];
     $userid_room_fetching = $fetching_msgs_username['user_id'];



     $sql_msgs_pts = "SELECT * from users_chat 
     where room = '".$room_id."' AND type_user = 'patients' ";
    $query_msgs_pts = mysqli_query($connection9, $sql_msgs_pts);
    $fetching_msgs_pts = mysqli_fetch_assoc($query_msgs_pts);
    $username_after_fetching_pts = $fetching_msgs_pts['username'];
    $username_room_fetching_pts = $fetching_msgs_pts['room'];
    $userid_room_fetching_pts = $fetching_msgs_pts['user_id'];

     // <div class='chat-about'><div class='chat-with'>Chat with <span style='color:red'>Dr.</span> </div>
     // <div class='chat-num-messages'>already <span class='nums_msgs'>7</span> messages</div></div>
   
    echo "<div class='chat-about'>";

              echo "<div class='chat-with'>Chat with 
              <span style='color:red'>Dr.</span>
              
                  $username_after_fetching";
      // echo    "<span style='color:red'>None</span>";
      echo "</div>";

      
            echo "<div class='chat-num-messages'>already 
                      <span class='nums_msgs'>$fetching_count_msgs[0]</span>
                      messages
                  </div>";

    echo "</div>";
   
   }










  ?>