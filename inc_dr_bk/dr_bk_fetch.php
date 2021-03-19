<div class="forms" style="width:100%;margin-top:20px;margin-bottom:20px;text-align:center">

<form action="" method="POST">

<?php 
show_speciality();
?>

<button type="submit" name="search_dr" class="glyphicon glyphicon-search" style="color:white;background-color:#59cdc4;border:none;width: 5%; height: 34px;border-radius: 05px;"></button>
</form>
</div>

<?php
fetch_drs();
?>


