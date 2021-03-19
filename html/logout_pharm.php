<?php
include('../cred/init.php');
// session_destroy();

unset($_SESSION['username']);
unset($_SESSION['name']);

redirect('../html/login_pharmacian.php');
?>
