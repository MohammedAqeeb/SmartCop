<?php
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['losts'];
$c=$_POST['upload'];

$connect=mysqli_select_db($con,'users');

$que = " insert into found (Name,Description,Found_Type)
			VALUES ('$a','$b','$c')";
			
$result=mysqli_query($con,$que);

echo "<html>";
echo "<head></head>";
echo "<body>";
echo "<center>";
echo "<h1>Register Successfully</h1>"; 
echo "</center>";
echo "</body>";
echo "</html>";
	
?>	
	