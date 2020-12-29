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
	<title>Shorui-The Girl in Red</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Girl in Red</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook5.png" alt="horrorbook5"/>
            <figcaption>Source: <a href="https://www.amazon.com/Girl-Red-Christina-Henry/dp/0451492285">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Girl in Red</p>
        <p>Authors: Christina Henry</p>
        <p>Published Date: June 18 2019</p>
        <p>Pages: 293 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>From the national bestselling author of Alice comes a postapocalyptic take on the perennial classic "Little Red Riding Hood"...about a woman who isn't as defenseless as she seems.</p>
            <p>It's not safe for anyone alone in the woods. There are predators that come out at night: critters and coyotes, snakes and wolves. But the woman in the red jacket has no choice. Not since the Crisis came, decimated the population, and sent those who survived fleeing into quarantine camps that serve as breeding grounds for death, destruction, and disease. She is just a woman trying not to get killed in a world that doesn't look anything like the one she grew up in, the one that was perfectly sane and normal and boring until three months ago.</p>
        </div>
        <h2>Book Price: RM 66.20</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Girl in Red">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>