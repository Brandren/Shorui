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
	<title>Shorui-Florence's Best Nonya Recipes</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Florence's Best Nonya Recipes</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook1.png" alt="foodbook1"/>
            <figcaption>Source: <a href="https://www.mphonline.com/en/productdetails/books/food-and-drink/9789814398206">MPH Bookstore Sdn Bhd</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Florence's Best Nyonya Recipes</p>
        <p>Authors: Florence Tan</p>
        <p>Published Date: November 1, 2012</p>
        <p>Pages: 128 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Nyonya dishes with its interesting, zesty, appetizing and sweet flavours are presently inside simple reach with this assortment from veteran Nyonya gourmet specialist, Florence Tan. Figure out how to cook perpetual top picks like PineapplePatchree, Chicken Rumpah, and Pang Susi, a treat of appetizing meat encased in the sweet baked good.</p>
            <p>The detailed readiness of Nyonya cooking is clarified, from the flavouring and hot glue to nuts and bolts like food shading and coconut milk, permitting you to value the numerous layers and kinds of Nyonya fare.	With simple to-adhere to directions and cautious subtleties, Florence Tan makes it a breeze to repeat the best suppers from her assortment of Straits Chinese plans.</p>
        </div>
        <h2>Book Price: RM 49.90</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Florence's Best Nyonya Recipes">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>