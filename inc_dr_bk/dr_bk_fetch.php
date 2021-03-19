




<div class="forms" style="width:100%;margin-top:20px;margin-bottom:6%;text-align:center;height: 38px;margin-left: 30%;">

<form action="" method="POST">

<?php 
show_speciality();
?>



<button type="submit" class="submit-filter" name="search_dr" style="width:40%;display: inline-block;margin-left: 2%; color:white;background-color:#59cdc4;border:none;width: 5%; height: 34px;border-radius: 5px;font-size: 20px;float:left;"><i class="fa fa-search"></i></button>

</form>












</div>

<?php
fetch_drs();



booking_dr_patients();

?>


