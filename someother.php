<?php


if(isset($_POST['checkbox'])) {
	$conn=mysqli_connect("localhost","root","","shoppy");
	$str="UPDATE delivery SET avail_status='1' WHERE d_id =2";
	$result=mysqli_query($conn,$str);
	if($result=mysqli_query($conn,$str))
	echo " success 1";
else
	echo "failed 1";
    
} else { 



$conn=mysqli_connect("localhost","root","","dell");
$str="UPDATE delivery SET avail_status='0' WHERE d_id =2";
$result=mysqli_query($conn,$str);

if($result=mysqli_query($conn,$str))
	echo " success 0";
else
	echo "failed 0";

}


?>



