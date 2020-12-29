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
	<title>Shorui-Brass Instruments: Their History and Development</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Brass Instruments: Their History and Development</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook4.png" alt="musicbook4"/>
            <figcaption>Source: <a href="https://www.amazon.com/Brass-Instruments-Their-History-Development/dp/0486275744/ref=sr_1_1?dchild=1&keywords=Brass+Instruments%3A+Their+History+and+Development&qid=1601380292&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Brass Instruments: Their History and Development</p>
        <p>Authors: Anthony Baines</p>
        <p>Published Date: April 19, 2012</p>
        <p>Pages: 320 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Book included well-researched history and concise survey of the evolution of music instruments such as trumpets, trombones, bugles, cornets, French horns, tubas, and other brass wind instruments. It provide a guide begin with a storytelling about a bark trumpets, conch shells and perforated animal horns, bronze trumpets used by the ancient Danes and Celts, large Roman horns, and other devices.</p>
            <p>Large amount of curved instruments or horns of various shapes and sizes developed during the medieval period. For instance, trumpets, looped horns, the sackbut (forerunner of the trombone) and others. However, the advent of valved instruments was created in the nineteenth century.</p>
            <p>Anthony Baines, who is the author of this book, provide list or document of the evolution of brass instruments with immense learning and a wealth of detail. The document consist of 40 black-and-white illustrations and 48 music examples. The book have enough of an indispensable resource for any brass player or music historian.</p>
        </div>
        <h2>Book Price: RM 80.40</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Brass Instruments: Their History and Development">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>