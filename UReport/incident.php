<?php include_once("report.html");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Report An Incident</title>
<link href="report.css" rel="stylesheet" type="text/css">
<link href="all.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="all">
		<form action="phps/UIncident.php" method="POST">
			<center>
			<h3>Report An Incident</h3>
		
		<p>
		  <label for="name"><strong><br>
	    	  Name</strong> </label>
		  <input type="text" placeholder="Enter Your Name" name="name">  <br>    
    
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
 			
            
			<label for="address"><b><br>
	      <br>
	      Incident Place Address</b> </label>
		  <input type="text" name="address" required placeholder="Incident Occur Address"> <br>              
   
   		<label for="ID">
		    <b>Select Category:</b></label>
  			<select name="City">
  				<optgroup label="Places">
    			<option value="acc">Accident</option>
   				<option value="crime">Attempted Murder</option>
   				<option value="chain">Chain snatching</option>
    			<option value="harsh">Harsh driving </option>
   				<option value="MI">Muncipal Issues</option>
    			<option value="theft"> Theft</option>
    			<option value="etc">Other</option>
		<hr>  <br>
    			<br><input type="text" name="option" placeholder="Enter AnyOne" required>
   			 </optgroup>
		</select>
               
            			
          <label for="date"><b><br>
	      	Date </b> </label>
		  <input type="date" name="date" required placeholder="Enter Date" value="2019-01-01"
          pattern="[2019]{4}-[01-12]{2}-[01-31]{2}"><br>
            
   			<br>      
           	   <b> Select image to upload:</b>
   				 <input type="file" name="fileToUpload" id="fileToUpload"><br>
   				 <input type="submit" value="Upload Image" name="submit">
                 			
		</p>
        
</center>
</form>
</div>
</body>
</html>