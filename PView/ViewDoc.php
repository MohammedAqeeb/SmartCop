<?php include_once("pnav.html"); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #C6C6C6;
}
</style>
</head>
<body>
<h3 align="center">LOST DOCUMENTS REPORT INFORMATION</h3>
<?php

$con=mysqli_connect("localhost","root","");

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($con,"users");

/*$sql = "SELECT Name Mobile Email Id FROM user_reg";*/


$results = mysqli_query($con,"SELECT * FROM docs");


echo "<center>";
echo "<table>


<tr>


<th>Name</th>
<th>Card_Number</th>
<th>Lost_Address</th>
<th>Date</th>
<th>Mobile_Number</th>
<th>Station_Name</th>
<th>Address</th>

</tr>";

 

while($row = mysqli_fetch_array($results))

  {

  echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Card_Number'] . "</td>";

  echo "<td>" . $row['Lost_Address'] . "</td>";
  
  echo "<td>" . $row['Date'] . "</td>";
 
 echo "<td>" . $row['Mobile_Number'] . "</td>";
 
 echo "<td>" . $row['Station_Name'] . "</td>";
 
 echo "<td>" . $row['Address'] . "</td>";
 
echo "</tr>";

  }

echo "</table>";
echo "</center>";
 

mysqli_close($con);

?>
</body>
</html>
