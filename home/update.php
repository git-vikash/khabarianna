<?php


include_once('dbconnect.php');

							 error_reporting(0);
							 
							 
							 //$id=$_REQUEST['id'];
							 
							 $relay1=$_REQUEST['relay1'];
							 
							 $relay2=$_REQUEST['relay2'];
							 
							 $switch1=$_REQUEST['switch1'];
							 
							 $switch2=$_REQUEST['switch2'];
							 
							 $temp=$_REQUEST['temp'];
							 
							 $humidity=$_REQUEST['humidity'];
							 
							 $pir=$_REQUEST['pir'];
							 
							 $gas_reading=$_REQUEST['gas_reading'];
							 
							 $water_flow=$_REQUEST['water_flow'];
							 
						
							 
							
							 
						 $query="UPDATE `home_automation` SET `relay1` = '$relay1', `relay2` = '$relay2', `switch1` = '$switch1', `switch2` = '$switch2', `temp` = '$temp', `humidity` = '$humidity', `pir` = '$pir', `gas_reading` = '$gas_reading', `water_flow` = '$water_flow' WHERE `id` = '1'"; 
			 
			 //		echo $query;
			
				// 	exit;
						
							$data=mysqli_query($conn,$query);
							
							if ($data) {
            
                                        $val['responce']="Record UPDATE successfully";
            
                                         } 
			
										 else 
			
										 {
            
                                          $val['responce']="Error ";
            
                                         }

                 print_r(json_encode($val));

?>
