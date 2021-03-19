<?php
// include('config.php');
include('../cred/init.php');
    if($_POST['act'] == 'rate'){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
		$thepid = $_POST['p_id'];
		$thedrid = $_POST['dr_id'];
		// $comment = $_POST['comment'];


		

    	// $comments = $_POST['comment'];

		// $connection = mysqli_connet("localhost", "root", "", "medical_tec");

    	$query = query("SELECT * FROM star where ip= '".$ip."'  "); 
    	while($data = fetching($query)){
    		$rate_db[] = $data;
		}
		

		$sql_pts_drs_chat = "delete from users_chat where `user_id` in ('$thepid', '$thedrid') ";
  
		query($sql_pts_drs_chat);	
		
    	if(@count($rate_db) == 0 ){
    		query("INSERT INTO star (p_id, dr_id, ip, rate) VALUES ('$thepid', '$thedrid', '$ip', '$therate') ");
				

		
		
			
		
		
		
		}else{
    		query("UPDATE star SET rate = '$therate', p_id = '$thepid', dr_id = '$thedrid', dt_rated = now() WHERE ip = '$ip' ");
    	}
    } 
?>
