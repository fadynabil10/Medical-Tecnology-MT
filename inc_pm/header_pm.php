


<?php

if(isset($_GET['id'])){
  $dr_id = $_GET['id'];
}else{
  $dr_id = '';
}


$patient_email =  $_SESSION['email'];


$sql_query_fees = "SELECT * from doctor where id = '".$dr_id."' ";
$query_fees = query($sql_query_fees);


while($rows = fetching($query_fees)){
  $fees_dr = $rows['fees'];
}


$sql_query_pt = "SELECT * from profile_patients where email = '".$patient_email."' ";
$query_pt = query($sql_query_pt);
$fetching_pt = fetching($query_pt);

$fetch_pt_id = $fetching_pt['id'];



if(isset($_POST['payment_method'])){

  $Caracteres = 'abcdefghijklmnopqrstuvxwyz0123456789';
  $QuantidadeCaracteres = strlen($Caracteres);
  $QuantidadeCaracteres--;
  $activation_code=NULL;
for($x=1;$x<=20;$x++){
  $Posicao = rand(0,$QuantidadeCaracteres);
  $activation_code .= substr($Caracteres,$Posicao,1);
}

  $invoice_number = $activation_code;
  $p_id = $fetch_pt_id;
  $dr_id_payment = $dr_id;
  $fees_dr_payment = isset($_POST['fees']);


  

  $sql_insert_paytm = "INSERT INTO payment_method (invoice_number, fees_dr) ";
  $sql_insert_paytm .= " VALUES('".$invoice_number."', '".$fees_dr."' )";
  $query_insert_paytm = query($sql_insert_paytm);



  $sql_get_invoice_no = "SELECT * from payment_method where invoice_number = '".$invoice_number."' ";
  $query_get_incoive_no = query($sql_get_invoice_no);
  $fetching_get_invoice_no = fetching($query_get_incoive_no);

  $get_invoice_number = $fetching_get_invoice_no['invoice_number'];

  $date_sch = $_GET['date'];
  $time_sch = $_GET['times'];
  $dow_sch = $_GET['dow'];

  $sql_insertion_dr_pt = "INSERT INTO schedual (sch_date, sch_day, dr_id, p_id, sch_time, invoice_number) ";
  $sql_insertion_dr_pt .= "VALUES('".$date_sch."', '".$dow_sch."', '".$dr_id."', '".$fetch_pt_id."', '".$time_sch."', '".$get_invoice_number."') ";
  query($sql_insertion_dr_pt);


  $sql_dr_paytm_sch = "SELECT * from schedual where dr_id = '".$dr_id."' AND p_id = '".$fetch_pt_id."' AND invoice_number = '".$invoice_number."' ";
  $query_dr_paytm_sch = query($sql_dr_paytm_sch);
  $fetching_dr_paytm_sch = fetching($query_dr_paytm_sch);

  $sch_date_paytm = $fetching_dr_paytm_sch['sch_date'];
  $sch_day_paytm = $fetching_dr_paytm_sch['sch_day'];
  $sch_time_paytm = $fetching_dr_paytm_sch['sch_time'];
  $sch_id_dr_paytm = $fetching_dr_paytm_sch['dr_id'];
  $sch_pt_dr_paytm = $fetching_dr_paytm_sch['p_id'];

if($query_insert_paytm){
  valid_success("Your Payment Successfully purchased!");




  $sql_dr_username = "SELECT * from signin where id = '".$dr_id."' ";
  $another_dr_username = query($sql_dr_username);
  $fetching_another_dr_username = fetching($another_dr_username);
    $fetching_another_drusername = $fetching_another_dr_username['username'];
  
  
  
  
  $sql_pts_username = "SELECT * from profile_patients where id = '".$sch_pt_dr_paytm."' ";
  $another_pts_username = query($sql_pts_username);
  $fetching_another_pts_username = fetching($another_pts_username);
  $fetching_another_ptsusername = $fetching_another_pts_username['username'];






  
  $arrays_data_chat_users_id = array(
    $dr_id,  $sch_pt_dr_paytm
  );



  $arrays_data_chat_users_name = array(
    $fetching_another_drusername,  $fetching_another_ptsusername
  );



  $arrays_data_chat_users_type = array(
    'doctor',  'patients'
  );


//   echo $arrays_data_chat_users_id[0] . "<br>";

//   echo $arrays_data_chat_users_id[1] . "<br>";

// echo $arrays_data_chat_users_name[0] . "<br>";
// echo $arrays_data_chat_users_name[1] . "<br>";

// echo $arrays_data_chat_users_type[0] . "<br>";

// echo $arrays_data_chat_users_type[1] . "<br>";



  $Caracteres2 = '0123456789';
           $QuantidadeCaracteres2 = strlen($Caracteres2);
           $QuantidadeCaracteres2--;
           $activation_code2=NULL;
           for($y=1;$y<=4;$y++){
               $Posicao2 = rand(0,$QuantidadeCaracteres2);
               $activation_code2 .= substr($Caracteres2,$Posicao2,1);

           }

           $rooms_numbers = $activation_code2;

           
  for($z = 0; $z < 2; $z++){

  $sql_reserve_chat_room = "INSERT INTO users_chat (`user_id`, `username`,`type_user`, `room`) ";
  $sql_reserve_chat_room .= " VALUES ('".$arrays_data_chat_users_id[$z]."', '".$arrays_data_chat_users_name[$z]."', '".$arrays_data_chat_users_type[$z]."', '".$rooms_numbers."')    ";
  query($sql_reserve_chat_room);

}





  header("Refresh: 5; URL=http://localhost/group_project/medicaltecnology-project/mt/html/confirm_booking.php?dr_id=$sch_id_dr_paytm&p_id=$sch_pt_dr_paytm&date=$sch_date_paytm&times=$sch_time_paytm&dow=$sch_day_paytm");

}else{
  valid_error("Your Payment Not Successfully purchased!");
}

}


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
                <nav class="main_nav" style="margin-left: 0px">
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
                <div  class="button header_button b2">
                    <a href='../html/logout.php'>logout</a>
                </div>
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
            
		</div>
	</header>
    
    <div class="container-payment">
        <div class="col-xl-">
            <div class="row main-row">
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#visa"><img src="../images/1.png"/></button>
                </div>
            
            </div>
        </div>


<!--Forms-->
        <!-- visa form -->
            <div class="modal fade" id="visa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 600px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/1.png">
                      </div>

                      <div class="form-group">
                        <label>Name in Card</label>
                        <input type="text" class="form-control" placeholder="Enter name" style='outline: none'>
                      </div>
                      <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" maxlength="16" style='outline: none' onkeypress='validate(event)'>
                        <small class="form-text text-muted">We'll never share your card number with anyone else.</small>
                      </div>

                          
                           <form class="form-inline" method="POST">
                                <div class="partone pt">
                                  <label style='font-weight: 600;margin-right :155px'>Expiration</label>
                                  <input onkeyup="$cc.expiry.call(this,event)"  name='exp' class="form-control form-control-part" maxlength="5" placeholder="••/••" />

                                </div>
                                <div class="parttwo pt">
                                  <label style='font-weight: 600;margin-left:32px;'>Cvv</label>
                                  <input type="text" name='cvv' class="form-control form-control-part" placeholder="311" maxlength="3" style="width: 50%; outline: none;float:right" onkeypress='validate(event)'>
                                </div>

                               
                                <div class="modal-footer">
                                  <button type="submit" name="payment_method" class="btn btn-primary btn-block btn-myapp" style='outline: none;padding-top:12px;padding-bottom:12px;padding-left: 107px;padding-right: 107px;margin-top:30px;font-weight:500; margin-left: 194px;'>Pay</button>
                               </div>
                                <div class="pay-amount">
                                <p>Total : <input type='text' style='background-color:rgb(89,205,196);border:0px;text-align:center;color:#fff;font-weight:500' name='fees' id='amount' value='<?php echo $fees_dr; ?>' disabled> EGP</p>
                               </div>
                            </form>
                           


                    </div>

                  
                </div>
              </div>
            </div>
        <!-- End visa form-->
        </div>
    </div>