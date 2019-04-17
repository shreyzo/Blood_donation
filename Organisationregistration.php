Organisationregistration
<?php
session_start();
//mysql_connect('localhost','root','','hospitaldatabase')or die(mysql_error());
$conn=mysqli_connect("localhost","root","","blooddonation");

if(!$conn)
{
	die("connection failed".mysqli_connect_error());
	echo "fail";
}

	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Name=$_POST['Name'];
	$upcamp=$_POST['upcamp'];
	$Associations=$_POST['Associations'];
	$Contact=$_POST['Contact'];
	$Email=$_POST['Email'];
	$_SESSION['Username']= $Username;

$query="insert into organisationtable(Username,Password,Name,UpCamp,Associations,Contact,Email) VALUES ('$Username','$Password','$Name','$upcamp','$Associations','$Contact','$Email')";
 //Inserts the value to table users
	//$query=mysqli_query($con,$sql);
	//$result=$conn->query($query);
	if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
