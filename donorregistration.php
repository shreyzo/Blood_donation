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
            echo "<h3><p>Registered as Donor</p></h3>";
        ?>
        </div>
        <div class="container">
        <div class="a">
                    <p><em><h4>"Your blood can give a life to someone."</h4></em></p>
        </div>     
        
            <div class="row">
            <div class="col s12 m6">
              <div class="card white darken-1">
                <div class="card-content black-text">
                  <span class="card-title">Login </span>
                </div>
                <div class="card-action">
                  <a href="donorlogin.html"><b>Click here to login</b></a>
                </div>
              </div>
            </div>
            </div>
    </body>
</html>


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
