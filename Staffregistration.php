<html>
    <head>
        <title></title>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
         <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css"  media="screen,projection"/>
         <link rel="stylesheet" type="text/css" href="static/prelogin.css">
    </head>
    <body>
        <div class="a1">
        <?php
            echo "<h3><p>Staff</p></h3>";
        ?>
        </div>
        <div class="container">
        <div class="a">
                    <p><em><h4>"Individual commitment to a group effort - that is what makes a team work, a company work, a society work, a civilization work."</h4></em></p>
        </div>

            <div class="row">
            <div class="col s6 m6">
              <div class="card white darken-1">
                <div class="card-content black-text">
                  <span class="card-title">Login </span>
                </div>
                <div class="card-action">
                  <a href="Stafflogin.html"><b>Click here to login</b></a>
                </div>
              </div>
            </div>
          </div>
    </div>
    </body>
</html>

<?php

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
				 header("Location: Stafflogin.html");
	 } else
	 {
		 echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
	 }
 }

mysqli_close($conn);
?>
