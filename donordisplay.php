<?php
    $db = mysqli_connect("localhost","root","","blooddonation");

      $sql= "SELECT UpCamp,UpCampText FROM organisationtable";

      $result = mysqli_query($db, $sql);


      while ($row = mysqli_fetch_array($result))
    	{

    				echo "<div id='img_div'>";
            echo "<img src = 'uploads/".$row['UpCamp']."'width = 300 height = 200/ >";
            echo "<p>".$row['UpCampText']."</p>";
            echo "</div></div>";
      }

  ?>
