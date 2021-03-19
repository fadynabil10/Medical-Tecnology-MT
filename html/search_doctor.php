
<?php
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
delete_doctor();
?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3"></div>
	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
							<h1>Search Doctor</h1>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="POST" role="form" style="display: block;" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" name="dr_name" id="email" tabindex="1" class="form-control" placeholder="Doctor Name">
									</div>														
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="search_doctor" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Search Doctor">
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
    <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Doctor Name</th>
                                <th class="border-top-0">Doctor Address</th>
                                <th class="border-top-0">Doctor dr Speciality</th>
                                <th class="border-top-0">Doctor Degree</th>
                                <th class="border-top-0">Doctor Phone</th>
                                <th class="border-top-0">Doctor Vezita</th>
                                <th class="border-top-0">Doctor Bio</th>
                                <th class="border-top-0">Doctor Image</th>
                                <th class="border-top-0">Doctor Area</th>

                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                                            
											search_doctor();
											
                        ?>   
                        </tbody>
                    </table>
                </div>	
    </body>
</html>