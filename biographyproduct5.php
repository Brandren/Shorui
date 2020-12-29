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
	<title>Wild: From Lost to Found on the Pacific Crest Trail</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Wild: From Lost to Found on the Pacific Crest Trail</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook5.png" alt="biographybook5"/>
            <figcaption>Source: <a href="https://www.amazon.com/Wild-Found-Pacific-Crest-Trail/dp/0307476073/ref=sr_1_1?dchild=1&keywords=Wild%3A+From+Lost+to+Found+on+the+Pacific+Crest+Trail&qid=1601442839&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Wild: From Lost to Found on the Pacific Crest Trail</p>
        <p>Authors: Cheryl Strayed</p>
        <p>Published Date: March 20, 2012</p>
        <p>Pages: 338 page</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
           <p>At twenty-two, Cheryl Strayed thought she had lost everything. In the wake of her mother's death, her family scattered and her own marriage was soon destroyed. Four years later, with nothing more to lose, she made the most impulsive decision of her life. With no experience or training, driven only by blind will, she would hike more than a thousand miles of the Pacific Crest Trail from the Mojave Desert through Califronia and Oregon to Washington State--and she would do it alone. Told with suspense and style, sparkling with warmth and humor, Wild powerfully captures the terrors and pleasures of one young woman forging ahead against all odds on a journey that maddened, strengthened, and ultimately healed her.</p>
		</div>
        <h2>Book Price: RM 79.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Wild: From Lost to Found on the Pacific Crest Trail">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>