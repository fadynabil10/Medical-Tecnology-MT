<?php 
include('./cred/init.php');

    if(logged_in()){
        echo "Welcome " . $_SESSION['email']; " You are currently Logged in ";
    }else{
        redirect("login.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="index.php">Go Home</a>

<a href="logout.php">Logout</a>
    
</body>
</html>