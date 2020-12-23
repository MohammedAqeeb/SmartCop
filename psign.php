<?php
$con=mysqli_connect("localhost","root","");
$a=$_POST['pid'];
$b=$_POST['pname'];
$c=$_POST['email'];
$d=$_POST['pass-repeat'];
$e=$_POST['place'];

$connect=mysqli_select_db($con,'ecop');

$que="insert into cop_reg (PID,Pname,Email,Password,Station) VALUES('$a','$b','$c','$d','$e')";

$result=mysqli_query($con,$que);
echo "<html>";
echo "<head>";
echo "<body>";
echo "<center> <h2> Registered Successfully </h2></center>";
echo "</head>";
echo "</body>";
echo "</html>";

?>
