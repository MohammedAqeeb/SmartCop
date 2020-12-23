<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['losts'];
$c=$_POST['number'];
$d=$_POST['add1'];
$e=$_POST['dates'];
$f=$_POST['mobile'];
$g=$_POST['place'];
$h=$_POST['addr2']; 

$connect=mysqli_select_db($con,'users');

$que="insert into bikes (Name,Bike_Name,Bike_Number,Lost_Address,Dates,Mobile_Number,Station_Name,Adress) 																				        values('$a','$b','$c','$d','$e','$f','$g','$h')";

$result=mysqli_query($con,$que);

echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
