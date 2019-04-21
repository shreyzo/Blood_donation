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
            echo "<h3><p>Registered as Blood Bank Manager</p></h3>";
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
                  <span class="card-title">Login </span>
                </div>
                <div class="card-action">
                  <a href="BBmanagerlogin.html"><b>Click here to login</b></a>
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
  $Password=$_POST['Password'];
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $DIN=$_POST['DIN'];
  $Contact=$_POST['Contact'];
  $Email=$_POST['Email'];
echo "ok done";

$query="insert into bbmanagertable (Password,FirstName,LastName,DIN,Contact,Email) VALUES
 ('$Password','$FirstName','$LastName','$DIN','$Contact','$Email')"; //Inserts the value to table users
  //$query=mysqli_query($con,$sql);
  echo "ok";
  //$result=$conn->query($query);
//$result = mysqli_query($conn, $query);
if(mysqli_query($conn, $query)){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
