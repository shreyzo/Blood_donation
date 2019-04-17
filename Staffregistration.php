
<?php

//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
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
	$Designation=$_POST['Designation'];
	$StaffID=$_POST['StaffID'];
	$Contact=$_POST['Contact'];
	$BloodGroup=$_POST['BloodGroup'];
echo "ok done";

$query="insert into stafftable(Password,FirstName,LastName,Designation,StaffID,Contact,BloodGroup) VALUES ($Password','$FirstName','$LastName','$Designation','$StaffID','$Contact','$BloodGroup')"; //Inserts the value to table users
	//$query=mysqli_query($con,$sql);
	echo "ok";
	//$result=$conn->query($query);
//$result = mysqli_query($conn, $query);
if(mysqli_query($conn, $query)){
	echo "Records inserted successfully.";
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
