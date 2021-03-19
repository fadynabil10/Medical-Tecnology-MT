




<div class="forms" style="width:100%;margin-top:20px;margin-bottom:20px;text-align:center">

<form action="" method="POST">

<?php 
show_speciality();
?>



<button type="submit" class="submit-filter" name="search_dr" style="display: inline-block;margin-left: 2%; color:white;background-color:#59cdc4;border:none;width: 5%; height: 34px;border-radius: 5px;font-size: 20px"><i class="fa fa-search"></i></button>

</form>












</div>

<?php
fetch_drs();



booking_dr_patients();

?>


