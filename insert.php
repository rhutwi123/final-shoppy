<?php
$usname=$_POST['username'];
$name1=$_POST['name'];
$mail=$_POST['email'];
$pwd1=$_POST['pwd'];
$vtype=$_POST['vt'];
$mob=$_POST['mno'];
$pin=$_POST['pin'];
$conn=mysqli_connect("localhost","root","","dell");
$str="INSERT INTO delivery(d_id, d_phone, d_pwd, d_nm, d_pin) VALUES($usname,$mob,'$pwd1','$name1',$pin)";

$result=mysqli_query($conn,$str);
if(!$result)
	echo "query not exe";
if($result=mysqli_query($conn, $str)){




echo '<script type="text/javascript">';
echo ' alert("Username or password is invalid")';
echo"Incalid";
echo '</script>';
header("Location: login.php");

}

  session_start();
  while($data=mysqli_fetch_array($result))
  {
    $_SESSION['email']=$data['d_mail'];
    
  
  }
  
  header("Location: index.php");


mysqli_close($conn);
?>