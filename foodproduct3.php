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
	<title>Shorui-The Little Malaysian CookBook</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Little Malaysian CookBook</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/foodbook3.png" alt="foodbook3"/>
            <figcaption>Source: <a href="https://www.popularonline.com.my/default/catalog/product/view/id/129782/?did=5897">Popular online</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Little Malaysian CookBook</p>
        <p>Authors: Wendy Hutton</p>
        <p>Published Date: January 18, 2018</p>
        <p>Pages: 104 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>The Little Malaysian Cookbook offers attempted and tried plans from prestigious food essayist, Wendy Hutton, for a portion of the landmass' best-adored nourishments. Find famous vendor dishes, for example, Hainanese chicken rice, satay with sweet nut sauce, tart Assam laksa, fragrant nasi lemak and flexible roti jala that can be delighted in as a tidbit or principle dinner. Clarified plans guarantee that any home cook can deliver these legitimate and delectable Malaysian dishes to impart to loved ones.</p>
        </div>
        <h2>Book Price: RM 49.90</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Little Malaysian CookBook">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>