<?php
						include_once('dbConnect.php');

							error_reporting(0);
							
							
							 //$id=$_REQUEST['id'];
							 $device_name=$_REQUEST['device_id'];
							 $air=$_REQUEST['air'];
							 $water_pump=$_REQUEST['water_pump'];
							 $water_control=$_REQUEST['water_control'];
							 $sound=$_REQUEST['sound'];
							 
						
							 
							
							 
						 $query="INSERT INTO `iot_air_n_sound`(`device_id`, `air`, `sound`, `water_pump`, `water_control`)VALUES ('$device_name','$air','$sound','$water_pump','$water_control')"; 
				// 	/echo $query;
				// 	exit;
						
							$data=mysqli_query($con,$query);
							
							if ($data) {
                                        $val['responce']="Record Inserted successfully";
                                         } 
										 else 
										 {
                                          $val['responce']="Error ";
                                         }

                 print_r(json_encode($val));
                            ?> 
							
							