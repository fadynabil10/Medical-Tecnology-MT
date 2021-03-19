<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <title>booking</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../styles/booking-style.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" href="../styles/profile-doctor-for-patiant.css" type="text/css" />
    <style>




#notzisweek {
  opacity: 0;
  animation: blinking 2s linear infinite;
  float:right;
  margin-right: 100px;
  margin-top:100px;
  color:red;
}

@keyframes blinking {
  from,
  49.9% {
    opacity: 0;
  }
  50%,
  to {
    opacity: 1;
  }
}



#notzisday {
  opacity: 0;
  animation: blinking 2s linear infinite;
  float:right;
  margin-right: 300px;
}

@keyframes blinking {
  from,
  49.9% {
    opacity: 0;
  }
  50%,
  to {
    opacity: 1;
  }
}


.container-book {
            margin: 0 25%;
        }

        header {
            width: 100%;
        }

        .filter-container {
            margin: 0 5%;
        }

        .filter-part {
            width: 100%;
            overflow: hidden;
            display: inline-block;
        }

        .filter-part select {
            width: 26%;
        }

        .filter-container .filter-part .form-control {
            margin-top: 10px;
        }

        .main-section {
            margin: 2% auto;
        }

        .profile-info .star {
            font-size: 17px;
        }

        .profile-info h5 span {
            padding-left: 0;
        }

        h5 .p-icon img {
            margin-right: 10px;
        }

        .warp {
            float: right;
            margin: 20px auto;
            display: inline-block;
            padding: 5px 5px;
        }

        .main-section {
            padding-top: 30px;
            border-radius: 10px;
            height: 260px;
        }

        .content {
            padding-top: 10px;
            border-radius: 5px;
        }

        .sub-table {
            text-align: center;
            border-radius: 5px;
            margin-right: 10px;
        }

        .sub-col-text {
            color: #fff;
            background-color: #59cdc4;
        }

        .time-content {
            padding: 0;
            margin-top: 0;
        }

        .accordian .content button {
            background-color: red;
            border: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .time-content h6 {
            padding-bottom: 10px;
            padding-top: 10px;

        }

        .column-one {
            padding-left: 50px;
        }

        .p-ic,
        .p-icon span {
            font-size: 10px;
        }

        .profile-info h5 {
            padding-bottom: 10px;
        }

        h5 {
            font-size: 15px;
            margin: 0;
        }

        .sub-col-text {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .filter-part select {
            display: inline-block;
            width: 30%;
            padding-right: 0;
            margin-right: 0;
            border-right: 0;
        }

        select {
            cursor: pointer;
        }
        .doctor-list{
            box-shadow: 3px 3px 5px 2px #333;
            border-radius: 5px;
        }        










    </style>

</head>




<body>

<script>
function question(){
    var confirms = confirm('Are you sure to book this day with this doctor');
    if(confirms){
        window.location.href='http://localhost/group_project/MT/inc_dr_bk/booking_dr.php?id=&spec=&date=&day=Sunday';
    }
}
</script>