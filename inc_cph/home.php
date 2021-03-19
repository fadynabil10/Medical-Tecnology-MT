<?php


$sql_check_pharmacy = "SELECT * from signin where  id = '".$_GET['id']."' ";
$query_check_pharmacy = query($sql_check_pharmacy);
$fetching_check_pharmacy = fetching($query_check_pharmacy);

$get_pharmacy = $fetching_check_pharmacy['username']
?>

  <!-- start Home -->
    <br><br><br><br><br><br><br>

              
                <!-- Hamburger main icon display when minimize size of screen  -->
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
<?php

//if(isset($_SESSION['username'])){
    echo'<h4 style="text-align: center;font-size: 20px;background-color: #00ff262e;padding-bottom: 2%;padding-top: 2%;">';
//    echo "Welcome <span style='color:red;'>" . $_SESSION['username'] . " </span> You're From Pharmacy " . $_SESSION['pharm_name'];
    echo " Welcome <span style='color:red;'>$get_pharmacy </span> You're From Pharmacy " ;
    echo'</h4>';
//}else{
//  redirect('../html/login_role.php');
//}




?>
    
<div class="form" style="background-color:#fff;">
            
      <div class="tab-content">
        <div id="signup">   

        <?php 

check_coupon();
?>
          <form action="" method="POST">
              
            <div class="field-wrap">
                <h1 style="color: black; font-size: 40px; display: inline;">ID </h1>

              <input type="text" autocomplete="off" name="random_id" placeholder = 'Enter id' style="margin-left:21%;display: inline; width: 53%;color:red"/>
            </div>

              <div class="field-wrap">
                <h1 style="color: black; font-size: 40px; display: inline;">Code  </h1>
              <input type="text" autocomplete="off" name="coupon" placeholder = 'Enter code'style="margin-left:10%;display: inline; width: 53%;color:red"/>
            </div>
          
<!--          <button style="border: 0; outline: none;border-radius: 0;padding: 15px 0;font-size: 2rem;font-weight: 600;height: 70px;text-transform: uppercase;letter-spacing: .1em;background: #1ab188;color: #ffffff;" type="submit" name="confirm_c" class="button button-block1">Confirm Coupon</button>-->
              <button type="submit" class="btn btn-primary" style="width:70%;outline: none;margin-left:15%" name="confirm_c" >Confirm</button>

          </form>

        </div>
        
          
          <form action="/" method="post">
          </form>
          
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

    <br><br><br><br><br>
