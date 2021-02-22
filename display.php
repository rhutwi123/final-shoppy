<?php
   $conn=mysqli_connect("localhost","root","","shoppy");
   $str="SELECT order_delivery.o_id,customers.u_addr,customers.c_phone_num
          FROM order_delivery
          INNER JOIN customers
          ON order_delivery.c_id=customers.c_id;";
   $q=mysqli_query($conn,$str);
   
       if($rows=mysqli_fetch_array($q))
	   {
		  echo $rows['c_phone_num'];
		  echo "<br>";
		   echo $rows['o_id'];
		   echo "<br>";
		   echo $rows['u_addr'];
	   }
	  
	   ?>