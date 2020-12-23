<?php include_once("report.html"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="report.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
<link href="all.css" rel="stylesheet" type="text/css">
</head>

<body>

		<form action="phps/Ufound.php" method="POST" enctype="multipart/form-data">
        
        <div class="all">
        	
		<center>
        	<h4>Lost And Found</h4> 
            
            <label for="name"><b><br>
	      	Name</b> </label>
		  <input type="text" placeholder="Enter Your Name" name="name">  <br>
          
          
          <label for="ID"> <br>
		    <b>Found Type:</b></label>
		  <select name="Vehicle" required> 
		    <br>
		    <option Value="mobile">Mobile </option>
		    <option Value="bike">Bike</option>
		    <option Value="car">Car</option>
            <option Value="doc">Documents/Certificates</option>
			<option Value="bag">luggage bags</option>
			<option Value="other">Other</option>
		    <br>
		    <input type="text" placeholder="Detail Descriptions Of Found Item" name="losts"><br>
	      </select>
          
			<br>      
           	   <b> Select image to upload:</b>
   				 <input type="file" name="upload" id="fileToUpload"><br>
   				 <input type="submit" value="Upload Image" name="submit">
	
</center>
</form>
</div>
</body>
</html>