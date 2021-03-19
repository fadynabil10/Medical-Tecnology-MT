


<?php

// session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? $_GET['user'] : 0 ;

$users_id =  $_SESSION['user'];







// sending_msg(2, "this is another one from sara the patient");


$connection3  = mysqli_connect("localhost", "root", "", "medical_tec");

                    $sql_users_chat = "SELECT * from `users_chat` where `user_id` = '".$users_id."' ";
                    $query_users_chat = mysqli_query($connection3, $sql_users_chat);
                    while($rows2 = mysqli_fetch_assoc($query_users_chat)){
                      $another_id = $rows2['user_id'];
          

                    }


                    // echo $another_id;

                    // echo $another_id;

?>




<?php

// if(isset($_GET['username'])){
//   $usernames = $_GET['username']; 
//   $another_username = strval($usernames);
//   echo $another_username;

// }else{
//   $usernames = '';
// }


if(isset($_POST['method']) === true && empty($_POST['method']) === false){

  $method = trim($_POST['method']);
  if($method === 'fetch'){
    // $messages = fetchMessages();
    // if(empty($messages) === true){
    //   // echo $messages;
    //   // return true;
    // }
    fetchMessages();
    
  }
  
  // else if($method === 'throw' && isset($_POST['message']) === true){
  //   $message = trim($_POST['message']);
  
  //   // if($method === 'messagess'){
  //     if(empty($message) === false){

  //     sending_msg($another_id, $message);
  
  //               //   // sending_msg(5, $messages2);
  
  //               }
        
        
  
                  
  
                  
        
  //     // }
  
  //   // }
  // }
      
  }
   


?>





<?php


// include('../cred/init.php');





                  




?>





        



          



<?php

// echo "heytheressss";



function fetchMessages(){




                

    $connection2  = mysqli_connect("localhost", "root", "", "medical_tec");


    
    
    $sql_select_chats = "SELECT chat.messages, chat.message_at, chat.img_sending, 
    users_chat.username, users_chat.user_id , users_chat.type_user, users_chat.room, users_chat.current_reg
    from chat JOIN users_chat ON chat.user_id = users_chat.user_id AND chat.room = users_chat.room
     ORDER BY chat.message_at DESC ";
    $query_select_chats = mysqli_query($connection2, $sql_select_chats);

    
          while($rows_chats = mysqli_fetch_assoc($query_select_chats)){
                $messages_chat = $rows_chats['messages'];
                $messages_chat_at = $rows_chats['message_at'];
                $messages_chat_img_sending = $rows_chats['img_sending'];
                $messages_username = $rows_chats['username'];
                $type_user = $rows_chats['type_user'];

              if($type_user === 'patients'){
                echo "<li class='clearfix' id='chatLogs'>";
                echo "<div class='message-data align-right'>";
                    echo    "<span class='message-data-time'> 
                    <span style='color:red'>$type_user</span>
                     . $messages_chat_at Today </span>";
                        echo "<span name='uname'>" .$messages_username . "</span>";
                          echo  "<span class='message-data-name' >";
                          echo  "</span><i class='fa fa-circle online'></i>";
                          echo "</div>";
                          // if(empty($messages_chat) === true){


                                  echo "<div class='message other-message float-left messages_here'>";
                                  
                                  echo $messages_chat;

                                  // echo "images/imgs/".date('y-m-d')."_ ";


                              if($messages_chat_img_sending == "images/imgs/".date('y-m-d')."_"){
                                echo "<div class='imgs_sending' style='display:none'>";
                                echo "<a href='$messages_chat_img_sending' target='blank' style='display:block;'>";
                              echo   "<img src='$messages_chat_img_sending' style='width:100px;height=100px' /></a>";
                                      echo "</div>";
                              }else{
                                echo "<div class='imgs_sending' >";
                                echo "<a href='$messages_chat_img_sending' target='blank' style='display:block;'>";
                              echo   "<img src='$messages_chat_img_sending' style='width:100px;height=100px' /></a>";
                                      echo "</div>";
                                    }


                echo "</div>";

                
                
              echo "</li>";



              }else{
                echo  "<li>";
                echo "<div class='message-data align-left'>";
                echo    "<span class='message-data-time align-left'>
                  . $messages_chat_at, Today </span>";
                 echo "<span style='color:red;'>$type_user</span>";

                echo  "<span class='message-data-name' style='float:left'><i class='fa fa-circle online'></i>"; 
                echo  "</span>";

                // echo  "<span class='message-data-time'>$messages_chat_at, Today</span>";
                echo "<span name='uname' style='float:left;'>" .$messages_username . "</span>";
                echo  "</div>";
                // if(empty($messages_chat) === true){

                echo  "<div class='message  my-message messages_here'>";



                    echo $messages_chat;
                    if($messages_chat_img_sending == "images/imgs/".date('y-m-d')."_"){
                      echo "<div class='imgs_sending' style='display:none'>";
                      echo "<a href='$messages_chat_img_sending' target='blank' style='display:block;'>";
                    echo   "<img src='$messages_chat_img_sending' style='width:100px;height=100px' /></a>";
                            echo "</div>";
                     }else{
                      echo "<div class='imgs_sending'>";
                      echo "<a href='$messages_chat_img_sending' target='blank' style='display:block;'>";
                    echo   "<img src='$messages_chat_img_sending' style='width:100px;height=100px' /></a>";
                            echo "</div>";
                     }

                    

                echo    "</div>";


                echo    "</li>";   
              }
                
          }

        


                



               
              }
                
                

               
              
              // fetchMessages(); 
                               
      
          
                
                

            
                  
                                         
                        
?>
       



       