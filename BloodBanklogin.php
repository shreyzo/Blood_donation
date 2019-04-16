<?php
session_start();
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}

$Username = $_POST['username'];
$pwd = $_POST['password'];
$_SESSION['Username'] = $Username;

$sql= "SELECT * FROM bloodbanktable WHERE DIN='$Username' AND Password= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "Username or password incorrect!";
}
else {
  echo "Logged in";
	//starting session
	//session_start();
	//$_SESSION["username"]=
  header("Location: BBdisplay.php");

}


?>
