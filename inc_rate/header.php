
        <!-- start Header -->

        <header class="header trans_400" id="headerlogo">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
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
    <div class="container-rating">
        <div class="row">
            <div class="col-12">
                <div class="feedback-main" style="background-color: #fff">
                    <div class="feedback-sub" style="background-color: #fff">

                    
                        <form class="rating" id="product1" method="POST">

                            <button type="submit"   class="star" id="star1"  name="rate1" data-star="1" onclick="myFunction1()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">1 Star</span>

                            </button>
                            <button type="submit"  class="star" id="star2" name="rate2" data-star="2" onclick="myFunction2()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">2 Stars</span>
                            </button>
                            <button type="submit"   class="star" id="star3" name="rate3" data-star="3" onclick="myFunction3()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">3 Stars</span>
                            </button>
                            <button type="submit"  class="star"  id="star4" name="rate4" data-star="4" onclick="myFunction4()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">4 Stars</span>
                            </button>
                            <button type="submit"   class="star" id="star5" name="rate5" data-star="5" onclick="myFunction5()">
                                <span aria-hidden="true">&#9733;</span>
                                <span class="screen-reader">5 Stars</span>
                            </button>

                            <div class="form-group">
                                <textarea style = 'width:95%;'class="form-control" id="exampleFormControlTextarea1" rows="3" name="testimonial"><?php echo "<h1>" . $something. "</h1>"; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-myapp" name="send_rate" style='outline: none;width: 55%;margin-top: 10px;padding: 15px 0 15px 0;background-color: rgb(89,205,196);border: none;text-align: center; margin-left: 18%;'>Send</button>
                        </form>
                        
                    </div>
                    <form class="rating-btn" id="product1" style="position: absolute; top: 68%; left: 18%; right: 0; bottom: 0;">
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(89,205,196); border: none;'>Back to Profile</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-myapp" style='outline: none; width: 80%; margin-top: 10px; padding: 15px 0 15px 0; background-color: rgb(237,20,91); border: none;'>View Report</button>
                    </form>
                </div>
            
            </div>
        
        </div>


<?php 

if(isset($_POST['send_rate'])){

  $something =
    "<script>
    function myFunction1(){
    var x = document.querySelector('#star1');
    var something = x.getAttribute('aria-pressed'); 
     if (something == 'true') 
    {
     alert(1);
    }
        
  }    

  function myFunction2(){
  var x = document.querySelector('#star2');
  var something = x.getAttribute('aria-pressed'); 
    if (something == 'true') 
    {
         alert(2);
    }
  }   


  function myFunction3(){
   var x = document.querySelector('#star3');
   var something = x.getAttribute('aria-pressed'); 
    if (something == 'true') 
    {
        alert(3);

    }
        
  }  

  function myFunction4(){
   var x = document.querySelector('#star4');
   var something = x.getAttribute('aria-pressed'); 
    if (something == 'true') 
     {
        alert(4);
    }
        
  }  

  function myFunction5(){
   var x = document.querySelector('#star5');
   var something = x.getAttribute('aria-pressed'); 
    if (something == 'true') 
    {
        alert(5);
    }
        
 }   
  </script>";
     echo $something;
}
?>