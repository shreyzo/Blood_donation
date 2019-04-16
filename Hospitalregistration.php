Hospitalregistration
<?php

//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
$conn=mysqli_connect("localhost","root","","hospitaldatabase");

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}



	$UHID=$_POST['UHID'];
	$password=$_POST['password'];
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$Contact=$_POST['Contact'];
	$Email=$_POST['Email'];


	$query="insert into hospitaltable(UHID,password,Name,Address,Contact,Email) VALUES ('$UHID','$password','$Name','$Address','$Contact','$Email')"; //Inserts the value to table users
	//$query=mysqli_query($con,$sql);
	$result=$conn->query($query);
	
?>