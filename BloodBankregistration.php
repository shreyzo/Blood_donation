
<?php

$conn=mysqli_connect("localhost","root","","Blooddonation");

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}

	$DIN=$_POST['DIN'];
	$Password=$_POST['Password'];
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$Contact=$_POST['Contact'];
	$Email=$_POST['Email'];


	$query="insert into bloodbanktable(DIN,Password,Name,Address,Contact,Email) VALUES ('$DIN','$Password','$Name','$Address','$Contact','$Email')"; //Inserts the value to table users
	//$query=mysqli_query($con,$sql);
	//$result=$conn->query($query);

	$result = mysqli_query($conn, $query);
	mysqli_close($conn);
?>
