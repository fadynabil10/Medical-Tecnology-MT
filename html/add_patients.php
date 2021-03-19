
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

	

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

	
		<?php //insert_patients(); ?>
							
		</div>
	</div>



    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
							<h1 style='margin-left:18px;'>Add Patients</h1>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="POST" role="form" style="display: block;" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" name="p_name" id="email" tabindex="1" class="form-control" placeholder="patient Name">
									</div>

									<div class="form-group">
										<input type="tel" name="p_phone" id="email" maxlength="12" tabindex="1" class="form-control" placeholder="patient Phone">
									</div>

									<div class="form-group">
										<input type="text" name="p_address" id="email" tabindex="1" class="form-control" placeholder="patient Address">
									</div>

									<div class="form-group">
										<input type="date" name="p_dob" id="email" tabindex="1" class="form-control" placeholder="patient Dob">
									</div>

									<div class="form-group">
										<input type="text" name="p_status" id="email" tabindex="1" class="form-control" placeholder="patient Status">
									</div>


									<div class="form-group">
										<input type="file" name="img_p" id="email" tabindex="1" class="form-control" placeholder="Email">
									</div>

									<!-- <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div> -->


									<div class="form-group">
										<input type="tel" name="p_nid" id="email" maxlength="14" tabindex="1" class="form-control" placeholder="patient National ID">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Insert Patients">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="recover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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