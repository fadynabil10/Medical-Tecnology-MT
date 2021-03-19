<?php
//change the values with your own hosting setting
 $mysqli_host = "localhost";
 $mysqli_database = "medical_tec";
 $mysqli_user = "root";
 $mysqli_password = "";

 $db = mysqli_connect($mysqli_host,$mysqli_user,$mysqli_password, $mysqli_database);

 global $db;

//  mysqli_connect($mysqli_host,$mysqli_user,$mysqli_password);

?>
