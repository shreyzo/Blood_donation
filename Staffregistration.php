
<?php

//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
$conn=mysqli_connect("localhost","root","","blooddonation");
//echo "ok";
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}
	$UHID=$_POST['UHID'];
	$Password=$_POST['Password'];
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Designation=$_POST['Designation'];
	$StaffID=$_POST['StaffID'];
	$Contact=$_POST['Contact'];
	$BloodGroup=$_POST['BloodGroup'];
// "ok done";
$sql= "SELECT * FROM hospitalstaff WHERE UHID='$UHID' AND StaffID= '$StaffID'";

$result = $conn->query($sql);
if (!$row = $result->fetch_assoc())
				 {
					 	echo("Your staff ID is not associated with mentioned hospital");
					   //header("Location: Staffregistration.html");
				 }

else {
	$query="insert into stafftable(Password,FirstName,LastName,Designation,StaffID,Contact,BloodGroup) VALUES ('$Password','$FirstName','$LastName','$Designation','$StaffID','$Contact','$BloodGroup')"; //Inserts the value to table users
	 if(mysqli_query($conn, $query))
	 {
				 echo "Records inserted successfully.";
				 header("Location: Staffdisplay.php");
	 } else
	 {
		 echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
	 }
 }

mysqli_close($conn);
?>
