<?php
session_start();
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}

$UHID = $_POST['UHID'];
$pwd = $_POST['password'];
$_SESSION['UHID'] = $UHID;

$sql= "SELECT * FROM hospitaltable WHERE UHID='$UHID' AND Password= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "Username or password incorrect!";
}
else {
  echo "Logged in";
	//starting session
	//session_start();
	//$_SESSION["username"]=
  header("Location: Hospital.php");

}


?>
