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
	<title>Shorui-The Glass Castle</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Glass Castle</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook6.png" alt="biographybook6"/>
            <figcaption>Source: <a href="https://www.goodreads.com/book/show/7445.The_Glass_Castle">Goodreads</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Glass Castle</p>
        <p>Authors: Jeannette walls</p>
        <p>Published Date: March 2005</p>
        <p>Pages: 289 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
           <p><em>The Glass Castle</em>is a remarkable memoir of resilience and redemption, and a revelatory look into a family at once deeply dysfunctional and uniquely vibrant. When soberr, Jeannette's brilliant and charismatic father captured his children's imagination, teaching them physics geology, and how to embrace life fearlessly. But when he drank, he was dishonest and destructive. Her mother was a free spirit who abhorred the idea of domesticity and didn't want the responsibility of raising a family.</p>
           <p>The Walls children learned to take care of themselves. They fed, clothed and protected one another, and eventually found their way to New York. Their parents followed them, choosing to be homeless even as their children prospered.</p>
		   <p><em>The Glass Castle</em> is truly astonishing--a memoir permeated by the intense love of a peculiar but loyal family.</p>
        </div>
        <h2>Book Price: RM 101.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Glass Castle">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>