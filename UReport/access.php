<?php include_once("report.html"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accessories</title>
</head>
<link href="report.css" rel="stylesheet" type="text/css">
<link href="all.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
<body>

 <div class="all">

 <form action="phps/Uaccess.php" method="post">
  
   <h3 align="center">E-Lost Mobile Report</h3>

	<center>

		<p>
		  <label for="name"><strong><br>
	      Name</strong> </label>
		  <input type="text" placeholder="Enter Your Name" name="name">  <br>
		  
		  
		  <label for="ID"> <br>
		    <b>Select Type Lost:</b></label>
		  <select name="Accessiores" required> 
		    <br>
		    <option Value="mobile">Android </option>
		    <option Value="mobile">Iphone</option>
		    <option Value="Laptop">Laptop</option> 
		    <option Value="Watch">Watch</option>
		    <option Value="Other">Any Other</option>
		    <br>
		    <input type="text" placeholder="Enter The Name Of Device" name="losts">
	      </select>
		  
		  <label for="address"><b><br>
	      <br>
	      Lost Place Address</b> </label>
		  <input type="text" name="address" required placeholder="Enter Address Where You Lost"> <br>
          
		  <label for="date"><strong><br>
	      Lost Date</strong> </label>
		  <input type="date" name="dates" required placeholder="Enter Date On which You Lost" value="2019-01-01"
          pattern="[2019]{4}-[01-12]{2}-[01-31]{2}"><br>
		  
		  <label for="ID">
		    <b>Select City:</b></label>
  			<select name="City">
  				<optgroup label="Places">
    			<option value="Smg">Shimoga</option>
   				<option value="Bdvt">Bhadravathi</option>
   				<option value="Shk">Shikarpur</option>
    			<option value="sagar">Sagar</option>
   				<option value="">Sorab</option>
    			<option value="">Tirthahalli</option>
    			<option value="">Hosanagara</option>
		<hr>  <br>
    			<br><input type="text" name="place" placeholder="Enter station name" required>
   			 </optgroup>
		</select><br>
		          
         
          <label for="number"><b><br>
	      Mobile Number</b> </label>
		  <input type="number" name="mobile" required placeholder="Enter Mobile Number">  <br>
		  
		  <label for="addr"><b><br>
	      Your Address </b> </label>
		  <input type="text" placeholder="Enter Your Address" name="addr">  <br>
	  </p>
		<p>
		  <input type="submit" name="REGISTER">
		  <br>
	  </p>
  </center>   
</form>
</div>
</body>
</html>

