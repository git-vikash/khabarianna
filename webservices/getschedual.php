<?php
include("dbConnect.php");

$sql="SELECT * FROM `schedualing` ";

$a=mysqli_query($conn,$sql);
$res=mysqli_num_rows($a);
$val=array();
if($res>0)
{
	while(($row=mysqli_fetch_assoc($a))!=null)
	{
		
	
	
			$val['response']="Success";
		
			$val['data'][]=$row;
		
		
	}
	print(json_encode($val));
}
else
{
	$val['response']="Nodata";
	print(json_encode($val));
}

?>