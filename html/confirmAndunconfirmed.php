<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="medical tecnology">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/ico" href="../images/iconstwo.png" />
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/external-table-doctor.css">
<style>
    *{
    margin: 0;
    padding: 0;
}
.super_container{
    background-color: #f8f8f8;
}
.container-payment{
    height: 500px;
    margin-top: 180px;
}
.pay-box{
    height: 100px;
    padding: 0;
    margin: 0;
}
.main-row{
    padding: 0 10% 0 10%;
}
.p1 button,
.p2 button,
.p3 button,
.p4 button{
    width: 100%;
    border: none;
    cursor: pointer;
    padding-right: 10px;
}
.p1 button,
.p1{
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: none;
    outline: none;
    padding: 0px 5px;
    padding-right: 0;
}
.p2,
.p2 button{
    border: none;
    outline: none;
    padding: 0px 5px;
}
.p3,
.p3 button{
    border: none;
    outline: none;
    padding: 0px;

}

.p4 button,
.p4{
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border: none;
    outline: none;
    padding: 0px 5px;
}
.p1 img,
.p2 img,
.p3 img,
.p4 img{ 
    width: 100%;
    height: 100px;
    border-radius: 5px
}
.p1 img{
    padding-right: 5px
}
.p1,
{
    border-right: 1px solid #f8f8f8;
}
/**/
button {
  position: relative;
}
button::before, button::after {
  box-sizing: inherit;
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
}
/* blue border */
.draw {
  -webkit-transition: color 0.25s;
  transition: color 0.25s;
}

.draw::before, .draw::after {
  border: 2px solid transparent;
  border-radius: 5px;
  width: 0;
  height: 0;
}
.draw::before {
  top: 0;
  left: 0;
}
.draw::after {
  bottom: 0;
  right: 0;
}
.draw:hover {
  color: #1010ef;
  border-radius: 5px;
}
.draw:hover::before, .draw:hover::after {
  width: 100%;
  height: 100%;
}
.draw:hover::before {
  border-top-color: #1010ef;
  border-right-color: #1010ef;
  -webkit-transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
  transition: width 0.25s ease-out, height 0.25s ease-out 0.25s;
}
.draw:hover::after {
  border-bottom-color: #1010ef;
  border-left-color: #1010ef;
  -webkit-transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
  transition: border-color 0s ease-out 0.5s, width 0.25s ease-out 0.5s, height 0.25s ease-out 0.75s;
}



/* Page styling */

.buttons {
  isolation: isolate;
}

.form-img{
    position: absolute;
    top: 10%;
    left: 40%;
}
.form-img img{
    border: 2px solid red;
    width: 100px;
    height: 100px;
    overflow: hidden;
    border-radius: 30%;
    padding: 15px;

}
.form-inline{
    width: 100%;
}
    .modal-body h4{
        position: absolute;
        top: 55%;
        left: 25%;
    }
    </style>
</head>
<body>

<div class="super_container">
	
    
    <div class="container-payment">
        <div class="col-xl-">
            <div class="row main-row">
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#un" style="height: 100px; background-color: #333; color: #fff">Unconfirm</button>
                </div>
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#con" style="height: 100px; background-color: #333;color: #fff">Confirm</button>
                </div>
                <div class="col-3 pay-box p1 ">
                    <button id="myBtn" class="draw" type="button" data-toggle="modal" data-target="#book" style="height: 100px; background-color: #333;color: #fff">booking</button>
                </div>
            </div>
        </div>


<!--Forms-->
        <!-- unconfirm form -->
            <div class="modal fade" id="un" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 330px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img">
                            <img src="../images/X.png" style="">
                      </div>
                      <h4>The code is incorrect !!</h4>
                    </div>
                </div>
              </div>
            </div>
        
        <!-- End unconfirm form-->
        <!-- confirm form -->
            <div class="modal fade" id="con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="height: 330px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                      <span aria-hidden="true" style='outline: none'>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="form-img" >
                            <img src="../images/correct.png" style="border: 2px solid #57ccc3">
                      </div>
                      <h4 style="top: 55%;left: 15%;">The code has been confirmed</h4>
                    </div>
                </div>
              </div>
            </div>
        
        <!-- End confirm form-->
        <!------------->
        <div class="modal fade" id="book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog md" role="document">
                    <div class="modal-content m-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style='outline: none'>
                          <span aria-hidden="true" style='outline: none'>&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <div class="row time-table-column">
                                <div class="col-sm">
                                    <div class='sub-table'>
                                        <div class="sub-col-title">
                                            <p class="sub-col-text">Today</p> 
                                        </div>
                                        <div class="time-content">
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-booked booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-booked booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-booked booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-booked booked' id='btn-booked' onclick='cl()'><span id="btn-text">Booked</span></button>
                                            </div>


                                        </div>

                                    </div>                        
                                 </div>
                                <div class="col-sm">
                                    <div class='sub-table'>
                                        <div class="sub-col-title">
                                            <p class="sub-col-text">Tomorrow</p> 
                                        </div>   
                                        <div class="time-content">
                                             <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                        </div>
                                    </div>

                                 </div>
                                <div class="col-sm">
                                    <div class='sub-table'>
                                        <div class="sub-col-title">
                                            <p class="sub-col-text">Wed 23/3</p> 
                                        </div> 
                                        <div class="time-content">
                                             <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                        </div>
                                    </div>                        
                                 </div>
                                 <div class="col-sm">
                                    <div class='sub-table'>
                                        <div class="sub-col-title">
                                            <p class="sub-col-text">Tus 12/3</p> 
                                        </div>
                                        <div class="time-content">
                                             <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                            <div>
                                                <h6 class="t-clo">12:00 PM</h6>
                                                <button class='btn-book booked' id='btn-booked' onclick='cl()'><span id="btn-text">Book</span></button>
                                            </div>
                                        </div>
                                    </div>                        
                                 </div>
                              </div>      
  
       
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    
    
	

    <!--End container-->

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
<script src="../js/custom.js"></script>

<script>
   function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

</body>
</html>