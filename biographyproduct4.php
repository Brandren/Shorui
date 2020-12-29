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
	<title>Shorui-IDA a sword among lions</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>IDA a sword among lions</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook4.png" alt="biographybook4"/>
            <figcaption>Source: <a href="https://www.amazon.com/Ida-Sword-Campaign-Against-Lynching/dp/0060797363/ref=sr_1_1?dchild=1&keywords=IDA+a+sword+among+lions&qid=1601442783&sr=8-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: IDA a sword among lions</p>
        <p>Authors: Paula J. Giddings</p>
        <p>Published Date: March 3, 2009</p>
        <p>Pages: 832 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
           <p>From a thinker who Maya Angelou has praise for shining "a brilliant light on the lives of women left in the shadow of history", comes the definitive biography of Ida B. Wells--crusading journalist and pioneer in the fight for women's suffrage and against segregation and lynchings. Ida B. Wells was born into slavery and raised in the Victorian age yet emerged--through her fierce political battles and progressive thinking--as the first "modern" black women in the nation's history. Wells began her activist career when she tried to segregate a first-class railway car in Memphis.</p>
           <p>Her most abiding fight would be the one against lynching, a crime in which she saw all the themes she held most dear coalesce: sexuality, race, and the law.</p>
        </div>
        <h2>Book Price: RM 65.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="IDA a sword among lions">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>