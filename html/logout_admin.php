<?php
include('../cred/init.php');
unset($_SESSION['username']);
unset($_SESSION['id']);

redirect('../html/login-admin.php');
?>
