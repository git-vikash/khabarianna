
<?php
include_once('dbconnect.php');


// $id1=$_REQUEST['id'];

    $sel=mysqli_query($conn,"SELECT * FROM `home_automation`  WHERE `id` = '1';"); 
    //echo "hello".mysqli_num_rows($sel);
						  if(mysqli_num_rows($sel)>0)
						  {
							  while($fet=mysqli_fetch_assoc($sel))
							  {
							 
								//   $val['Devicename']=$fet['id'];
								  $val['data'][]=$fet;
								  
							  }
						  }
							  else
							  {
								   $val['responce']="no record available";
							  }
						  print_r(json_encode($val));
						   


?>