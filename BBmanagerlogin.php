<?php
session_start();
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}

$DIN = $_POST['DIN'];
$pwd = $_POST['password'];
$_SESSION['DIN'] = $DIN;

$sql= "SELECT * FROM bbmanagertable WHERE DIN='$DIN' AND Password= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "DIN or Password incorrect!";
}
else {
  echo "Logged in";
	//starting session
	//session_start();
	//$_SESSION["username"]=
  header("Location: Hospitaldisplay.php");

}


?>
