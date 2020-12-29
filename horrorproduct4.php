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
	<title>Shorui-The Institute</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Institute</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook4.png" alt="horrorbook4"/>
            <figcaption>Source: <a href="https://www.amazon.com/Institute-Novel-Stephen-King/dp/1508279063">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Institute</p>
        <p>Authors: Stephen King</p>
        <p>Published Date: September 10, 2019</p>
        <p>Pages: 576 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>In the middle of the night, in a house on a quiet street in suburban Minneapolis, intruders silently murder Luke Ellis’s parents and load him into a black SUV. The operation takes less than two minutes. Luke will wake up at The Institute, in a room that looks just like his own, except there’s no window. And outside his door are other doors, behind which are other kids with special talents—telekinesis and telepathy—who got to this place the same way Luke did: Kalisha, Nick, George, Iris, and ten-year-old Avery Dixon. They are all in Front Half. Others, Luke learns, graduated to Back Half, “like the roach motel,” Kalisha says. “You check in, but you don’t check out.”</p>
            <p>In this most sinister of institutions, the director, Mrs. Sigsby, and her staff are ruthlessly dedicated to extracting from these children the force of their extranormal gifts. There are no scruples here. If you go along, you get tokens for the vending machines. If you don’t, punishment is brutal. As each new victim disappears to Back Half, Luke becomes more and more desperate to get out and get help. But no one has ever escaped from the Institute.</p>
        </div>
        <h2>Book Price: RM 52.45</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Institute">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>