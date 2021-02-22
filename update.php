<?php
session_start();
$usname=$_POST['username'];
$name1=$_POST['name'];
$mail=$_POST['email'];
$pwd1=$_POST['pwd'];
$vtype=$_POST['vt'];
$mob=$_POST['mno'];
$pin=$_POST['pin'];
$conn=mysqli_connect("localhost","root","","shoppy");
$str="UPDATE delivery SET d_phone='".$mob."', d_pwd='".$pwd1."', d_nm='".$name1."',d_pin='".$pin."' WHERE d_mail='".$_SESSION['email']."'" ;
if ($conn->query($str) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header("Location:manage.php");
$conn->close();


?>
