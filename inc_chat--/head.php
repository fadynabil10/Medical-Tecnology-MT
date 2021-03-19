



<!DOCTYPE html>
<html lang="en">
<head>
<title>Medical Tecnology</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="medical tecnology">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/ico" href="../images/iconstwo.png" />
<link rel="stylesheet" href="../styles/chatds.css" type="text/css"/> 
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">





<style>




@import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

* {font-family: 'Open Sans', sans-serif;}

.rwd-table {
  margin: auto;
  min-width: 300px;
  max-width: 100%;
  border-collapse: collapse;
}

.rwd-table tr:first-child {
  border-top: none;
  background: #428bca;
  color: #fff;
}

.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd):not(:first-child) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}


/* THE END OF THE IMPORTANT STUFF */

/* Basic Styling */
body {
background: #4B79A1;
background: -webkit-linear-gradient(to left, #4B79A1 , #283E51);
background: linear-gradient(to left, #4B79A1 , #283E51);        
}
h1 {
  text-align: center;
  font-size: 2.4em;
  color: #f2f2f2;
}
.container {
  display: block;
  text-align: center;
}
h3 {
  display: inline-block;
  position: relative;
  text-align: center;
  font-size: 1.5em;
  color: #cecece;
}
h3:before {
  content: "\25C0";
  position: absolute;
  left: -50px;
  -webkit-animation: leftRight 2s linear infinite;
  animation: leftRight 2s linear infinite;
}
h3:after {
  content: "\25b6";
  position: absolute;
  right: -50px;
  -webkit-animation: leftRight 2s linear infinite reverse;
  animation: leftRight 2s linear infinite reverse;
}
@-webkit-keyframes leftRight {
  0%    { -webkit-transform: translateX(0)}
  25%   { -webkit-transform: translateX(-10px)}
  75%   { -webkit-transform: translateX(10px)}
  100%  { -webkit-transform: translateX(0)}
}
@keyframes leftRight {
  0%    { transform: translateX(0)}
  25%   { transform: translateX(-10px)}
  75%   { transform: translateX(10px)}
  100%  { transform: translateX(0)}
}

/*
    Don't look at this last part. It's unnecessary. I was just playing with pixel gradients... Don't judge.
*/
/*
@media screen and (max-width: 601px) {
  .rwd-table tr {
    background-image: -webkit-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -moz-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -o-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: -ms-linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
    background-image: linear-gradient(left, #428bca 137px, #f5f9fc 1px, #f5f9fc 100%);
  }
  .rwd-table tr:nth-child(odd) {
    background-image: -webkit-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -moz-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -o-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: -ms-linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
    background-image: linear-gradient(left, #428bca 137px, #ebf3f9 1px, #ebf3f9 100%);
  }
}*/































.filename-container { 
    width: 100%; text-align: left; 
    padding: 10px; background-color: #59cdc4; 
    color: blue; padding-bottom: 10px; 
    } 
    .filename {
         display: inline-block; padding: 0 10px;
          background-color: #ccc; 
          border-radius: 5px; 
          height: 20px; 
          line-height: 20px;
           text-align: center; 
           font-weight: 700; 
           font-size: 12px;
            font-family: 'verdana', sans-serif; 
            margin-bottom: 5px; 
            } 
            .hide { 
                display: none;
                 } 
                 .chat .chat-message{ 
                     padding-top: 50px;
                      } 

                      .photo > label > i{
                          margin-top:25px;
                      }













                      /* html {
  box-sizing: border-box !important;
}

*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html, body {
  width: 100%;
  height: 100%;
} */

/* body {
  background: #333;
  color: #fff;
  font-size: 18px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  line-height: 1.6;
} */

.popup-btn {
  outline: none;
  border: none;
  background: #eee;
  font-size: 22px;
  font-weight: bold;
  max-width: 200px;
  display: block;
  width: 100%;
  padding: 10px 0;
  margin: 50px auto 0;
  cursor: pointer;
  transition: all .2s;
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
}

.popup-btn:hover {
  background: #ccc;
}

.popup {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, .8);
  z-index: 999;
  display: none;
}

.popup-inner {
  /* max-width: 600px; */
  max-width: 1065px;

  padding: 50px 20px;
  background: #eee;
  color: #333;
  min-height: 400px;
  position: relative;
  /* margin: 50px 0; */
  left: 30%;
  top:20%;
  transform: translateX(-50%) rotate(0);
  -webkit-transform: translateX(-50%) rotate(0);
  -moz-transform: translateX(-50%) rotate(0);
  -ms-transform: translateX(-50%) rotate(0);
  -o-transform: translateX(-50%) rotate(0);
  border-radius: 10px; 
}

.close-popup {
  position: absolute;
  width: 25px;
  height: 25px;
  top: 10px;
  right: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.close-popup .bar {
  height: 3px;
  background: #333;
  width: 18px;
  transform: rotate(45deg);
  position: absolute;
}

.close-popup .bar:nth-child(1) {
  transform: rotate(-45deg);
}

body.popup-active {
  overflow: hidden;
}

body.popup-active .popup {
  overflow-y: scroll;
}




















html {font-family:; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
body { margin: 0; padding: 0px; background: #f4f5f5; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 100%; line-height: 15px; color: #000; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; }
dl, dt, dd, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, legend, input, textarea, p, blockquote, th, td { margin: 0; padding: 0}
li { list-style:none;}
/*For Clear*/
.clearfix { *zoom: 1;}
.clearfix:before, .clearfix:after { display: block; content: ""; line-height: 0; }
.clearfix:after { clear: both; }
.clear { clear: both; }
/* Forms */


/*Page Css */
.wrap { width:1024px; margin:0 auto;}
/* Slider First */
.sliderwrap { padding:30px 0;}
.sliderwrap a { cursor:pointer;}
.sliderwrap h2 { font-size:30px; line-height:1.5; text-transform:capitalize; padding-bottom:10px; font-weight:normal;}
#slider { width:1024px; position:relative; overflow:hidden; margin:0 auto 50px auto; height:500px;}
#slider ul { position:absolute;}
#slider li { float:left; width:1024px; background-color:#c6c6c6;}
#slider .nextarrow, #slider .prevarrow {position: absolute; top:240px; left:998px;font-size: 30px; text-decoration: none; color:#fff; padding: 5px; z-index:2; height:30px; width:20px; line-height:24px; margin-top:-20px;}
#slider .prevarrow { left:0;}
#slider .nextarrow { right:0;}
#slider .nextarrow:hover, #slider .prevarrow:hover {  color:#fff;}

/* Slider2 css here */
.sliderblock { margin-bottom:20px;}
#slider2 { position:relative; overflow:hidden; margin:0 auto; width:1024px; height:400px; text-align:center;}
#slider2 ul { position: relative; margin: 0;  height: 400px;}
#slider2 ul li { position: relative; display: block; float: left; margin: 0; padding: 0; width: 1024px; height: 400px;}
#slider2 .prevarrow2, #slider2 .nextarrow2 { position: absolute; top:50%; z-index: 999; display: block; width:50px; height:22px; padding:14px 0; margin-top:-25px; background:#2a2a2a; color: #fff;  text-decoration: none; font-size:30px; opacity: 0.8; cursor: pointer; }
#slider2 .prevarrow2:hover, #slider2 .nextarrow2:hover { opacity: 1; -webkit-transition: all 0.2s ease; -moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease; }
#slider2 .nextarrow2 { right: 0; }
#slider2 .nextarrow2:hover, #slider2 .prevarrow2:hover { background:#ff6138; color:#fff !important;}























@import "compass/css3";

// More practical CSS...
// using mobile first method (IE8,7 requires respond.js polyfill https://github.com/scottjehl/Respond)

$breakpoint-alpha: 480px; // adjust to your needs

.rwd-table {
  margin: 1em 0;
  min-width: 300px; // adjust to your needs
  
  tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    display: none; // for accessibility, use a visually hidden method here instead! Thanks, reddit!   
  }
  
  td {
    display: block; 
    
    &:first-child {
      padding-top: .5em;
    }
    &:last-child {
      padding-bottom: .5em;
    }

    &:before {
      content: attr(data-th)": "; // who knew you could do this? The internet, that's who.
      font-weight: bold;

      // optional stuff to make it look nicer
      width: 6.5em; // magic number :( adjust according to your own content
      display: inline-block;
      // end options
      
      @media (min-width: $breakpoint-alpha) {
        display: none;
      }
    }
  }
  
  th, td {
    text-align: left;
    
    @media (min-width: $breakpoint-alpha) {
      display: table-cell;
      padding: .25em .5em;
      
      &:first-child {
        padding-left: 0;
      }
      
      &:last-child {
        padding-right: 0;
      }
    }

  }
  
  
}


// presentational styling

@import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700';

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
  tr {
    border-color: lighten(#34495E, 10%);
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
      padding: 1em !important; 
    }
  }
  th, td:before {
    color: #dd5;
  }
}










table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}

























/* medical record */














</style>


</head> 
<body>      
        