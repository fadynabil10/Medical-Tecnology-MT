
<div class="super_container" style="background-color: #f8f8f8;">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div><img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="#BestCare ">Best Care</a></li>
					<li><a href="#whych">Why choose us?</a></li>
          <li><a href="#Services">Services</a></li>
					<li><a href="#offers">Offers</a></li>
          <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
    
   <div class="container cont">
           <div class="row">
               <div class="row info">
                      <div class="col">
                            <img src="../images/person.png" style = 'width: 200px; height: 200px;'/>
                       </div>
                       <div class="col-9 inf">
                           <div class="row">
      

                           <?php
                             if(logged_in() && logged_in_role()){
                                $email = $_SESSION['email'];

                              $sql_test = "SELECT id from profile_patients where email = '".$email."' ";
                              $results = query($sql_test);
                                 while($something = fetching($results)){
                                    $something_id =  $something['id'];

                                }

      $sql_query_med_rec = "SELECT f_name, l_name, mobile, signup.email, gender, dob, dr_name, dr_specialization, date_of_exam from profile_patients 
      INNER JOIN medical_record ON profile_patients.id = medical_record.p_id
      INNER JOIN doctor ON medical_record.dr_id = doctor.id
      INNER JOIN signup ON profile_patients.id_signup = signup.id where medical_record.p_id = '".$something_id."' ";

      $result_q_med_rec = query($sql_query_med_rec);
        while($rows_q_med_rec = fetching($result_q_med_rec)){
          $f_name = $rows_q_med_rec['f_name'];
          $l_name = $rows_q_med_rec['l_name'];
          $email_rows = $rows_q_med_rec['email'];
          $gender_rows = $rows_q_med_rec['gender'];
          $dr_name_rows = $rows_q_med_rec['dr_name'];
          $dr_specialization_rows = $rows_q_med_rec['dr_specialization'];
          $date_of_exam_rows = $rows_q_med_rec['date_of_exam'];   
          $mobile_rows = $rows_q_med_rec['mobile'];
          $dob_rows = strtotime($rows_q_med_rec['dob']);
          // Current date and time
          $something_date = date("Y", $dob_rows);
         $last_dob = date("Y") - $something_date;
        }
}
?>

                            <h5>Name  <span id="">
                             <?php     echo $f_name . $l_name;
                             ?>
                             </span></h5>
                           </div>
                           <div class="row">
                            <h5>Gender <span id="" style="padding-left: 26px;"> <?php echo $gender_rows; ?></span></h5>
                           </div>
                           <div class="row">
                            <h5>Mobile <span id="" style="padding-left: 30px;"> <?php echo $mobile_rows; ?></span></h5>
                           </div>
                           <div class="row">
                            <h5>Age    <span id="" style="padding-left: 57px;"> <?php echo $last_dob; ?> </span> year</h5>
                           </div>
                       </div>
               </div>
           </div>
            <div class="row">
              <table class="table" style="background-color: #fff;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Doctor Name</th>
                        <!-- <th>Description</th> -->
                        <th>Specialization</th>
                        <th>Date</th>
                        <th>Show</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
  <?php
                      display_mr_report();
  ?>                  
                    </tbody>
              </table>
          </div>
    
    
</div>
    
