<?php
include('../cred/init.php');
unset($_SESSION['username']);
unset($_SESSION['name']);

redirect('../html/login_pharmacian.php');
?>
