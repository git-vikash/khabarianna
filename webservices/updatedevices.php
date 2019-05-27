<?php
include 'dbConnect.php';

$relay1=$_REQUEST['relay1'];
$relay2=$_REQUEST['relay2'];
$door=$_REQUEST['door'];
$relay3=$_REQUEST['relay3'];
$relay4=$_REQUEST['relay4'];
 
     $sql = "UPDATE `home_automation` SET `relay1`='$relay1',`relay2`='$relay2' ,`relay3`='$relay3',`relay4`='$relay4',`door`='$door'";

	
	
$a=$conn->query($sql);


    if($a)
    {
    	echo "Updated";
    }
    else
    {
    	echo "some Error";
    }
     

$conn->close();





?>