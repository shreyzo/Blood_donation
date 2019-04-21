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
            echo "<h3><p>Register as hospital</p></h3>";
        ?>
        </div>
      <div class="a">
        <p><em><h4>"Blood donation is a service to humankind."<h4></em></p>
    </div>
      <div class="container">
        <div class="col s12 m6">
          <div class="card white darken-1">
            <div class="card-content black-text">
              <span class="card-title">Login </span>
            </div>
            <div class="card-action">
              <a href="Hospitallogin.html"><b>Click here to login</b></a>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>

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
