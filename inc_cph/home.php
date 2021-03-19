<!-- start Home -->
  <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
 <!-- Hamburger main icon display when minimize size of screen  -->
 <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
 </div>
<?php
if(isset($_SESSION['username'])){
  echo '<div class ="welcome-mm alert alert-success">';
  echo "Welcome  <span style='font-weigth:bold; color:red; '> Mr." . $_SESSION['username'] . " </span>You're From Pharmacy <span style='font-weigth:bold; color:red; '>" . $_SESSION['pharm_name'] . "</span></span>" ;
  echo '</div>';
}else{
  redirect('login_pharmacian.php');
}
?>   
<div class="form">
  <div class="tab-content">
    <div>

<?php 
check_coupon();
?>
          
  <form action="" method="POST"> 
            <div class="field-wrap">
                <h3 style="color: black; margin-right:145px; display: inline;">ID</h3>
                <input type="text" autocomplete="off" name="random_id" placeholder = 'Enter id' style="border-radius: 5px;padding: 10px;display: inline; width: 50%;color:#333;"/>
            </div>

           <div class="field-wrap">
                <h3 style="color: black; margin-right:90px; display: inline;">Code</h3>
              <input type="text" autocomplete="off" name="coupon" placeholder = 'Enter code'style="border-radius: 5px;padding: 10px;display: inline; width: 50%; color:#333;"/>
            </div>
            <a type="submit" name="confirm_c" class="btn btn-primary btn-lg" style='color:#fff; cursor:pointer; width:100%; text-align:center;' role="button" aria-disabled="true">Confirm</a>
   </form>

   </div>         
      <form action="/" method="post">
       </form>
          
  </div><!-- tab-content -->     
</div> <!-- /form -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

    