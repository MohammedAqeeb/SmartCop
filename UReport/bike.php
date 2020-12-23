<?php include_once("report.html"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accessories</title>
</head>
<link href="report.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
<link href="all.css" rel="stylesheet" type="text/css">

<body>

 
<form action="phps/Ubike.php" method="post">
	
    <div class="all">
	<center>
		<h4>E-Lost Bike Report</h4>
		<p>
		  
          
         	<label for="name"><b><br>
	      Name</b> </label>
		  <input name="name" type="text" required="required" placeholder="Enter Your Name">  <br>
		  
		  
		  <label for="ID"> <br>
		    <b>Select Vehicle Type:</b></label>
		  <select name="Vehicle" required> 
		    <br>
		    <option Value="scooty">Scooty </option>
		    <option Value="mobile">Gear</option>
		    <option Value="Other">Any Other</option>
		    <br>
		    <input type="text" placeholder="Enter Name Of Bike" name="losts"><br>
	      </select>
		  
		  
          <label for="name"><b><br>
		    
	      Vehicle Number</b> </label>
		  <input type="text" name="number" required="required" placeholder="Enter Register vehicle Number"
          	pattern="[A-Za-z]{2}-[0-9]{2}-[A-Za-z]{2}-[0-9]{4}" required><br>

			<span class="note">Format: KA-14-EG-1234</span><br
          
          <label for="address"><b><br>
	      <br>
	      Lost Place Address</b> </label>
		  <input type="text" name="add1" required placeholder="Enter Address Where You Lost"> <br>
		  
		  <label for="date"><b><br>
	      Date Loss</b> </label>
		  <input name="dates" type="date" required placeholder="Enter Date On which You Lost" value="2019-01-01"
          pattern="[2019]{4}-[01-12]{2}-[01-31]{2}"><br>
		  
		  <label for="number"><b><br>
	      Mobile Number</b> </label>
		  <input type="number" name="mobile" required placeholder="Enter Mobile Number">  <br>
		  
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
		</select>
          
          
          <label for="addr"><b><br>
	      Your Address </b> </label>
		  <input type="text" name="addr2" required="required" placeholder="Enter Your Address">  <br>
	  </p>
		<p>
		  <input type="submit" name="submit" value="REGISTER">
		  <br>
	  </p>
  </center>   


</form>	
</div>
</body>
</html>