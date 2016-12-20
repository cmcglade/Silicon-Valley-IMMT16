<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Jigar Vyas-->
    <meta charset="utf-8">
    <title>About Me - Jigar Vyas</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="all">

</head>

<body>
    <div id="aboutus">
        <h1>Read a little about me</h1>
            <ul>
                <li> <a href="#" target="_blank"> Portfolio </a> </li>
                <li> <a href="# " target="_blank"> Contact me </a></li>
            </ul>

        <hr>
        <a href=https://www.linkedin.com target="_blank"><img src="jvyas.jpg" style=" width:300px; height:450px;" alt="Picture of Jigar Vyas"></a>
        
        <h1>Jigar Vyas</h1>
        <h3>UX Designer</h3>

            <div>
                <p> <span><i>"Good Bring"</i></span> Darkness green in brought rule that isn't together face. Image fill wherein fruit. Fruit forth light. You'll first darkness us that darkness yielding were moving which us first, given, appear herb together which so. He, light. And.
            <br><br> 
                Sea place great is dry divided was divided deep abundantly doesn't. Also, sixth great the waters spirit subdue you're land can't. Herb dominion replenish air and seed place fifth creepeth fruitful lights said all over night darkness image.Darkness green in brought rule that isn't together face. Image fill wherein fruit. Fruit forth light. You'll first darkness us that darkness yielding were moving which us first, given, appear herb together which so. He, light. And.
                </p>
            </div>

            <div>
                <p> <span><i>"Good Bring"</i></span> Sea place great is dry divided was divided deep abundantly doesn't. Also, sixth great the waters spirit subdue you're land can't. Herb dominion replenish air and seed place fifth creepeth fruitful lights said all over night darkness image.Darkness green in brought rule that isn't together face. Image fill wherein fruit. Fruit forth light. You'll first darkness us that darkness yielding were moving which us first, given, appear herb together which so. He, light. And.</p>
            </div>

    </div>

    <div id="form">
        <h1>Connect With Me</h1>
        <form method="POST" >


            <p>
                <label for="firstname">Name:</label>
                <input name="firstname" id="firstname" type="text" placeholder="First Name">
                <input name="lastname" id="lastname" type="text" placeholder="Last Name">
            </p>

            <p>
                <label for="phone">Phone:</label>
                <input name="phone" id="phone" type="text" placeholder="000 000 0000">
            </p>

             <p>
                <label for="sex">Gender:</label>
                <input type="radio" id="sex" name="sex">Male
                <input type="radio" name="sex">Female
            </p>

            <p>
                <label for="email">Email ID:</label>
                <input name="email" id="email" type="email" placeholder="mymail@example.com">
            </p>

            <p>
                <label for="password">Password:</label>
                <input name="password" id="password" type="password" placeholder="password">
            </p>

            <p>
                <label for="message">Message:</label>
                <textarea name="message" id="message" placeholder="Write somthing to us"></textarea>
            </p>

            <p>
                <input name="submit" type="submit" id="submit" value="Submit">
                <input name="reset" type="reset" id="reset" value="reset">
            </p>

        </form>

        <?php
            if(isset($_POST['submit'])) {
            
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];

            echo "Thank you ",$fname, $lname, " for contacting us we will get back to you soon";
            } //you should do variable replacement, putting the variables inside the quotes
            // with the rest of the message, or concatenate, your message is not displaying properly//

        ?>
    </div>
</body>

</html>