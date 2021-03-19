<?php //include('../cred/init.php'); ?>


                                
<?php 


if(isset($_GET['id'])){
    global $id_sch;
    $id_sch = $_GET['id'];

}else{
    $id_sch= '';
}







$sql_sch = "SELECT * from doctor where id = '".$id_sch."' ";
$query_sch = query($sql_sch);

while($get_sch = fetching($query_sch)){
    $dr_day_1_sch = $get_sch['day_1'];
    $dr_day_2_sch = $get_sch['day_2'];
    $dr_day_3_sch = $get_sch['day_3'];


    /***********     Day 1  *****/
    $dr_day_exploding = explode("T", $dr_day_1_sch);

    $date_dr = $dr_day_exploding[0]; //date
    $time_dr = $dr_day_exploding[1]; //time

    $time_dr_gia_1 =  date('g:ia', strtotime($time_dr)) . "</p><br><br>";
            

            $unixts = strtotime($date_dr);
            $dow_dr = date("l", $unixts);

    /***********     Day 2  *****/

            $dr_day_exploding2 = explode("T", $dr_day_2_sch);

            $date_dr2 = $dr_day_exploding2[0]; //date
            $time_dr2 = $dr_day_exploding2[1]; //time
        
                    
            $time_dr_gia_2 =  date('g:ia', strtotime($time_dr2)) . "</p><br><br>";

        
                    $unixts2 = strtotime($date_dr2);
                    $dow_dr2 = date("l", $unixts2);
                    
                    

                        /***********     Day 3  *****/


                    $dr_day_exploding3 = explode("T", $dr_day_3_sch);

    $date_dr3 = $dr_day_exploding3[0]; //date
    $time_dr3 = $dr_day_exploding3[1]; //time


            $unixts3 = strtotime($date_dr3);
            $dow_dr3 = date("l", $unixts3);


            $time_dr_gia_3 =  date('g:ia', strtotime($time_dr3)) . "</p><br><br>";

}


 


$sql_sch_checking = "SELECT * from schedual where dr_id = '".$id_sch."' ";

$query_sch_checking = query($sql_sch_checking);

while($fetching_sch_checking = fetching($query_sch_checking)){

    $sch_date = $fetching_sch_checking['sch_date'];
    $sch_day = $fetching_sch_checking['sch_day'];
    $sch_time = $fetching_sch_checking['sch_time'];

    $sch_time_gia = date('g:ia', strtotime($sch_time));
    // Doctor table -->
    echo '<div class="modal fade" id="book" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">';
                      echo '<div class="modal-dialog md-ex" role="document">';
                        echo '<div class="modal-content m-content-ex">';
                          echo '<div class="modal-header">';
                            echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none">';
                             echo ' <span aria-hidden="true" style="outline: none">&times;</span>';
                            echo '</button>';
                          echo '</div>';
                          echo '<div class="modal-body">';
                              echo '<div class="row time-table-column">';

echo "    <div class='col-sm>";
echo "   <div class='sub-table-ex'>";
echo "    <div class='sub-col-title-ex'>";
echo            "<p class='sub-col-text-ex'>$dow_dr</p>"; 
echo        "</div> ";
echo        "<div class='time-content-ex'>";
            //  echo "<div>";
                echo "<h6 class='t-clo'>$time_dr</h6>";

                
                    if($sch_date == $date_dr || $sch_day == $dow_dr || $sch_time_gia == $time_dr_gia_1){
                        echo "OK!";
                        echo "<button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }else{

                        echo "<button class='btn-book-ex' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }   
                
           echo" </div>";



    echo"        <div class='sub-col-title-ex'>";
                echo "<p class='sub-col-text-ex'>$date_dr</p>"; 
            echo "</div>";
            

   echo "  </div>";
    echo "</div>";                        
 echo "</div>";

// //**************************************************************** *

 echo "    <div class='col-sm>";
echo "   <div class='sub-table-ex'>";
echo "    <div class='sub-col-title-ex'>";
echo            "<p class='sub-col-text-ex'>$dow_dr2</p>"; 
echo        "</div> ";
echo        "<div class='time-content-ex'>";
            //  echo "<div>";
                echo "<h6 class='t-clo'>$time_dr2</h6>";

                
                    if($sch_date == $date_dr2 || $sch_day == $dow_dr2 || $sch_time_gia == $time_dr_gia_2){
                        echo "OK!";
                        echo "<button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }else{

                        echo "<button class='btn-book-ex' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }   
                
           echo" </div>";



    echo"        <div class='sub-col-title-ex'>";
                echo "<p class='sub-col-text-ex'>$date_dr2</p>"; 
            echo "</div>";
            
         


   echo "  </div>";
    echo "</div>";                        
 echo "</div>";


// //**************************************************** */




echo "    <div class='col-sm>";
echo "   <div class='sub-table-ex'>";
echo "    <div class='sub-col-title-ex'>";
echo            "<p class='sub-col-text-ex'>$dow_dr3</p>"; 
echo        "</div> ";
echo        "<div class='time-content-ex'>";
            //  echo "<div>";
                echo "<h6 class='t-clo'>$time_dr3</h6>";

                
                    if($sch_date == $date_dr3 || $sch_day == $dow_dr3 || $sch_time_gia == $time_dr_gia_3){
                        echo "OK!";
                        echo "<button class='btn-booked-ex booked' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }else{

                        echo "<button class='btn-book-ex' id='btn-booked' onclick='cl()'><span id='btn-text'>Booked</span></button>";
                    }   
                
           echo" </div>";



    echo"        <div class='sub-col-title-ex'>";
                echo "<p class='sub-col-text-ex'>$date_dr3</p>"; 
            echo "</div>";
            
         


   echo "  </div>";
    echo "</div>";                        
 echo "</div>";




}

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";  
?>



                                
                     
         
                                        
  







