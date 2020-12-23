<?php

$con=mysqli_connect("localhost","root","");

$name=$_POST['name'];
$pass=$_POST['pass'];
$connect=mysqli_select_db($con,'ecop');

$query="Select Name,Password from user_reg where Name='$name' && Password='$pass' ";

$num=mysqli_query($con,$query);

if(mysqli_fetch_row($num)>0)
{
	include 'Login/UReport/uhome.php' ;
}
else
{
	include 'Login/ulog.html';
}
?>