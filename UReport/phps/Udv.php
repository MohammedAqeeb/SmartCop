<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['DV'];
$c=$_POST['occurs'];
$d=$_POST['date'];
$e=$_POST['place'];

$connect=mysqli_select_db($con,'users');

$que="insert into domestic (Name,DV_Type,Place,Date,Station_Name)																				        VALUES('$a','$b','$c','$d','$e')";

$result=mysqli_query($con,$que);

echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
