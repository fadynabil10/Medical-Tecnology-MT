<?php

if(isset($_POST['upload'])){
    $img_profile = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $uploaded_last = "chat" .  "_" . $img_name;
    $target= 'imgs/' . $uploaded_last;
    if(move_uploaded_file($img_profile, $target)){
        echo "Uploaded Succefully!";
    }else{
        echo "Not uploaded";
    }
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

<form action="" enctype='multipart/form-data' method="POST">

    <input type="file" name="img">
    <input type="submit" name="upload">
</form>
    
</body>
</html>