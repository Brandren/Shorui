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
	<title>Shorui-Music: The Definitive Visual History</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Music: The Definitive Visual History</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook1.png" alt="musicbook1"/>
            <figcaption>Source: <a href="https://www.amazon.com/Music-Definitive-Visual-History-Smithsonian/dp/1465442464/ref=sr_1_1?dchild=1&keywords=Music%3A+The+Definitive+Visual+History&qid=1601380499&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Music: The Definitive Visual History</p>
        <p>Authors: Dk Smithsonian</p>
        <p>Published Date: October 6, 2015</p>
        <p>Pages: 480 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Music consist of beautiful harmonies, lyrics, and rhythm in our life. It can be discovered through human society, accompanying our leisure, religious rituals, and popular festivities. Understand the history of music development, melodies, musical notation which Its was memorized or improvised during prehistory. A lot of galleries of historical instruments was included dulcimers, shawms, psalteries, and tabor pipes.</p>
            <p>Music have universal languages style to express the different emotion or amazing feeling today. In between 20th and 21st century, music evolved around the globe, including the classical European tradition of JS Bach. JS Bach, who is German composer and musician, have amazing sounding during the Baroque period such as passionate Spain’s flamenco, and the sonic power of electronica and heavy rock.</p>
            <p>The book covers the history timeline and profiles of musicians from Amadeus Mozart to David Bowie. It can be easily to comprehend reference about music. Lastly, it provides classical, pop, rock, blues or other types of music. Whether you are entering Blues, Brahms or Bangla, this is essential reading material, and you must have it.</p>
        </div>
        <h2>Book Price: RM 183.40</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Music: The Definitive Visual History">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>