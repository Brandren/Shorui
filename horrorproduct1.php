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
    <script src="script/script.js"></script>
    <script src="script/enhancement.js"></script>
	<title>Shorui-IT</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>IT</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook1.png" alt="horrorbook1"/>
            <figcaption>Source: <a href="https://www.amazon.ca/Novel-Stephen-King/dp/1501175467">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: IT</p>
        <p>Authors: Stephen King</p>
        <p>Published Date: September 15, 1986</p>
        <p>Pages: 1138 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>IT follows the story of seven preteen children from the fictional town of Derry, Maine who are stalked and terrorized by an evil eldritch entity they only know as "IT." The mysterious creature has the ability to easily shapeshift and disguise itself to its prey, and uses their greatest and deepest psychological fears against them. One of IT’s favorite disguises is the appearance of a circus clown called Pennywise.</p>
            <p>The novel consistently alternates between two time periods, (1958 to 1985) interweaving the story of the children and the adults that they will eventually grow into. Common King themes are woven throughout the novel, including the notion of the power of memory, traumas experienced in childhood and their effect in later life, a small town with dark secrets, and triumphing over evil through trust, love, bravery, and sacrifice.</p>
        </div>
        <h2>Book Price: RM 149.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="IT">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>