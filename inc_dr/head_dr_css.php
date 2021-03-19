<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile Doctor</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="medical tecnology">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
        <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
        <style>
        .main_nav {
            margin-left: 50px;
        }

        td input[type = 'text'],
        td input[type = 'tel'],
        td input[type = 'number']{
            padding:10px;
            border-radius:10px;
            outline:none;

        }
        td input[type = 'text']:hover,
        td input[type = 'text']:focus,
        td input[type = 'tel']:hover,
        td input[type = 'tel']:focus,
        td input[type = 'number']:hover,
        td input[type = 'number']:focus{
            border: 2px solid #20c997;
        }
        *{
    margin: 0;
    padding: 0;
}
.super_container{
    background-color: #f8f8f8;
}
.container-patient{
    margin-top: 180px;
}
.clear{
    clear: both;
}
.left-section{
    width: 100%;                          
    max-height: 400px;
    min-height: 400px;
    padding: 20px;
}
.left-section .left-content{
    height: inherit;
    outline: none;
    padding-left: 100px;
}
.left-section .left-content .patiant-image{
    width: 200px;
    height: 200px;
    border: none;
} 
.left-content h4{
    float: right;
    text-transform: uppercase;
    padding: 54px 140px 0 30px;
    font-size: 25px;
}
.left-content .edit-icon{
    float: right;
    position: absolute;
    top: 57px;
    right: 66px;
}
.left-content .edit-icon img{
    width: 25px;
    height: 25px;
}
.btn-top,.btn-buttom{
    padding: 10px 50px 10px 50px;
    width: 60%;
    text-transform: uppercase;
}
.btn-top{
    margin-bottom: 10px;
}
.btn-buttom{
    margin-top: 10px;
}
/**/
.right-section{
    width: 100%;                          
    max-height: 400px;
    min-height: 400px;
    padding: 20px;
}
.right-section .right-content{
    padding-top: 46px;
    padding-left: 30px;
}
/* end upper section*/
/* start lower section*/
/* title table */
.profile-info{
    background-color: #fff;
    width: 100%;
    border: 2px solid #f8f8f8;
    border-radius: 15px;
}
.title-bar{
    width: 100%;
    height: 80px;
    padding: 20px 0 10px 20px;
    border-bottom: 2px solid #f8f8f8;
}
.columnone{
    width: 10%;
    float: left;
    padding-top: 5px;
    padding-right: 30px;
}
.columnone img{
    width: 40px;
    height: 40px; 
}
.columntwo{
    width: 90%;
    float: right;
}
.columntwo .col-text{
    font-size: 25px;
    padding-bottom: 10px;
    text-transform: uppercase;
    
}

/* end title table */
.table-content{
    width: 78%;
    margin: 2% 0 0% 10%;
}
.table-content tr{
    border-bottom: 2px solid #f8f8f8;
    padding: 10px 0 10px 0;
    font-size: 18px;

}
.table-content .head-tr{
    text-transform: uppercase;
    font-size: 20px;
}
.table td {
    padding: 1.75rem;
}
.table-content .edit-icon{
    width: 25px;
    height: 25px;
}
.btn-myapp{
    background-color: rgb(89,205,196,0.9);
    border: none;
    width: 80%;
    text-transform: uppercase;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 0 20% 0 20%;
    /* position: absolute; */
}
.btn-myapp:hover{
    background-color: rgb(89,205,196);
    border: none;
}

footer{
    display:none;
}
/*last edit */
.personal-info{
    margin: 70px 5% 70px 15%;
    width: 75%;
}

        </style>  
    <style>
        
    </style>
    </head>
    <body>
