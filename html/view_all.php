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

<?php 

?>
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
                                            
                                            $sql = "SELECT * from doctor";

                                            $result = query($sql);
                                            
                                            while($rows = fetching($result)){
                                                echo "<tr><td>" . $rows['dr_name']; 

                                                $strs = explode(' ', $rows['dr_name']);

                                                $strs2 =  strtoupper($strs[0][0] . $strs[1][0]);
                                                
                                                
                                    echo '<div class="d-flex align-items-center">';
                                    echo '<div class="m-r-10"><a class="btn btn-circle btn-info text-white">'.$strs2.'</a></div>';
                                    echo '<div class="">';
                                    echo '<h4 class="m-b-0 font-16">';
                                            
                                    echo '</h4>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</td>';
                                
                                    echo '<td>';
                                    echo '<label class="label label-danger">'. $rows['dr_clinic_address'] . '</label>';
                                    echo '</td>';
                                    echo '<td>'. $rows['dr_specialization'] . '</td>';
                                    echo '<td>'. $rows['dr_degree'] . '</td>';
                                    echo '<td>'. $rows['phone'] . '</td>';
                                    echo '<td>'. $rows['fees'] . '</td>';
                                    echo '<td>'. $rows['bio'] . '</td>';
                                    echo '<td>'.'<img with="80" height="80" src="'.$rows['img'].'" />' .'</td>';
                                    echo '<td>'. $rows['area'] . '</td>';
                                    echo '</tr>';
                        }
                        ?>    
                        </tbody>
                    </table>
                </div>