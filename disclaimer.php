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
	<title>Shorui-Disclaimer</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
	<div id="disclaimer">
		<h1>Disclaimer</h1>
		<div>
			<p>This website is created mainly for educational and non-commercial use only. It is a partial fulfillment for completion of unit COS 10011 - Creating Web Applications offered in Swinburne University of Technology, Sarawak Campus for Semester 2, 2020.</p>
			<p>The web-master and author(s) do not represent the business entity.</p>
			<p>The content of the pages of this website might be out-dated or inaccurate, thus, the author(s) and web-master does not take any responsibility for correct information disseminate or cited from this website.</p>
			<p>If you believe that information of any kind on this website is an infringement of copyright in material in which you either own copyright or are authorized to exercise the rights of a copyright owner, kindly contact the web-master <a href="mailto:101211418@students.swinburne.edu.my">101211418@students.swinburne.edu.my</a> for removal.</p>
		</div>
	</div>

    <div class="borderpattern">
        <button type="button" onclick="disclaimerChange1()">Red Border</button>
        <button type="button" onclick="disclaimerChange2()">Brown Border</button>
        <button type="button" onclick="disclaimerChange3()">Black Border</button>
    </div>
	
    
    <footer id="disclaimerfooter">
    	<?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>