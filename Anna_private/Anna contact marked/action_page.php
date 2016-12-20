<html>
<head>
<link rel="stylesheet" type="text/css" href="contactpagestyle.css">
</head>
<meta charset="utf-8">
    <title>Anna Verykovska</title>
</head>
<body>
    <h1>
<a href="aboutmeanna.html"> <img src="imganna.png" style="width:300px;height:250;vertical-align:middle" alt="Anna's image">
    </a></h1>
    <h2>Anna Verykovska</h2>
    <h3> Toronto, ON </h3>
    <hr>
    <ul>
  <li><a href="https://ca.linkedin.com/in/anna-verykovska-33ab20108">LinkedIn</a></li>
  <li><a href="http://immtrends.blogspot.ca/">Blog</a></li>
  <li><a href="https://www.facebook.com/anna.verikovska">Facebook</a></li>
  <li><a href="contact page.html">Contact</a></li>
  <li><a href="aboutmeanna.html">Home</a></li>
</ul>
<div>
<p>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$comment = $_POST['comment'];
echo "Hello ", $firstname, " ", $lastname, " Thanks for submitting your contact information. You will be contacted at ", $email, " or ", $phonenumber, " regarding ", $comment ;
?>
</p>
</div>

</body>
</html>