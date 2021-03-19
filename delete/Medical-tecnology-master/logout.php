<?php
include('./cred/init.php');
session_destroy();

redirect('login.php');
?>