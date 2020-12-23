<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['losts'];
$c=$_POST['number'];
$d=$_POST['add1'];
$e=$_POST['date'];
$f=$_POST['mobile'];
$g=$_POST['place'];
$h=$_POST['addr2']; 

$connect=mysqli_select_db($con,'users');

$que="insert into cars (Name,Car_Name,Car_Number,Lost_Address,Date,Mobile_Number,Station_Name,Address) 																				        VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";

$result=mysqli_query($con,$que);

echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
