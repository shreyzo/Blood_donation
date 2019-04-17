<?php
session_start();
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}

$StaffID = $_POST['StaffID'];
$pwd = $_POST['password'];
$_SESSION['StaffID'] = $StaffID;

$sql= "SELECT * FROM stafftable WHERE StaffID='$StaffID' AND Password= '$pwd'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
   echo "StaffID or Password incorrect!";
}
else {
  echo "Logged in";

  header("Location: Staffdisplay.php");

}


?>
