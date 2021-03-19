

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




    <form action="" method="POST">
       <div class="container-write">
            <div class="col-12 content">
            <p><?php medical_record(); ?></p>

                <div class="col-12 cw" style="border: 1px solid #333;">
                    <div class="title">
                        <p>Description</p>
                    </div>
                    <textarea class="text" placeholder='Write the Description Here' name="description"></textarea>
                </div>
                <div class="col-12 cw" style="border: 1px solid #333">
                    <div class="title">
                        <p>Medicines</p>
                    </div>
                    <textarea class="text" placeholder='Write the Medicines Here' rows ='0' name="medicines"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-w" name="confirm_mr" >Confirm</button>

            </div>      
        </div>
    </form>
