<?php
include('../cred/init.php');
// session_destroy();

$email_opened_session = $_SESSION['email'];
unset($_SESSION['session_id']);
$sql_remove_session_id = "UPDATE profile_patients SET session_id ='' where  email = '".$email_opened_session."' ";
query($sql_remove_session_id);
unset($_SESSION['email']);

redirect('../html/login.php');
?>
