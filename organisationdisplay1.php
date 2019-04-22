<html>
    <head>
        <title></title>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!--Import materialize.css-->
         <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css"  media="screen,projection"/>
         <link rel="stylesheet" type="text/css" href="static/prelogin.css">
    </head>
    <style> .center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
            }
    </style>
    <body>
<div class="a1" class="center">
<?php

  session_start();

  $msg ="";
  //pressing upload button
  if (isset($_POST['upload'])) {

    $target = "uploads/".basename($_FILES['image']['name']);

    //db connection
    $db = mysqli_connect("localhost","root","","blooddonation");


    //getting submitted datanfrom form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
echo $_SESSION['user'];
$user=mysqli_real_escape_string($_SESSION['user']);
//$user = mysql_real_escape_string($_SESSION['user']);
    $sql = "UPDATE organisationtable SET UpCamp='$image', UpCampText='$text'
    WHERE Username ='".$_SESSION['user']."'";
    //mysqli_query($db, $sql);//stores submitted data into database
//'"    "'
if (!mysqli_query($db,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }
    //saving in folder
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target )) {
        $msg="Image uploaded successfully";

    }else{
      $msg="There was a problem uploading this image";
    }

  }
 header("Location: organisationdisplay.php");
?>
</div>