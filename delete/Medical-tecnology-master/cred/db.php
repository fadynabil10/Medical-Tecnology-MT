<?php

$connection = mysqli_connect("localhost", "root", "", "medical_tec11");

function confirm(){
    global $connection;
    if(!$connection){
        die("ERROR");
    }
}

function query($result){
    global $connection;
    return mysqli_query($connection, $result);
}

function fetching($result){
    global $connection;
    return mysqli_fetch_array($result);
}

function num_rows($result){
    global $connection;
    return mysqli_num_rows($result);
}

?>