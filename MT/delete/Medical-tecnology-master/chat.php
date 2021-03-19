<?php
include('cred/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/skeleton.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    <title>Chat form</title>
</head>
<body>
    <div class="container">

        <div class="row"> 
            <div class="col-md-12">

            <?php chat_connection(); ?> 
                <form action="" method="POST" enctype='multipart/form-data'>
                <div name="output" class="u-full-width output">
                    
                <?php 
                    $sql = "SELECT * from chat ORDER BY message_at DESC";
                    $result = query($sql);

                    while($rows = fetching($result)){
                        $msg_out =  $rows['output'];
                        $msg_at = $rows['message_at'];
                        $img_sending = $rows['img_sending'];

                        echo $msg_out . "--" . $msg_at . "<br>";

                        echo "<img src='$img_sending' height='100' width='300' />";
                    }
                    // echo $msg_out  - $msg_at;
                ?> 
                </div>
                <textarea name="msg" id="" cols="100" rows="5" class="u-full-width input" placeholder="Enter your message here"></textarea><br>
                <input type="file" name="img_sending" />
                <input type="submit" name="sending" value="Send Message"class="u-full-width">
                </form>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
        </div>
    </div>
</body>
</html>