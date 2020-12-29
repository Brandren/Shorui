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
	<title>Shorui-A biography of Jimi Hendrix: Room full of mirrors</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>A biography of Jimi Hendrix: Room full of mirrors</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook3.png" alt="biographybook3"/>
            <figcaption>Source: <a href="https://www.amazon.com/Room-Full-Mirrors-Biography-Hendrix/dp/0786888415/ref=sr_1_1?dchild=1&keywords=A+biography+of+Jimi+Hendrix%3A+Room+full+of+mirrors&qid=1601442698&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: A biography of Jimi Hendrix: Room full of mirrors</p>
        <p>Authors: Charles R. Cross</p>
        <p>Published Date: January 2000</p>
        <p>Pages: 400 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
           <p>Vet rock scribe Cross delivers one of the best biographies to date of the late guitar god Jimi Hendrix. Although there is no shortage of bios--or posthumously released recordings--of Hendrix, Cross distinguishes this effort with information gleaned from interviews with primary sources, including Hendrix's surviving family members. Cross is able to provide a fresher and more detailed portrait than appeared in Al Hendrix's surviving family members. Cross is able to provide a fresher and more detailed portrait than appeared in Al Hendrix's (Jimi's deceased father) autobiography, including updsates on the intra-family squabbles caused by Al's will.</p>
           <p> Cross covers all the usual Hendrix bases and then some. Was Jimi bisexual? Quite possibly. Did the DAR call for the Monkees to kick the fledging Jimi Hendrix Experience off their 1967 tour? No; that was a publicly stunt by manager Chas Chandler. Did Hendrix enjoy his seminal involvement with the Plaster Casters? You bet. Admirably comprehensive and well referenced, this is the Hendrix biography to acquire if you can acquire only one.</p>
        </div>
        <h2>Book Price: RM 60.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="A biography of Jimi Hendrix: Room full of mirrors">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>