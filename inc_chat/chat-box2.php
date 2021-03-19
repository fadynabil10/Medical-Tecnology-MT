<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="medical tecnology">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="../images/iconstwo.png" />
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/responsive.css">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Modal Content/Box */
        .modal-content {
          background-color: #f42323;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
          height: 500px;
        }
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
        .d{
            background-color:#ef1158;
            border-radius:5px;
            border: none;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:17px;
            padding:15px 25px;
            text-decoration:none;
            text-shadow:0px 1px 0px #2f6627;
            float: right;
        }
       
        .modal {
          display: none; 
          position: fixed; 
          z-index: 1; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%; 
          overflow: hidden;
          background-color: rgba(0,0,0,0.1); 
          padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; 
          border: 1px solid #888;
          width: 85%; 
        }

        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        .slideshow-container {
          position: relative;
          background: #f1f1f1f1;
          height: 100%;
        }

        /* Slides */
        .mySlides {
          display: none;
          padding: 80px;
          text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          margin-top: -30px;
          padding: 16px;
          color: #888;
          font-weight: bold;
          font-size: 20px;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          position: absolute;
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
          color: white;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            background: #ddd;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */
        .active, .dot:hover {
          background-color: #717171;
        }

        /* Add an italic font style to all quotes */
        q {font-style: italic;}

        /* Add a blue color to the author */
        .author {color: cornflowerblue;}
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
    </style>
</head>
<body>

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.php">
					<div><img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			
            <!--- button ---->
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto d">
                <a href="#" class="myButton1" style="color: #fff;" onclick="document.getElementById('id01').style.display='block'">View Medical Record</a>
            </div>
        </div>
	</header>
                <!--- modal ---->

    <div id="id01" class="modal">
        
      <div class="modal-content animate">
           <div class="slideshow-container">

            <div class="mySlides">
              
                <table>
                  <tr>
                    <th>#</th>
                    <th>Doctor name</th>
                    <th>Describtion</th>
                    <th>Medicines</th>
                    <th>Patient name</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>

                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>  
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>

                  </tr>
                  <tr>
                    <td>5</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>

                  </tr>
                  <tr>
                    <td>6</td>
                    <td><a href="#">d name</a></td>
                    <td>Germany</td>
                    <td>Maria Anders</td>
                    <td><a href="#">P name</a></td>
                    <td><a href="#">view</a></td>
                  </tr>
                </table>

            </div>

          
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            </div>

            <div class="dot-container">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

      </div>
       
      
    </div>
    <!-- end  Header -->


	<!-- start Home -->
	<div style="margin-top: 165px;">
    <iframe  id="chat" src="chat-form.html" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="900px"></iframe>

    </div>


    <!--End container-->
    
    
    
    
    
    
    
    
    
    
    
    <!--pop up-->

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    
    
    
    
    
    <!-- slideshow --->
    
    
    <script>
       
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
</div>
</body>
</html>