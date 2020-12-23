<?php
/*$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['pass'];

$connect=mysqli_select_db($con,'ecop');
*/

session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";

}

else

{
// Define $username and $password
$username=$_POST['name'];
$password=$_POST['word'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysqli_select_db($connection,'ecop');
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query("select * from user_reg where Password='$Password' AND Name='$Name'", $connection);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: uhome.php"); // Redirecting To Other Page
} 
else {
		$error = "Username or Password is invalid";
	}
mysqli_close($connection); // Closing Connection
}
}
?>