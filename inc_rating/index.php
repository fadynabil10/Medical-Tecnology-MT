<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Star Rating</title>
<link type="text/css" rel="stylesheet" href="../inc_rating/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

<?php 
$id3 = $_GET['p_id'];



$sql_pico = "SELECT * from profile_patients where id = '".$id3."' ";
$query_pico = query($sql_pico);
$fetching_pico = fetching($query_pico);
$get_pico = $fetching_pico['img'];
?>
<!-- start Header -->

<header class="header trans_400" id="headerlogo">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

              <!-- Logo -->
			<div class="logo">
				<a href="index.php">
					<div><img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav" style="margin-left:5%;">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
                    <li><a href="corona.php">Health awareness</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
                    <li><a href="#Services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                
                <div class="dropdown">
                    
                  <img src="<?php echo $get_pico; ?>" onclick="myFunction()" class="dropbtn"/>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="./profile_patient.php?id=<?php echo $id3; ?>">Profile Patients</a>  
                    <a href="./Book-index.php?p_id=<?php echo $id3; ?>">Make appointment</a>  
                    <a type="button" href="./medical_record.php?id=<?php echo $id3; ?>">My Medical Record</a>  
                    <a href="../html/logout.php">logout</a>  
                  </div>
                </div>

            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>

            </div>
        </header>


<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                
                <div class="dropdown">
                    
                  <img src="../images/person.png" onclick="myFunction()" class="dropbtn"/>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="./profile_patient.php?id='.$id3.'">Profile Patients</a>  
                    <a href="./Book-index.php?p_id='.$id3.'">Make appointment</a>  
                    <a type="button" href="./confirm_booking.php?p_id='.$id3.'">Cancel appointment</a>  
                    <a type="button" href="./medical_record.php?id='.$id3.'">My Medical Record</a>  
                    <a href="../html/logout.php">logout</a>  
                  </div>
                </div>

            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>

            </div>
        </header>
    <div class="container-rating" style="height:auto">
        <div class="row">
            <div class="col-12">
                <div class="feedback-main" style="background-color: #fff;border:none;">
                    
                    


<!-- <h1 style="text-align:center; color:#fff; margin:50px; margin-bottom:10px; font-size:36px">Star Rating System Using PHP,Ajax</h1>
<p style="text-align:center; color:#fff;font-size:20px; margin:0px">Including Update Rating</p> -->
<?php  

$p_id = $_GET['p_id'];

$dr_id = $_GET['dr_id'];

// $post_id = '1'; // yor page ID or Article ID

    // $comment_rate = $_POST['comment'];


    

    $sql_convert_get_post = "SELECT * from profile_patients where id = '".$p_id."' ";
    $query_convert_get_post = query($sql_convert_get_post);
    $fetching_convert_get_post = fetching($query_convert_get_post);
    $get_convert_get_post = $fetching_convert_get_post['id'];


    $sql_convert_get_post_doctor = "SELECT * from doctor where id = '".$dr_id."' ";
    $query_convert_get_post_doctor = query($sql_convert_get_post_doctor);
    $fetching_convert_get_post_doctor = fetching($query_convert_get_post_doctor);
    $get_convert_get_post_doctor = $fetching_convert_get_post_doctor['id'];



    
    // if(logged_in()){
    //     echo $_SESSION['session_id'];

    // }
    // $p_id = $_POST['p_id']; // yor page ID or Article ID
    // $dr_id = $_POST['dr_id'];

    
    // $connection2 = mysqli_connect("localhost", "root", "", "medical_tec");

?>
<!-- <form action="" method="POST"> -->
<div class="container" style='height:420px;box-shadow:5px 5px 3px 2px #888'>
	<div class="rate" >
		    <div id="1" class="btn-1 rate-btn" style='width:44px;'></div>
        <div id="2" class="btn-2 rate-btn"style='width:44px;'></div>
        <div id="3" class="btn-3 rate-btn"style='width:44px;'></div>
        <div id="4" class="btn-4 rate-btn"style='width:44px;'></div>
        <div id="5" class="btn-5 rate-btn"style='width:44px;'></div>
	</div>

    <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1">Leave Comment</label>
    <textarea class="form-control" name='comment' id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> -->

  <!-- <button type="submit" class="btn btn-primary mb-2">Leave Comment</button> -->
    <!-- </form> -->
<br>
    <div class="box-result">
    	<?php
        	$query = query("SELECT * FROM star"); 
            	while($data = fetching($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        ?>
    <div class="result-container">
    	<div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of <?php echo $rate_times; ?> Review(s)</p>
    </div>
</div>

<script>
$(function(){ 
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
    var comment = $('#exampleFormControlTextarea1').val();
   var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });
                           
   $('.rate-btn').click(function(){    
      var therate = $(this).attr('id');

      
      var dataRate = 'act=rate&p_id=<?php echo $get_convert_get_post; ?>&dr_id=<?php echo $get_convert_get_post_doctor; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "../inc_rating/ajax.php",
    //   data: dataRate,
      data : dataRate,
      success:function(){}
    });


   
  });

});
</script>

                    <form class="rating-btn" id="product1" style="position: absolute; top: 60%; left: 18%; right: 0; bottom: 0;">
                        <!--<a type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;' href='<?php echo "http://localhost/group_project/medicaltecnology-project/mt/html/profile_patient.php?id=$p_id"; ?>'>Back to Profile</a>-->
                        <a type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: -20px; padding: 15px 0 15px 0; background-color: rgb(237,20,91); border: none;'href='<?php echo "http://localhost/group_project/medicaltecnology-project/mt/html/medical_record.php?id=$p_id&id=$dr_id"; ?>'>View Report</a>
                    </form>
                </div>
            
            </div>
        
        </div>
















<!-- 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
<script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
</body>
</html>
