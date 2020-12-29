<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
	<link rel="icon" href="images/icon.png" type="image/jpg" sizes="16x16"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>Shorui-Enhancement</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="enhance">
        <h1>Enhancement</h1>
    </div>
    <p class="centertxt">Assignment 1</p>
    <table class="TFtable">
        <tr><th>Enhancement</th><th>Description</th></tr>
        <tr><td>Slideshow at hompage</td><td>There is a slideshow at homepage that makes the page looks better. Come in from the side and fades away.<a href="index.php">link</a></td></tr>
        <tr><td>Comments section</td><td>Comments from previous buyer that can be viewed by clicking the middle mouse button/scrolling left or right with mousepad.<a href="index.php#comment">link</a></td></tr>
        <tr><td>Pictures of the product</td><td>When the mouse is hovers to the product it shows an effect like flipping with shadows.<a href="music.php">link</a></td></tr>
        <tr><td>Navigation</td><td>The navigation on top of <b>every page</b> benefits the users to browse through the webpage efficiently. There is also an hover effects when the mouse goes by.</td></tr>
        <tr><td>Shorui logo</td><td>The SHORUI  logo on top of <b>every page</b> brings you to the homepage, very useful whenever the user is lost.</td></tr>
        <tr><td>Pictures of discover</td><td>When the mouse is hovers to the image it shows a drop shadow effect and the border-top-right and border-bottom-left will become more rounded.<a href="index.php#discover">link</a></td></tr>
        
    </table>

	<p class="centertxt">Assignment 2</p>
    <table class="TFtable">
        <tr><th>Enhancement</th><th>Description</th></tr>
        <tr><td>Homepage logo</td><td>When the mouse hovers to the homepage's logo, the alert message will pop out.<a href="index.php">link</a></td></tr>
        <tr><td>Colour change</td><td>The border colour of the image and the colour of the text at the table will change after clicking the button at each individual about page and disclaimer page.<a href="disclaimer.php">link</a></td></tr>
        <tr><td>Printing </td><td>The print icon button at each product page and enquiry page allow to print the webpage.<a href="foodproduct1.php">link</a></td></tr>
        <tr><td>Date and time</td><td>The current date and time will display at the enquiry page.<a href="enquiry.php">link</a></td></tr>
        <tr><td>Validation at Subject</td><td>When subject the subject is removed, the cross sign "X" will display at the side and the border colour will become red.<a href="enquiry.php">link</a></td></tr>
    </table>

    <p class="centertxt">Assignment 3</p>
    <table class="TFtable">
        <tr><th>Enhancement</th><th>Description</th></tr>
        <tr><td>User Management Module</td><td>Create, View and Delete user from the website.<a href="login.php">link1</a>&nbsp;<a href="signup.php">link2</a></td></tr>
    </table>
    


    <footer id="enhancefooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>