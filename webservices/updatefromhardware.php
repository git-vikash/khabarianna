<?php
include 'dbConnect.php';

$door=$_REQUEST['door'];
$dht1=$_REQUEST['dht1'];
$dht2=$_REQUEST['dht2'];
$digital1=$_REQUEST['digital1'];
$digital2= $_REQUEST['digital2'];
$water=$_REQUEST['water'];
$pir=$_REQUEST['pir'];

     $sql = "UPDATE `maintable` SET `door`='$door',`dht1`='$dht1',`dht2`='$dht2',`digital1`='$digital1',`digital2`='$digital2',`water`='$water',`pir`='$pir'";

	
	
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