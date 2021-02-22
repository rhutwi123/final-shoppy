<?php
ini_set("display_errors","OFF");
$b=$_POST['otp1'];

 $conn=mysqli_connect("localhost","root","","shoppy");
   $str="select otp from order_delivery where sh_id=213";
   $q=mysqli_query($conn,$str);
   
       if($rows=mysqli_fetch_array($q))
	   {
		   $j=$rows['otp'];
		   echo "<br>";
		 
	   }
	   if($j==$b)
		  echo "<script>
window.location.href='display.php';
</script>";
	  else
	      echo "not done";
     
    ?>