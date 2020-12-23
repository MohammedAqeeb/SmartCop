<?php

$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['place'];
$c=$_POST['address'];
$d=$_POST['option'];
$e=$_POST['date'];

$connect=mysqli_select_db($con,'users');

$que="insert into incident (Name,Station_Name,Place,Type,Date)
		VALUES ('$a','$b','$c','$d','$e')";
		
$result=mysqli_query($con,$que);

echo "<html>";
echo "<head></head>";
echo "<body>";
echo "<center>";
echo "<h1>Register Succeccfully</h1>";
echo "</center>";
echo "</body>";
echo "<html>";
?>