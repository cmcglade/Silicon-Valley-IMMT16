<!-- Karissa Hurl's Contact Me Page -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Contact Page - Karissa Hurl</title>
	<link rel="stylesheet" href="KarissaHurl.css">
</head>
<body>
<header>
	<center>
	<img src="http://i.imgur.com/WogGgc5.png" style="width:300px;height:200" alt="Karissa Hurl's logo">
	</center>
	</header>
	<hr>
	<ul id="nav">
      <li><a href="#">Karissa Hurl</a></li>
      <li><a href="#">About Me</a></li>
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">Contact</a></li>
   </ul>
 	<div id="div1"><p>
	<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	echo "Hey", $firstname, " ", $lastname, "Thanks for getting in touch! I'll contact you at ", $email, " or ", $phonenumber ;"as soon as possible."
	?>
	</p></div>
	<!--good work, could have styled the form with a little more structure, the labels were not 
	wrapping to the next line with the fields at smaller screen sizes.  Don;t use thanks as a label on a submit button,
	be clear what you want the user to do by labeling it submit-->
</body>
</html>
	