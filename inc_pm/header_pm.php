

<div class="super_container">
	
	<!-- start Header -->

	<header class="header trans_400" id="headerlogo">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="index.html">
					<div>
                        <img src="../images/logoheader.png" title="medical tecnology logo"></div>
				</a>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html#BestCare">Best Care</a></li>
					<li><a href="index.html#whych">Why choose us?</a></li>
                    <li><a href="index.html#Services">Services</a></li>
					<li><a href="index.html#offers">Offers</a></li>
                    <li><a href="#Contactus">Contact us</a></li>

				</ul>
			</nav>
            
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                <div class="button header_button b2">
                    <a href='#'>logout</a>
                </div>
            <!-- Hamburger main icon display when minimize size of screen  -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
            
		</div>
	</header>
    
    <div class="container-payment">
        <div class="col-xl-">
            <div class="row main-row">
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#visa"><img src="../images/1.png"/></button>
                </div>
                <div class="col-3 pay-box p2">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#paypal" class="draw-p2"><img src="../images/2.png"/></button>
                </div>
                <div class="col-3 pay-box p3">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#vod" class="draw-p3"><img src="../images/3.png"/></button>

                </div>
                <div class="col-3 pay-box p4">
                    <button id="myBtn" type="button" data-toggle="modal" data-target="#fawry" class="draw-p4" style="padding: 0;"><img src="../images/f.jpg" style='width: 100%;'/></button>
                </div>
            
            </div>
        </div>


<!--Forms-->
        <!-- visa form -->
            <div class="modal fade" id="visa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 600px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/1.png">
                      </div>
                      <form>
                      <div class="form-group">
                        <label>Name in Card</label>
                        <input type="text" class="form-control" placeholder="Enter name" style='outline: none'>
                      </div>
                      <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" style='outline: none' onkeypress='validate(event)'>
                        <small class="form-text text-muted">We'll never share your card number with anyone else.</small>
                      </div>

                          <!----->
                           <form class="form-inline">
                                <div class="partone pt">
                                  <label style='font-weight: 600'>Expiration</label>
                                  <input type="text" class="form-control form-control-part" placeholder="MM/YY" style='outline: none'>
                                </div>
                                <div class="parttwo pt">
                                  <label style='font-weight: 600'>Cvv</label>
                                  <input type="text" class="form-control form-control-part" placeholder="311" maxlength="3" style="width: 50%; outline: none;" onkeypress='validate(event)'>
                                </div>
                            </form>
                           <div class="pay-amount">
                            <p>Total : <span id='amount'>120</span> EGP</p>
                           </div>

                      </form>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Pay</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End visa form-->
        <!-- paypal form -->
            <div class="modal fade" id="paypal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 500px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/2.png">
                      </div>
                      <form>
                      <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" style='outline: none' onkeypress='validate(event)'>
                        <small class="form-text text-muted">We'll never share your card number with anyone else.</small>
                      </div>

                          <!----->
                           <form class="form-inline">
                                <div class="partone pt">
                                  <label style='font-weight: 600'>Expiration</label>
                                  <input type="text" class="form-control form-control-part" placeholder="MM/YY" style='outline: none'>
                                </div>
                                <div class="parttwo pt">
                                  <label style='font-weight: 600'>Cvv</label>
                                  <input type="text" class="form-control form-control-part" placeholder="311" maxlength="3" style="width: 50%; outline: none;" onkeypress='validate(event)'>
                                </div>
                            </form>
                           <div class="pay-amount">
                            <p>Total : <span id='amount'>120</span> EGP</p>
                           </div>

                      </form>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Pay</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End visa form-->
        <!-- vodiphone form -->
            <div class="modal fade" id="vod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 315px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 0px;">
                      
                      <form>
                          <div class="part-T">
                              <div class="form-group">
                                <input type="text" readonly class="form-control" value="01121378325">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Enter confirm code" style='outline: none' onkeypress='validate(event)'>
                              </div>
                            </div>
                      </form>
                      <div class="part-O">
                            <img src="../images/3.png" style="width: 100%;">
                      </div>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Confirm</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End vodaphone form-->
        <!-- fawry form -->
              <div class="modal fade" id="fawry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 315px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 0px;">
                      
                      <form>
                          <div class="part-T">
                              <div class="form-group">
                                <input type="text" readonly class="form-control" value="01121378325">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Enter confirm code" style='outline: none' onkeypress='validate(event)'>
                              </div>
                            </div>
                      </form>
                      <div class="part-O">
                            <img src="../images/f.jpg" style="width: 100%; padding-left: 10px;">
                      </div>

                    </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none'>Confirm</button>
                  </div>
                </div>
              </div>
            </div>
        <!-- End fawry form-->
        </div>
    </div>