<?php
include('../cred/init.php');
// session_destroy();


$session_id_id_to_delete = $_SESSION['id'];
unset($_SESSION['id']);
$sql_remove_session_id = "UPDATE doctor SET session_id ='' where  id = '".$session_id_id_to_delete."' ";
query($sql_remove_session_id);
unset($_SESSION['username']);


redirect('../html/login_role.php');
?>
