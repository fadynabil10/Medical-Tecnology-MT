
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

	
		<?php 
		
		
		admin_add_user();

		


		
		
		
		
		?>
							
		</div>
	</div>



    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
								<h1 style='margin-left:18px;'>Add User</h1>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="POST" role="form" style="display: block;">
									

									<div class="form-group">
										<input type="text" name="dr_username" id="email" tabindex="1" class="form-control" placeholder="username">
									</div>

									<div class="form-group">
										<input type="password" name="dr_password" id="email" tabindex="1" class="form-control" placeholder="Password">
									</div>


									<div class="form-group">
										<select class="form-control" name="role_name">
											<option value="">Select Role</option>
											<option value="doctor">doctor</option>
											<option value="pharmacian">pharmacian</option>
											<option value="admin">admin</option>		
										</select>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" id="login-submit" name="add_new_dr" tabindex="4" class="form-control btn btn-login" value="Add User">
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