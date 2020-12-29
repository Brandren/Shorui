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
	<title>Shorui-Horror</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="product">
        <h1>Horror</h1>
        <hr/>
        <p>These genre are all horror novel that will give you goosebumps and a chill to your bone. Be sure to turn your lights on before you read.</p>
    </div>
    <div id="productcard1">
        <div class="productpic">
            <figure>
                <a href="horrorproduct1.php"><img src="images/horrorbook1.png" alt="horrorbook1"/></a>
                <figcaption>IT</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="horrorproduct2.php"><img src="images/horrorbook2.png" alt="horrorbook2"/></a>
                <figcaption>The Only Good Indians</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="horrorproduct3.php"><img src="images/horrorbook3.png" alt="horrorbook3"/></a>
                <figcaption>Pet Semetary</figcaption>
            </figure>
        </div>
    </div>

    <div id="productcard2">
        <div class="productpic">
            <figure>
                <a href="horrorproduct4.php"><img src="images/horrorbook4.png" alt="horrorbook4"/></a>
                <figcaption>The Institute</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="horrorproduct5.php"><img src="images/horrorbook5.png" alt="horrorbook5"/></a>
                <figcaption>The Girl In Red</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="horrorproduct6.php"><img src="images/horrorbook6.png" alt="horrorbook6"/></a>
                <figcaption>Dracula</figcaption>
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