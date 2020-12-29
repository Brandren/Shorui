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
	<title>Shorui-Whole Grain Sourdough at Home</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Whole Grain Sourdough at Home</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook4.png" alt="foodbook4"/>
            <figcaption>Source: <a href="https://www.mphonline.com/en/productdetails/books/food-and-drink/9781645671107">MPH Bookstore Sdn Bhd</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Whole Grain Sourdough at Home</p>
        <p>Authors: Elaine Boddy</p>
        <p>Published Date: September 8, 2020</p>
        <p>Pages: 192 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Preparing a portion of delightful dry bread can be scary for novices, particularly when you need to incorporate supplement thick entire wheat flour and other antiquated grains that are broadly harder to work with. Elaine Boddy is here to help. She has spent numerous years sharpening the science and craft of heating bread with entire grains in her home kitchen. In Whole Grain Sourdough at Home, she imparts every last bit of her insider facts to you.</p>
            <p> Elaine's lord formula and theory for bread making are about straightforwardness, adaptability and having a great time. Sourdough doesn't need to be confounded or require a ton of hands-on work to be incredible. With one bowl, a modest bunch of straightforward fixings, negligible working and under 24 hours, you can have a portion of delightful entire grain sourdough bread on the table. </p>
            <p>Elaine has aced the special subtleties of supplement thick flours like entire wheat, einkorn, spelt and rye to make an assortment of beautiful pieces of bread- - no thick entire wheat blocks here! Stuffed with a bit by bit sourdough starter direct, a lot of tips and 60 plans for everything from sandwich portions to focaccia, this book gives you all that you have to heat astounding entire grain bread today, tomorrow and past.</p>
        </div>
        <h2>Book Price: RM 99.90</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Whole Grain Sourdough at Home">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>
    
    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>