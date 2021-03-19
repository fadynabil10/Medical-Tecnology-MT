
<?php

// include('./inc/head.php');

// include('./cred/init.php');

// include('./inc/nav.php');
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
	/* 
			Up to you which header to send, some prefer 404 even if 
			the files does exist for security
			*/
			header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

			/* choose the appropriate page to redirect users */
			die( header( 'location: login.php' ) );

		}

?>
	 
<div class="container">


	
<?php 
update_doctor();
?>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

	
        <?php 


        if(isset($_GET['id'])){
            $id_edit_doctor  = $_GET['id'];
        }else{
            $id_edit_doctor = '';
        }
        
            $sql = "SELECT * from doctor where id = '".$id_edit_doctor."' ";
            $result_doctor = query($sql);
            while($rows_doctor = fetching($result_doctor)){
                $dr_name = $rows_doctor['dr_name'];
                $dr_clinic_address = $rows_doctor['dr_clinic_address'];
                $dr_specialization = $rows_doctor['dr_specialization'];
                $dr_degree = $rows_doctor['dr_degree'];
                $phone = $rows_doctor['phone'];
                $fees = $rows_doctor['fees'];
                $bio = $rows_doctor['bio'];
                $img = $rows_doctor['img'];
                $area = $rows_doctor['area'];
				$dr_day_1 = $rows_doctor['day_1'];
				$dr_day_2 = $rows_doctor['day_2'];
				$dr_day_3 = $rows_doctor['day_3'];

            }
        
        ?>
							
		</div>
	</div>



    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
							<h1>Edit Doctors Information</h1>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="POST" role="form" style="display: block;" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" name="dr_name" value="<?php echo $dr_name; ?>" id="email" tabindex="1" class="form-control" placeholder="Doctor Name">
									</div>

									<div class="form-group">
										<input type="tel" name="dr_clinic_address" value="<?php echo $dr_clinic_address; ?>" id="email" maxlength="12" tabindex="1" class="form-control" placeholder="Doctor Address">
									</div>

									<div class="form-group">
										<input type="text" name="dr_specialization" value="<?php echo $dr_specialization; ?>" id="email" tabindex="1" class="form-control" placeholder="Doctor Specialization">
									</div>

									<div class="form-group">
										<input type="text" name="dr_degree" id="email" value="<?php echo $dr_degree; ?>" tabindex="1" class="form-control" placeholder="Doctor Degree">
									</div>

									<div class="form-group">
										<input type="text" name="phone" id="email" value="<?php echo $phone; ?>" tabindex="1" class="form-control" placeholder="Doctor Phone">
									</div>


									<div class="form-group">
										<input type="number" name="fees" id="email" value="<?php echo $fees; ?>" tabindex="1" class="form-control" placeholder="Fees">
									</div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" placeholder="Doctor Bio Description" rows="3"><?php echo $bio; ?></textarea>
                                    </div>


                                    <div class="form-group">
										<input type="file" name="img" id="email" tabindex="1" class="form-control" value="<?php echo $img; ?>" placeholder="Doctor Image">
                                        <img src="<?php echo $img; ?>" alt="" width="80" height="80">
									</div>
									<!-- <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div> -->
                                    


                                    <div class="form-group">
									<input type="datetime-local" class="form-control"  value="<?php $day_1_date = date("y-m-d H:M:S"); echo $day_1_date; ?>" name="day_1" />
									</div>


                                    <div class="form-group">
									<input type="datetime-local" class="form-control"  value="<?php $day_2_date = date("y-m-d H:M:S"); echo $day_2_date; ?>" name="day_2" />
									</div>

									<div class="form-group">
									<input type="datetime-local" class="form-control"  value="<?php $day_3_date = date("y-m-d H:M:S"); echo $day_3_date; ?>" name="day_3" />
									</div>

                                    <div class="form-group">
										<input type="text" name="area" id="email" tabindex="1" class="form-control"  value="<?php echo $area; ?>" placeholder="Doctor Area">
									</div>
                                    
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="update_doctor" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Update Doctor">
											</div>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


</body>
</html>