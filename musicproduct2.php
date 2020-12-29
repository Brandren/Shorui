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
	<title>Shorui-The History of Music in Fifty Instruments</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The History of Music in Fifty Instruments</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook2.png" alt="musicbook2"/>
            <figcaption>Source: <a href="https://www.amazon.com/History-Music-Fifty-Instruments/dp/1770854282/ref=sr_1_1?dchild=1&keywords=The+History+of+Music+in+Fifty+Instruments&qid=1601380362&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The History of Music in Fifty Instruments</p>
        <p>Authors: Philip Wilkinson</p>
        <p>Published Date: September 11, 2014</p>
        <p>Pages: 224 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>The History of Music in 50 Instruments told a story about music instrumental in 400 year that make an orchestra. It well describes musical history with clear information. Next, it explains the role of each instrument in the orchestra and the importance in the development of music. It includes photograph or painting of the instruments.</p>
            <p>There was arrange accordingly the 50 instruments in the book list. For example, woodwind, brass, percussion and string sections of an orchestra. Classic instruments are included violin, cello, flute, oboe, clarinet, harp and more. Besides of music instruments, vocal music also a boom time for instrumental music. All musicians playing together in bands or consorts became common, and the instruments they played developed too.</p>
            <p>Moreover, it provides classic or modern type of music and the instruments. Also, it explain how to play the music instruments as well as tune the instruments. They also told the musicians how to examine the particular music instruments properly. This book have enough information tour of the orchestra to musicians, teachers and students, and all who enjoy music.</p>
        </div>
        <h2>Book Price: RM 119.80</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The History of Music in Fifty Instruments">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="prosuctfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>