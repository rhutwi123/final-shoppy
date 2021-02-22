<?php
$usname=$_POST['username'];
//$mail=$_POST['email'];
$pwd1=$_POST['pwd'];
//$vtype=$_POST['vt'];
//$mob=$_POST['mno'];
//$pin=$_POST['pin'];
$conn=mysqli_connect("localhost","root","","shoppy");
$str="SELECT * FROM delivery WHERE d_id ='".$usname."' AND d_pwd='".$pwd1."'";

$result=mysqli_query($conn,$str);



if($result=mysqli_query($conn,$str))
	echo " success";
else
	echo "failed";
{
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

  

  //echo $_SERVER['HTTP_REFERER'];
  header("Location:index.php");
//echo "<script language=javascript> javascript:history.back(1);</script>";

?>
