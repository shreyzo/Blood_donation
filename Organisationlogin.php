<?php
session_start();
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}

$Username = $_POST['user'];
$pwd = $_POST['password'];
$_SESSION['user'] = $Username;
echo($_SESSION['user']);
$sql= "SELECT * FROM organisationtable WHERE Username='$Username' AND Password= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "Username or password incorrect!";
}
else {
  echo "Logged in";
	//starting session
	//session_start();
	//$_SESSION["username"]=
  header("Location: organisationdisplay.php");

}


?>
