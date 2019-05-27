<?php
include("dbConnect.php");
date_default_timezone_set('Asia/Kolkata');
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT *, DATE_FORMAT(`starttime`, '%Y-%m-%d %H:%i') as starttime , DATE_FORMAT(`endtime`, '%Y-%m-%d %H:%i') as endtime FROM `schedualing`"));

 $date = date('Y-m-d H:i', time());
//if$data
//echo "<br>";
  $starttime=$data['starttime'];
//echo "<br>";
  $endtime=$data['endtime'];

//echo "<br>";
 //$d1 = new DateTime('Y-m-d H:i',$starttime);
 //$d2 = new DateTime('Y-m-d H:i',$date);
 //$d3=new DateTime('Y-m-d H:i',$endtime);
 
 

if ($starttime == $date){
    
     
    mysqli_query($conn,"UPDATE `home_automation` SET `relay4`='1'");
}
if ($endtime == $date){
    
     
    mysqli_query($conn,"UPDATE `home_automation` SET `relay4`='0'");
}

$sql="SELECT * FROM `home_automation` ";

$a=mysqli_query($conn,$sql);
$res=mysqli_num_rows($a);
$val=array();
if($res>0)
{
	while(($row=mysqli_fetch_assoc($a))!=null)
	{
		
	
		$row1=mysqli_fetch_assoc(	mysqli_query($conn,"SELECT * FROM `schedualing`"));
			$val['response']="Success";
			$row['starttime']=$row1['starttime'];
			$row['endtime']=$row1['endtime'];
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