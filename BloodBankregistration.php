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
            echo "<h3><p>Registered as Blood Bank</p></h3>";
        ?>
        </div>
      <div class="a">
        <p><em><h4>"Blood donation is the real act of humanity."<h4></em></p>
    </div>
       <div class="container"> 
        <div class="row">
        <div class="col s12 m6">
          <div class="card white darken-1">
            <div class="card-content black-text">
              <span class="card-title">Login </span>
            </div>
            <div class="card-action">
              <a href="BloodBanklogin.html"><b>Click here to login</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>

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
