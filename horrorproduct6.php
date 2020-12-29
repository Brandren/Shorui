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
	<title>Shorui-Dracula</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Dracula</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/horrorbook6.png" alt="horrorbook6"/>
            <figcaption>Source: <a href="https://www.amazon.com/Dracula-Bram-Stoker/dp/1503261387">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Dracula</p>
        <p>Authors: Bram Stoker's</p>
        <p>Published Date: May 26, 1897</p>
        <p>pages: 418 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>Dracula comprises journal entries, letters, and telegrams written by the main characters. It begins with Jonathan Harker, a young English lawyer, as he travels to Transylvania. Harker plans to meet with Count Dracula, a client of his firm, in order to finalize a property transaction. When he arrives in Transylvania, the locals react with terror after he discloses his destination: Castle Dracula. Though this unsettles him slightly, he continues onward. The ominous howling of wolves rings through the air as he arrives at the castle. When Harker meets Dracula, he acknowledges that the man is pale, gaunt, and strange. Harker becomes further concerned when, after Harker cuts himself while shaving, Dracula lunges at his throat. Soon after, Harker is seduced by three female vampires, from whom he barely escapes. He then learns Dracula’s secret—that he is a vampire and survives by drinking human blood. Harker correctly assumes that he is to be the count’s next victim. He attacks the count, but his efforts are unsuccessful. Dracula leaves Harker trapped in the castle and then, along with 50 boxes of dirt, departs for England.</p>
        </div>
        <h2>Book Price: RM 83.57</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Dracula">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>