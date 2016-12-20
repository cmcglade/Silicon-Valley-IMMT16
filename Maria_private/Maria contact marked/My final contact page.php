<!DOCTYPE html>
<html>
<head>
<title> contact page</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head> 
<!--you didn't include your results page with this submission.  styling is very minimal and you also didn;t 
	include your images so they are broken.  you haven;t gathered the assigned fields.  you -->

<body>

<div id="header">
<img src="siliconvalleylogo.png" alt="siliconvalleylogo">   
</div>

<div id="navbar">

</div>

<div class="main">

<h2> Contact Maria</h2>

<form id="theform" action="contactpageform.php" method="post">
<img src="mariaprofilepic.jpg" alt="pictureofmariatolliver" style= "height:240px;= width:380px;">


<div class="row">
<label for="Name"> Name:</label> 
<input type="text" id="Name" name="name"> <br> <br>
</div>

<div class="row">
<label for="Phone">Phone:</label>
<input type="tel" id="Phone" name="phone"> <br> <br>
</div>

<div class="row">
comments:<textarea rows="8" cols="35" name="comment"></textarea> <br> <br>

</div>

<div class="row">
<label for="Email">Email:</label>
<input type="text" id="Email" name="Email" required><br> <br>
</div>

<input type="submit">
</form>

</div>

<?php


//if (!isset($_POST ['name'])){-->


//} $name= $_POST['name'];
//echo "<h2> hellp maria" </h2>
$stringvar1 = "thank you";
$stringvar2 = "for submitting your information. we will contact you soon at"; 
$stringvar3 = " our earliest convenience";
$stringvar4 = " to discuss";	
 
 echo $stringvar1 . 
 $stringvar2 . $stringvar3 . 
 $stringvar4;

//echo  "thank you" $_POST ['thank you'];
//echo  "for submitting your information. we will contact you soon at" $_POST 
	//   ['for submitting your information. we will contact you soon at'];
//echo  " our earliest convenience" $_POST ['our earliest convenience'];
//echo  "to discuss" $_POST ['to discuss'];
 
?>

</body>
</html>


