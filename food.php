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
	<title>Shorui-Food</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="product">
        <h1>Food</h1>
        <hr/>
        <p>The recipes of some cooks out there that would let you learn to cook like them. Find delicious and easy-to-make recipes by buying the books recommended below!!</p>
    </div>
    <div id="productcard1">
        <div class="productpic">
            <figure>
                <a href="foodproduct1.php"><img src="images/foodbook1.png" alt="foodbook1"/></a>
                <figcaption>Florence's Best Nyonya Recipes</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="foodproduct2.php"><img src="images/foodbook2.png" alt="foodbook2"/></a>
                <figcaption>Korean Homestyle Cooking</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="foodproduct3.php"><img src="images/foodbook3.png" alt="foodbook3"/></a>
                <figcaption>The Little Malaysian CookBook</figcaption>
            </figure>
        </div>
    </div>

    <div id="productcard2">
        <div class="productpic">
            <figure>
                <a href="foodproduct4.php"><img src="images/foodbook4.png" alt="foodbook4"/></a>
                <figcaption>Whole Grain Sourdough at Home</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="foodproduct5.php"><img src="images/foodbook5.png" alt="foodbook5"/></a>
                <figcaption>Inspiring Soup Flavours</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="foodproduct6.php"><img src="images/foodbook6.png" alt="foodbook6"/></a>
                <figcaption>Traditional Festival Desserts</figcaption>
            </figure>
        </div>
    </div>

    <footer id="musicfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>