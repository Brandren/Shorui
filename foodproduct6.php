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
	<title>Shorui-Traditional Festival Desserts</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Traditional Festival Desserts</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook6.png" alt="foodbook6"/>
            <figcaption>Source: <a href="https://www.popularonline.com.my/default/catalog/product/view/id/166734/s/2000000767246/?did=5897">Popular online</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Traditional Festival Desserts</p>
        <p>Authors:  Various Authors</p>
        <p>Published Date: July 1, 2020</p>
        <p>Pages: 128 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Sweets and cakes are basic in Chinese culture. Different kinds of sweets and baked goods can be seen during customary celebrations. These cakes mirror the contrasts among societies and narratives. They are the significant parts in contributions to the progenitor and divine beings, an approach to improve family holding through creation the baked goods together, and furthermore a heavenly memory during the celebrations. </p>
            <p>Inside this cookbook are 50 conventional Chinese celebration treats and baked goods. This book comprises of normal cakes, for example, Sticky Rice Cake, Hokkien Fried Glutinous Rice Dumpling, White Lotus Paste Mooncake, Wormwood Leaf Glutinous Rice Cake, Tri-shading Glutinous Rice Ball and Traditional Wedding Pastry. Baked goods, for example, Black Glutinous Cake promotion White Glutinous Cake that are more uncommon these days are incorporated as well. </p>
            <p>Perusers can figure out how to make these cakes with affectionate recollections through the plans from this cookbook.</p>
        </div>
        <h2>Book Price: RM 25.90</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Traditional Festival Desserts">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>