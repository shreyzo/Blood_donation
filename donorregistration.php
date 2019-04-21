
<?php

//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
$conn=mysqli_connect("localhost","root","","blooddonation");
echo "ok";
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Address=$_POST['Address'];
	$DOB=$_POST['DOB'];
	$Weight=$_POST['Weight'];
	$Height=$_POST['Height'];
	$Contact=$_POST['Contact'];
	$Email=$_POST['Email'];
	$Gender=$_POST['Gender'];
	$BloodGroup=$_POST['BloodGroup'];
echo "ok done";

$date=$_POST['DOB'];

$year = date('Y', strtotime($date));

$CurrYear=2019;
$Age=$CurrYear-$year;


$query="insert into donortable(Username,Password,FirstName,LastName,Age,Address,DOB,Weight,Height,Contact,Email,Gender,BloodGroup) VALUES ('$Username','$Password','$FirstName','$LastName','$Age','$Address','$DOB','$Weight','$Height','$Contact','$Email','$Gender','$BloodGroup')"; //Inserts the value to table users
	//$query=mysqli_query($con,$sql);

	//$result=$conn->query($query);
//$result = mysqli_query($conn, $query);
if(mysqli_query($conn, $query)){
	echo "Records inserted successfully.";
} else{
	echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
