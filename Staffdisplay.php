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

$sql = "SELECT FirstName,LastName,BloodGroup FROM donortable";
$result = $conn->query($sql);


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Blood Group</th>


</tr>";
if ($result->num_rows > 0) {
  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['BloodGroup'] . "</td>";
 
  echo "</tr>";
  }
}else {
        echo "0 results";
      }
echo "</table>";




$conn->close();
?>
