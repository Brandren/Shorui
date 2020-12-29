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
	<title>Shorui-The Definitive biography of the genius of Robin Williams</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Definitive biography of the genius of Robin Williams</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook1.png" alt="biographybook1"/>
            <figcaption>Source: <a href="https://www.amazon.com/Robin-Definitive-Biography-Williams-ebook/dp/B079RMB1XC">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The definitive biography of the genius of Robin Williams</p>
        <p>Authors: Dave Itzkoff</p>
        <p>Published Date: May 29, 2018</p>
        <p>Pages: 623 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>From his rapid-fire of stand-up comedy riffs to his breakout role in <em> Mork & Mindy </em> and his Academy Award-winning performance in <em>Good Will Hunting </em>, Robin Williams was a singularly innovative and beloved entertainer.</p>
            <p>As Dave Itzkoff shows in his revelatory biography, Williams comic brilliance masked a deep well of conflicting emotions and self-doubt, which he drew upon in his comedy and celebrated films like <em>Dead Poets Society &amp; Good Morning, Vietnam &amp; </em>The Fisher King &amp; <em>Aladdin </em>and <em>Mrs Doubtfire</em>, where he showcased his limitless gift for improvisation to bring to life a wide range of characters.</p>
			<p>Itzkoff also shows how Williams struggled mightily with addiction and depression - topics he discussed openly while performing and during interviews - and with a debilitating condition at the end of his life that affected him in ways his fans never knew. Drawing on more than a hundred original interviews with family, friends and colleagues, as well as extensive archival research, Robin is a fresh and original look at a man whose work touched so many lives.
			"David Itzkoff's <em>Robin</em> is much like the man himself? warm, funny, frenetic, with a core of darkness and empathy. It gets at that darkness, and shows how it fueled, beautifully, the manic brain and kinetic body of the man himself.</p>
		</div>
        <h2>Book Price: RM 78.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Definitive biography of the genius of Robin Williams">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>