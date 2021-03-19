<?php
include('../cred/init.php');
// session_destroy();

unset($_SESSION['username']);
unset($_SESSION['id']);

redirect('../html/login-admin.php');
?>
