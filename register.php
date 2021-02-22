<?php

$conn=mysqli_connect("localhost","root","","shoppy");
   $str="select otp from order_delivery where sh_id=213";
   $q=mysqli_query($conn,$str);
   
       if($rows=mysqli_fetch_array($q))
	   {
		   $j=$rows['otp'];
		   echo "<br>";
		 
	   }

    echo "<script>
alert('Register success $j');
window.location.href='else.php';
</script>";



?>
