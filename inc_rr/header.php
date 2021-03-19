

        <!-- start Header -->

        <header class="header trans_400" id="headerlogo">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

               	<!-- Logo -->
                <div class="logo">
                    <a href="index.php">
                        <div><img src="../images/logoheader.png" title="medical tecnology logo" style="height: 81%"></div>
                    </a>
                </div>

               <!-- Main Navigation -->
                <nav class="main_nav" style="margin-left: 55px">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="corona.php">Health awareness</a></li>
                        <li><a href="index.php#BestCare">Best Care</a></li>
                        <li><a href="index.php#whych">Why choose us?</a></li>
                        <li><a href="index.php#Services">Services</a></li>
                        <li><a href="index.php#offers">Offers</a></li>
                        <li><a href="#Contactus">Contact us</a></li>

                    </ul>
                </nav>

                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
                <?php

$sql_get_pic = "SELECT * from doctor where id = '".$_GET['dr_id']."' ";
$query_get_pic = query($sql_get_pic);
$fetching_get_pic = fetching($query_get_pic);
$get_pics = $fetching_get_pic['img'];
?>

                      <div class="dropdown">

                        
                        <img src="<?php echo $get_pics; ?>" onclick="myFunction()" class="dropbtn"/>
                        <div id="myDropdown" class="dropdown-content">
                        
                        
                        <a href="./profile_doctor_edit.php?id=<?php echo $_GET['dr_id']; ?>">Update Profile doctor</a> 
                        <a href="./profile_doctor.php?id=<?php echo $_GET['dr_id']; ?>"> Profile doctor</a>  
 
                        <!-- <a href="./Book-index.php?p_id='.$id3.'">Make appointment</a>  
                        <a type="button" href="./confirm_booking.php?p_id='.$id3.'">Cancel appointment</a>   -->
                        <!-- <a type="button" href="./medical_record.php?id=<?php //echo $_GET['dr_id']; ?>">My Medical Record</a>   -->
                        <a href="../html/logout.php">logout</a>  
                        
                        </div>
                       </div>
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
