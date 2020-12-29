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
	<title>Shorui-Korean Homestyle Cooking</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Korean Homestyle Cooking</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook2.png" alt="foodbook2"/>
            <figcaption>Source: <a href="https://www.popularonline.com.my/default/catalog/product/view/id/148438/s/9780804851206/?did=5897">Popular online</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Korean Homestyle Cooking</p>
        <p>Authors: Hatsue Shigenobu</p>
        <p>Published Date: August 8, 2019</p>
        <p>Pages: 144 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Sweet-smelling, appetizing, interesting, and powerful everybody is discussing the fascinating flavours and surfaces of Korean food! With this new Korean cookbook, home cooks wherever can get ready sound and fulfilling dinners utilizing fixings that are accessible in any grocery store, utilizing a couple of basic and recognizable methods.</p>
            <p>This assortment of Korean plans incorporates something for everybody: Marinated Barbecued Kalbi Beef Short Ribs; Bibimbap Rice Bowls Topped with Vegetables and Beef; Napa Cabbage Kimchi, Daikon Kimchi and other salted vegetables; Stir-singed Dakgalbi Chicken with Garlic Bean Sauce; Soy Marinated Bulgogi Beef with Spring Onions; Tangy Japchae Beanthread Noodles with Sesame and Fresh Vegetables; And a great deal more!</p>
            <p>The dishes featured in Korean Homestyle Cooking incorporate all the exemplary Korean tidbits, sides dishes, soups and stews, primary courses, and rice and noodle dishes even pastries and beverages, including Yukgaejang Spicy Beef Soup; Pork and Pepper Buchimgae Savory Pancakes; Pork and Kimchi Potstickers; Seafood and Daikon Kimchi Stew; Tomato Kimchi; Clam and Chive Soup; Korean Fried Rice; Yuja Citrus Tea; Makgeolli Sparkling Rice Wine Sherbet; Crunchy Sweet Potato Sticks.</p>
			<p>With probiotic superfood properties, Korean cooking additionally has many medical advantages and is ideal for anybody evaluating a macrobiotic eating regimen. Korean Homestyle Cooking brings the life-changing kinds of Korea into your home no takeout menu required!</p>
        </div>
        <h2>Book Price: RM 57.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Korean Homestyle Cooking">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="prosuctfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>