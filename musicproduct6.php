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
	<title>Shorui-Beethoven's Symphonies: An Artistic Vision</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Beethoven's Symphonies: An Artistic Vision</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook6.png" alt="musicbook6"/>
            <figcaption>Source: <a href="https://www.amazon.com/Beethovens-Symphonies-Artistic-Lewis-Lockwood/dp/0393353850/ref=sr_1_1?dchild=1&keywords=Beethoven%27s+Symphonies%3A+An+Artistic+Vision&qid=1601380030&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Beethoven's Symphonies: An Artistic Vision</p>
        <p>Authors: Lewis Lockwood</p>
        <p>Published Date: February 28, 2017</p>
        <p>Pages: 304 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Beethoven left his huge music material that documents the early stages of almost everything he wrote. Lewis Lockwood sketching on his sketchbook, reveal the surprising scope and original innovation process to composer’s mind.</p>
            <p>Everybody like Beethoven’s symphonies mostly for their emotional cogency, variety, and unprecedented individuality.Beethoven labored to complete nine of them over his lifetime like a quarter of Mozart’s output and a tenth of Haydn’s. However, they have no musical works are more iconic, more indelibly stamped on the memory of anyone who has heard them.</p>
            <p>Lockwood continue focusing on studying the surviving sources about Beethoven’s creative work, including concept sketches for symphonies that were never finished.From the first symphonies written during his deaf period to the commemorative ninth, Lockwood brought Beethoven's lifelong enthusiasm to life and created unparalleled beautiful works.</p>
        </div>
        <h2>Book Price: RM 98.70</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Beethoven's Symphonies: An Artistic Vision">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>