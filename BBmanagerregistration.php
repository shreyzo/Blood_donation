
<?php
session_start();

$conn=mysqli_connect("localhost","root","","blooddonation");
echo "ok";
if(!$conn)
{
  die("connection failed".mysqli_connect_error());
  echo "fail";
}
  $Password=$_POST['Password'];
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $DIN=$_POST['DIN'];
  $Contact=$_POST['Contact'];
  $Email=$_POST['Email'];
echo "ok done";

$query="insert into bbmanager(Password,FirstName,LastName,DIN,Contact,Email) VALUES ($Password','$FirstName','$LastName','$DIN','$Contact','$Email')"; //Inserts the value to table users
if(mysqli_query($conn, $query)){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $sql ".mysqli_error($conn);
}
mysqli_close($conn);


	//$result = mysqli_query($conn, $query);
	//mysqli_close($conn);


?>
