<html>
    <head>
        <title></title>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!--Import materialize.css-->
         <link type="text/css" rel="stylesheet" href="static/css/materialize.min.css"  media="screen,projection"/>
         <link rel="stylesheet" type="text/css" href="static/prelogin.css">
    </head>
    <style> .container {
      padding: 10px;
      padding-right: 500px;
      padding-left: 500px;
    }
</style>
    <body>
      <div class="container">
          <h5>Search By Bloood Group</h5> <br/>
            <ul class="w3-ul w3-card-4 w3-center w3-hoverable" style="width:100%">
              <li><a href="ABpos.php">AB+ </li>  
              <li><a href="ABneg.php">AB- </li>  
              <li><a href="Bpos.php">B+   </li>
              <li><a href="Bneg.php">B-   </li>
              <li><a href="Opos.php">O+   </li>
              <li><a href="Apos.php">A+   </li>
              <li><a href="Aneg.php">A-   </li>
              <li><a href="Oneg.php">O-   </li>
            </ul>
      </div>   
        <form action="search.php" method="POST">
        <div class="a1">
          <h3><p>Donor Data</p></h3>
          <?php
          session_start();
          $conn=mysqli_connect("localhost","root","","blooddonation");

          if(!$conn)
          {
            die("connection failed".mysqli_connect_error());
            echo "fail";
          }


          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM donortable";
          $result = $conn->query($sql);


          echo "<table border='1'>
          <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Blood Group</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Email</th>
          <th>Height</th>
          <th>Weight</th>
          <th>DOB</th>
          <th>Age</th>
          <th>Gender</th>

          </tr>";
          if ($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['BloodGroup'] . "</td>";
            echo "<td>" . $row['Contact'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Height'] . "</td>";
            echo "<td>" . $row['Weight'] . "</td>";
            echo "<td>" . $row['DOB'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "</tr>";
            }
          }else {
                  echo "0 results";
                }
          echo "</table>";




          $conn->close();
          ?>

        </div>


    </body>
</html>
