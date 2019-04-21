Hospitalregistration
<?php

//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}

	$UHID=$_POST['UHID'];
	$password=$_POST['password'];
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$Contact1=$_POST['Contact1'];
		$Contact2=$_POST['Contact2'];

	$Email=$_POST['Email'];


	$query2="insert into hospitaltable(UHID,password,Name,Address,Email) VALUES ('$UHID','$password','$Name','$Address','$Email')"; //Inserts the value to table users
	$query3="insert into hospital_contact(UHID,Contact) VALUES ('$UHID','$Contact1')"; //Inserts the value to table users
	$query4="insert into hospital_contact(UHID,Contact) VALUES ('$UHID','$Contact2')"; //Inserts the value to table users

	//Inserts the value to table users
	//$query=mysqli_query($con,$sql);
	$result=$conn->query($query2);
		$result=$conn->query($query3);
	$result=$conn->query($query4);



?>
