<?php
include 'dbConnect.php';

$starttime=$_REQUEST['starttime'];
$endtime=$_REQUEST['endtime'];


echo     $sql = "UPDATE `schedualing` SET `starttime`='$starttime',`endtime`='$endtime'";

	
	
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