<?php include_once("AdHome.html"); ?>
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
<h2 align="center">POLICE INFORMATION</h2>
<?php

$con=mysqli_connect("localhost","root","");

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($con,"ecop");

/*$sql = "SELECT Name Mobile Email Id FROM user_reg";*/


$results = mysqli_query($con,"SELECT * FROM cop_reg");


echo "<center>";
echo "<table>


<tr>

<th>PID</th>

<th>Police Name</th>

<th>E-MAIL</th>

<th>Station_Name</th>

</tr>";

 

while($row = mysqli_fetch_array($results))

  {

  echo "<tr>";

  echo "<td>" . $row['PID'] . "</td>";

  echo "<td>" . $row['Pname'] . "</td>";

  echo "<td>" . $row['Email'] . "</td>";
  
  echo "<td>" . $row['Station'] . "</td>";
 
  echo "</tr>";

  }

echo "</table>";
echo "</center>";
 

mysqli_close($con);

?>
</body>
</html>
