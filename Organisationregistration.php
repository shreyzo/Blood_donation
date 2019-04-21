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
            echo "<h3><p>Registered as Organisation</p></h3>";
        ?>
        </div>
        <div class="container">
        <div class="a">
                    <p><em><h4>"Individual commitment to a group effort - that is what makes a team work, a company work, a society work, a civilization work."</h4></em></p>
        </div>     
        
            <div class="row">
            <div class="col s12 m6">
              <div class="card white darken-1">
                <div class="card-content black-text">
                  <span class="card-title">Login</span>
                </div>
                <div class="card-action">
                  <a href="Organisationlogin.html"><b>Click here to login</b></a>
                </div>
              </div>
            </div>
          </div>
    </div>
    </body>
</html>

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
