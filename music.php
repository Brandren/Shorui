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
	<title>Shorui-Music</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="product">
        <h1>Music</h1>
        <hr/>
        <p>Music is an extra skill or an education for human to apply in life. it can improve readers' new knowledges especially musicians. Furthermore, music can reduce pressure while increase entertainment to readers. Website founder provides some kinds of music book at the website page.</p>
    </div>
    <div id="productcard1">
        <div class="productpic">
            <figure>
                <a href="musicproduct1.php"><img src="images/musicbook1.png" alt="musicbook1"/></a>
                <figcaption>Music: The Definitive Visual History</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="musicproduct2.php"><img src="images/musicbook2.png" alt="musicbook2"/></a>
                <figcaption>The History of Music in Fifty Instruments</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="musicproduct3.php"><img src="images/musicbook3.png" alt="musicbook3"/></a>
                <figcaption>The Jazz Standards: A Guide to the Repertoire</figcaption>
            </figure>
        </div>
    </div>

    <div id="productcard2">
        <div class="productpic">
            <figure>
                <a href="musicproduct4.php"><img src="images/musicbook4.png" alt="musicbook4"/></a>
                <figcaption>Brass Instruments: Their History and Development</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="musicproduct5.php"><img src="images/musicbook5.png" alt="musicbook5"/></a>
                <figcaption>Antonio Stradivari: His Life and Work</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="musicproduct6.php"><img src="images/musicbook6.png" alt="musicbook6"/></a>
                <figcaption>Beethoven's Symphonies: An Artistic Vision</figcaption>
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