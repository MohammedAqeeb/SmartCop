<?php
session_start();
$errors = array();
$con=mysqli_connect("localhost","root","");

$a=$_POST['name'];
$b=$_POST['numb'];
$c=$_POST['email'];	  	
$da=$_POST['pass1'];
$d=$_POST['pass2'];
$e=$_POST['id'];

$connect=mysqli_select_db($con,'ecop');

$s =" select * from user_reg where Name = 'Name' ";

$results =mysqli_query($con,$s);

$num =mysqli_num_rows($results);

if($num == 1 ) 
{
	echo "user name already exists ";
}
else
	{
     	 
		$que="insert into user_reg (Name,Mobile,Email,Password,Id) VALUES('$a','$b','$c','$d','$e')";
		 
		 mysqli_query($con,$que);
			
		echo("Registered Successfully");
			
}
?>
	
	
	
	

	


 <!--
if($result){
            	echo "<div class='form'>
				<h3>You are registered successfully.</h3>
				<br/>Click here to <a href='ulog.html'>Login</a></div>";
				header('location: ulog.html');

         }
    else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>

</body>
</html>


    echo "<html>";
	echo "<head>";
	echo "<body>";
	echo "<center> <h2> Registered Successfully </h2></center>";
	echo "</head>";
	echo "</body>";
	echo "</html>";
 -->