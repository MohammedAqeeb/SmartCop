<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['losts'];
$c=$_POST['address'];
$d=$_POST['date'];
$e=$_POST['mobile'];
$f=$_POST['place'];
$g=$_POST['addr'];
 

$connect=mysqli_select_db($con,'users');

$que="insert into docs (Name,Card_Number,Lost_Address,Date,Mobile_Number,Station_Name,Address)																				        VALUES('$a','$b','$c','$d','$e','$f','$g')";

$result=mysqli_query($con,$que);

echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
