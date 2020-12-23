<?php include_once("report.html");?>
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

		<form action="phps/Udv.php" method="POST">
        
       	<div class="all">
            <center>
        	
           <h4>E-Voilance Report</h4>
        		
          <label for="name"><b><br>
	      	Name</b> </label>
		  <input type="text" placeholder="Enter Your Name" name="name">  <br>

		  <label for="ID"> <br>
		    <b>Type Domestic Violence:</b></label>
		  <select name="Vehicle" required> 
		    <br>
		    <option Value="pa">Physical Abuse </option>
		    <option Value="bull">Bullying</option>
		    <option Value="sh">Sexual Harassment</option>
            <option Value="cb">child abuse</option>
			<option Value="db">domestic abuse</option>
			<option Value="other">Other</option>
		    <br>
		    <input type="text" placeholder="Description Of the Violence" name="DV"><br>
	      </select>

				      <b>
	      Occurence Place</b> </label>
		  <input type="text" name="occurs" required placeholder="Enter Place Of Occurenece"> <br>
		  
		  <label for="date"><b><br>
	      Date Occurence </b> </label>
		  <input type="date" name="date" required placeholder="Enter Date On which You Lost"  value="2019-01-01"
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
		</select>
          
	  </p>
		<p>
		  <input type="submit" name="submit">
		  <br>
	  </p>
  
  </center>   
</form>
</div>
</body>
</html>