<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Confirm Booking</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <link rel="stylesheet" href="../styles/confirm-booking.css" type="text/css"/>    
       
    <style>
    #times_here{
            color: red;
            font-size: 18px
            }
    #times_last{

        opacity: 0;
  animation: blinking 2s linear infinite;
  float:right;
  margin-right: 100px;
  margin-top:100px;
  color:red;

    }
         .intro_text {
          margin-top: 10px; 
          font-size: 20px; 
        }
        .intro_text ol{
            margin-left: 30px;
        }
        .intro_text ol li {
            
        }
        .dropbtn {
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 100%;
            width: 60px;
            height: 60px;
            border: 2px solid #00d4d4;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color: #2980B9;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
            left: -78%;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
        .milestone_text{font-size: 16px;}
    </style>

    </head>
    <body>