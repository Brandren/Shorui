<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
	<link rel="icon" href="images/icon.png" type="image/jpg" sizes="16x16"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>Shorui</title>
    <script src="script/script.js"></script>
    <script src="script/enhancement.js"></script>
</head>
<body onload="trigger()">
    <?php include("include/homenavigation.php"); ?>
	<div id= "slider">
		<figure>
			<img src="images/slideshow1.png" alt="slideshow1" />
			<img src="images/slideshow2.png" alt="slideshow2" />
			<img src="images/slideshow3.png" alt="slideshow3" />
			<img src="images/slideshow4.png" alt="slideshow4" />
			<img src="images/slideshow5.png" alt="slideshow5" />
		</figure>
	</div>
	<div id="describe">
		<h1>Shorui</h1>
		<p>Our mission is to increase public enjoy reading and provide new four book genres to public. Reading a book will increase your vocabulary and increase your knowledge of how to use new words correctly. The website create since year 2020.</p>
	</div>
	<div id="feature">
		<div class="tickicon">
			<p>&#x2714;</p>
		</div>
		<div class="featurecols">
			<h1>Mobile Friendly</h1>
			<p>Shorui have simplified the buying steps so it is easy for your searching books.</p>
		</div>
		<div class="tickicon">
			<p>&#x2714;</p>
		</div>
		<div class="featurecols">
			<h1>High-Resolution</h1>
			<p>The high resolution photo is to allow readers to look at the details clearly.</p>
		</div>
		<div class="tickicon">
			<p>&#x2714;</p>
		</div>
		<div class="featurecols">
			<h1>Related Items</h1>
			<p>We only selling any browse genre books through this website.</p>
		</div>
	</div>
    <div id="discover">
    	<hr/>
    	<h2>Discover</h2>
    	<p>Browse Genres</p>
    	<div id="browse">
    		<div class="genre">
    			<a href="music.php"><div class="center">Music</div></a>
    			<a href="music.php"><img src="images/music.png" alt="music" /></a>
    		</div>
    		<div class="genre">
    			<a href="food.php"><div class="center">Food</div></a>
    			<a href="food.php"><img src="images/food.png" alt="food" /></a>
    		</div>
    		<div class="genre">
    			<a href="horror.php"><div class="center">Horror</div></a>
    			<a href="horror.php"><img src="images/horror.png" alt="horror" /></a>
    		</div>
    		<div class="genre">
    			<a href="biography.php"><div class="center">Biography</div></a>
    			<a href="biography.php"><img src="images/biography.png" alt="biography" /></a>
    		</div>
    	</div>
    </div>
    <div id="comment">
    	<hr/>
    	<h2>Comment</h2>
    	<p id="comarrow">&#10229; &#128433;&#65039; &#10230;</p>
    	<div id="comwrapper">
    		<div class="item">
    			<p>Oh my god, I want to buy your book now.</p>
    			<hr/>
    			<p>Nancy Boyd, CEO of Wellbook</p>
    		</div>
    		<div class="item">
    			<p>WOAH!! Nice and cheap book....</p>
    			<hr/>
    			<p>Liang Zheng, Sale Manager of Booklada</p>
    		</div>
    		<div class="item">
    			<p>That's was pleasantly unexpected.</p>
    			<hr/>
    			<p>Doncia Fabela, CEO of Publisherex</p>
    		</div>
    		<div class="item">
    			<p>This is great platform to sale book !!</p>
    			<hr/>
    			<p>Walters Zelda, Sale Manager of Cafeiva </p>
    		</div>
    		<div class="item">
    			<p>Thank you for your online service.</p>
    			<hr/>
    			<p>Dylan Nanney, Head of Yohon Marketing</p>
    		</div>
    		<div class="item">
    			<p>Hello! Amazing..Nice to meet you！</p>
    			<hr/>
    			<p>Yang Hu Xiu, CEO of Shopzen</p>
    		</div>
    	</div>
    </div>
    <div id="buybook">
    	<h2>What are you waiting for?</h2>
    	<p>Buy your favorite book here.</p>
    	<button onclick="window.location.href='enquiry.php' " class="buyon">Start Buy</button>
    </div>
    <footer id="homefooter">
    	<?php include("include/homefooterlink.php"); ?>
    	<hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>