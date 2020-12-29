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
	<title>Shorui-About Us</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>

	<div id="founder">
        <h1>Founder</h1>
    </div>
    <div id="profilecard1">
        <div class="profilepic">
            <figure>
                <a href="aboutme1.php"><img src="images/profile1.png" alt="profile1" /></a>
                <figcaption>Ng Jing Ping</figcaption>
            </figure>
        </div>
        <div class="profilepic">
            <figure>
                <a href="aboutme2.php"><img src="images/profile2.png" alt="profile2" /></a>
                <figcaption>Ho Kai Xian</figcaption>
            </figure>
        </div>
    </div>
    <div id="profilecard2">
        <div class="profilepic">
            <figure>
                <a href="aboutme3.php"><img src="images/profile3.png" alt="profile3" /></a>
                <figcaption>Hiew Ly Ken</figcaption>
            </figure>
        </div>
        <div class="profilepic">
            <figure>
                <a href="aboutme4.php"><img src="images/profile4.png" alt="profile4" /></a>
                <figcaption>Allan Cheboiwo Murungi</figcaption>
            </figure>
        </div>
    </div>


    <footer id="aboutmefooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>