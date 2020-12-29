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
	<title>Shorui-Biography</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="product">
        <h1>Biography</h1>
        <hr/>
        <p>Biography are books that are written about a person's life (popular and unpopular) that basically describe political, economic and social events that occured in the person's life. This genre is particularly known for its art and brilliance in describing peoples' lives in words.</p>
    </div>
    <div id="productcard1">
        <div class="productpic">
            <figure>
                <a href="biographyproduct1.php"><img src="images/biographybook1.png" alt="biographybook1"/></a>
                <figcaption>Definitive biography of the genius of Robin Williams</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="biographyproduct2.php"><img src="images/biographybook2.png" alt="biographybook2"/></a>
                <figcaption>Henry James the imagination of genius</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="biographyproduct3.php"><img src="images/biographybook3.png" alt="biographybook3"/></a>
                <figcaption>A biography of Jimi Hendrix: Room full of mirrors</figcaption>
            </figure>
        </div>
    </div>

    <div id="productcard2">
        <div class="productpic">
            <figure>
                <a href="biographyproduct4.php"><img src="images/biographybook4.png" alt="biographybook4"/></a>
                <figcaption>IDA a sword among lions</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="biographyproduct5.php"><img src="images/biographybook5.png" alt="biographybook5"/></a>
                <figcaption>Wild: From Lost to Found on the Pacific Crest Trail</figcaption>
            </figure>
        </div>
        <div class="productpic">
            <figure>
                <a href="biographyproduct6.php"><img src="images/biographybook6.png" alt="biographybook6"/></a>
                <figcaption>The Glass Castle</figcaption>
            </figure>
        </div>
    </div>


    <footer id="musicfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>