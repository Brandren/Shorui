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
	<title>Shorui-The Only Good Indian</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Only Good Indian</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook2.png" alt="horrorbook2"/>
            <figcaption>Source: <a href="https://www.goodreads.com/book/show/52180399-the-only-good-indians">Goodreads</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Only Good Indian</p>
        <p>Authors: Stephen Graham</p>
        <p>Published Date: July 14, 2020</p>
        <p>Pages: 320 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Seamlessly blending classic horror and a dramatic narrative with sharp social commentary, The Only Good Indians follows four American Indian men after a disturbing event from their youth puts them in a desperate struggle for their lives. Tracked by an entity bent on revenge, these childhood friends are helpless as the culture and traditions they left behind catch up to them in a violent, vengeful way.</p>
            <p>The creeping horror of Paul Tremblay meets Tommy Orange’s There There in a dark novel of revenge, cultural identity, and the cost of breaking from tradition in this latest novel from the Jordan Peele of horror literature, Stephen Graham Jones.</p>
        </div>
        <h2>Book Price: RM 100.50</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Only Good Indian">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>