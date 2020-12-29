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
	<title>Shorui-Antonio Stradivari: His Life and Work</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Antonio Stradivari: His Life and Work</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook5.png" alt="musicbook5"/>
            <figcaption>Source: <a href="https://www.amazon.com/Antonio-Stradivari-Life-Work-1644-1737/dp/0486204251/ref=sr_1_1?dchild=1&keywords=Antonio+Stradivari%3A+His+Life+and+Work&qid=1601380171&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Antonio Stradivari: His Life and Work</p>
        <p>Authors: W. Henry Hill, Arthur F. Hill and Alfred E. Hill</p>
        <p>Published Date: June 1, 1963</p>
        <p>Pages: 358 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Leading appraisers of fine musical instruments agree that Antonio Stradivari who are the one highest achievement in the art of making violins.Collectors have paid more than a thousands of dollars for one of Stradivari's violins.</p>
            <p>Three Hill brothers of the London violin-making firm published the book in year 1902. They had unique opportunities to examine and compare almost all of the great examples of Italian violin-making. Most of the book include ancestry of Stradivari such as his violins, violas, and violoncellos. Some of the topics discussed under these main headings are: Stradivari's apprenticeship to Amati, comparison of his work with that of Amati and the tone of the pre-1684 Stradivari violin between 1684 and 1690.</p>
            <p>The incomparable visual beauty of his instruments and the infinite variety and magnificence of tone of which they are capable have by this time passed into the realm of legend. Musicologists, violinists, makers of instruments, historians of culture, and all music lovers will notice this book will be an extremely interesting.</p>
        </div>
        <h2>Book Price: RM 87.60</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Antonio Stradivari: His Life and Work">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>