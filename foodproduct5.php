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
	<title>Shorui-Inspiring Soup Flavours</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Inspiring Soup Flavours</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook5.png" alt="foodbook5"/>
            <figcaption>Source: <a href="https://www.popularonline.com.my/default/catalog/product/view/id/167071/s/2000000767239/?did=5897">Popular online</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Inspiring Soup Flavours</p>
        <p>Authors:  LJ Loo</p>
        <p>Published Date: July 1, 2020</p>
        <p>Pages: 128 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Soup has a spot in both Eastern and Western cooking styles. Drinking soup is one of the Chinese supper time customs. Maybe it's expected time for soup darlings to have a refreshed "menu", that way, they will have the option to taste various types of soup constantly. The creators, LJ Loo and his significant other, Leong Mee Fong are affable individuals. They regularly welcome companions to go along with them for suppers. When Mee Fong was youthful, she helped her mom, who initially hailed from Guangdong, China to cook and bubble soup. </p>
            <p>Hence, she is knowledgeable about bubbling soup. Their companions continue offering her praises on her since quite a while ago bubbled soups. In this cookbook, them two offer 50 soup plans that are well known among their companions. The greater part of the plans is given verbally from companions all through Malaysia, at that point they tried to re-make the soups. The plans are ordered into warm substantial soup, umami fish soup, feeding dried food and Chinese natural soup, invigorating gourd, products of the soil soup, just as a sweet-smelling Western soup.</p>
            <p>This is a gathering of plans of nostalgic soups, Asian soups and Western soups. To wrap things up, since quite a while ago bubbled soups that is Mee Fong's skill. Fixing benefits are remembered for every formula for reference. On the head of that, the soup blends are one of a kind. Moving Soup Flavors will rouse you to bubble various soups that will heat up your entire family consistently.</p>
        </div>
        <h2>Book Price: RM 25.90</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Inspiring Soup Flavours">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>