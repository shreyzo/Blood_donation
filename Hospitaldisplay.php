
<html>
    <head>
        <title>Hospital Search</title>
        <link rel="stylesheet" type="text/css" href="static/login.css">
    </head>

    <body>
	<br/>
        Search By Bloood Group
				<br/>

		<a href="ABpos.php">AB+;
		<br/>
		<a href="ABneg.php">AB-;		<br/>

		<a href="Bpos.php">B+;		<br/>

		<a href="Bneg.php">B-;		<br/>

		<a href="Opos.php">O+;		<br/>

		<a href="Apos.php">A+;		<br/>

		<a href="Aneg.php">A-;		<br/>

		<a href="Oneg.php">O-;		<br/>



        <form action="search.php" method="POST">
          <div class="container">


               

         </div>



        </form>
=======
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
