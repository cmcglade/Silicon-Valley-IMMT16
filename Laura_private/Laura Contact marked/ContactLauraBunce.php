
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Contact Laura Bunce</title>
	<link rel="stylesheet" href="LbFormStyles.css">
</head>
<body>
<h1>Contact Laura Bunce</h1>

<h2>Sign up below to request more information!</h2>

<form method="POST">

 <ul >
	<li><label>First Name:<br>
	<input name="FirstName" type="text" required/></label>
	</li><br>

    <li><label>Last Name:<br>
    <input name="LastName" type="text" required/></label>
    </li><br>

    <li><label>Phone Number:<br>
    <input name="PhoneNumber" type="number" min="1000000000" max="9999999999" required/></label>
    </li><br><!--this is an odd validation formatting to use on phone number-->
 	
    </li><label name="datetimefield">Date of Birth:<br>
	<input type="date" min="1900-01-01" max="2016-11-11" name="date"/></label>
	</li><br>

	<br><li><label>Create a Password (Must be more than 6 characters):<br>
	<input name="Password1" type="Password" minlength="6" required/></label>
	</li><br>

	<li><label>What would you like information about?:<br>
	<textarea name="Comment" type="textarea" rows="10" cols="50" required></textarea></label>
	</li><br>


</ul>


   <button type="submit">Submit</button>


</form>

<?php  
   		//Retrieve name from query string and store to a local variable  
   		
   		if (isset($_POST['FirstName'])) {
  			//echo "This is working";
   			$FirstName = $_POST['FirstName'];
   			$LastName = $_POST['LastName'];
   			$PhoneNumber = $_POST['PhoneNumber'];
   			$Comment = $_POST['Comment'];
   			echo "<h2> Hello $FirstName $LastName! We will contact you soon at $PhoneNumber to discuss $Comment </h2>";
   		}
		 
    ?> 
</body>
</html>