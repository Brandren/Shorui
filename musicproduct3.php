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
	<title>Shorui-The Jazz Standards: A Guide to the Repertoire</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>The Jazz Standards: A Guide to the Repertoire</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/musicbook3.png" alt="musicbook3"/>
            <figcaption>Source: <a href="https://www.amazon.com/Jazz-Standards-Guide-Repertoire/dp/0199937397/ref=sr_1_1?dchild=1&keywords=The+Jazz+Standards%3A+A+Guide+to+the+Repertoire&qid=1601380434&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: The Jazz Standards: A Guide to the Repertoire</p>
        <p>Authors: Ted Gioia</p>
        <p>Published Date: July 6, 2012</p>
        <p>Pages: 544 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>This book have 250 different jazz songs, and includes a listening guide to more than 2,000 recordings book for music to music lovers. Many books are provided jazz CDs or discuss musicians and styles, but this book will begin with tell the story of the songs themselves.</p>
            <p>Whether we are listening music radio or participate music club, this book is indispensable and worthwhile because we gain new knowledge about Jazz music.Musicians who have experience in the field, provide their history and tips about how they have been performed by different generations of jazz artists. Nowaday, students who learning Jazz music have essential all of these cornerstones of the music repertoire.</p>
            <p>Ted Gioia, author of The History of Jazz and Delta Blues, give a perfect guide to lead readers through the classics of the genre. The book describes he is a jazz pianist and recording artist and performed these songs for decades. He also increase his reputation on expert in jazz music and provide his deep experience with this music in creating the ultimate work on the subject.</p>
        </div>
        <h2>Book Price: RM 112.71</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="The Jazz Standards: A Guide to the Repertoire">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>