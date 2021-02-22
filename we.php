<?php
   $conn=mysqli_connect("localhost","root","","shoppy");
   $str="select o_id,sh_id  from order_delivery where sh_id=213";
   $q=mysqli_query($conn,$str);
   
       if($rows=mysqli_fetch_array($q))
	   {
		   $o=$rows['o_id'];
		   echo "<br>";
		  $s=$rows['sh_id'];
	   }
     else {
    echo "Error updating record: " . $conn->error;
    }
	$str1="select sh_add from shopkeepers where sh_id=213";
	$q1=mysqli_query($conn,$str1);
   
       if($row=mysqli_fetch_array($q1))
	   {
		  
		   echo "<br>";
		   $a=$row['sh_add'];
	   }
     else {
	 echo "Error updating record: " . $conn->error;}?>
	<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>Order :<?php echo $o; ?></h3>
    </header>
    <div class="w3-container">
      <p><h3>Shopkeeper:<?php echo $s; ?></h3></p>
      
      
      <p>Shop Address:<?php echo $a; ?></p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Accept</button>
  </div>
</div>

</body>
</html>
