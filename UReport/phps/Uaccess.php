<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['losts'];
$c=$_POST['address'];
$d=$_POST['dates'];
$e=$_POST['place'];
$f=$_POST['mobile'];
$g=$_POST['addr'];

$connect=mysqli_select_db($con,'users');

$que="insert into accessories (Name,Device_Name,Lost_Address,Date,Station_Name,Mobile_Number,Adress) 																				        VALUES('$a','$b','$c','$d','$e','$f','$g')";

$result=mysqli_query($con,$que);

echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
