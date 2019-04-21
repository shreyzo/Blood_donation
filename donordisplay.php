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

<?php
    $db = mysqli_connect("localhost","root","","blooddonation");

      $sql= "SELECT UpCamp,UpCampText FROM organisationtable";

      $result = mysqli_query($db, $sql);


      while ($row = mysqli_fetch_array($result))
    	{

    				echo "<div class ="container">";
            echo "<div id='img_div'>";
            echo "<img src = 'uploads/".$row['UpCamp']."'width = 300 height = 200/ >";
            echo "<p>".$row['UpCampText']."</p>";
            echo "</div></div>";
      }

  ?>
