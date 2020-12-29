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
	<title>Shorui-Pet Sematary</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Pet Sematary</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook3.png" alt="horrorbook3"/>
            <figcaption>Source: <a href="https://sinomofi.blogspot.com/2019/03/pet-sematary-2019.html">Sinomofi</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Pet Sematary</p>
        <p>Authors: Stephen King</p>
        <p>Published Date: November 14, 1983</p>
        <p>Pages: 371 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>The road in front of Dr. Louis Creed's rural Maine home frequently claims the lives of neighborhood pets. Louis has recently moved from Chicago to Ludlow with his wife Rachel, their children and pet cat. Near their house, local children have created a cemetery for the dogs and cats killed by the steady stream of transports on the busy highway. Deeper in the woods lies another graveyard, an ancient Indian burial ground whose sinister properties Louis discovers when the family cat is killed.</p>
        </div>
        <h2>Book Price: RM 50.42</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Pet Sematary">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>