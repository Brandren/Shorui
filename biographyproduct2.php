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
	<title>Shorui-Henry James: The imagination of Genius, A Biography</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
    <div id="productbook">
        <h1>Henry James: The imagination of Genius, A Biography</h1>
        <hr/>
    </div>
    <div id="booksize">
        <figure>
            <img src="images/biographybook2.png" alt="biographybook2"/>
            <figcaption>Source: <a href="https://www.amazon.com/Henry-James-Imagination-Genius-Biography-ebook/dp/B00C652YXS/ref=sr_1_1?dchild=1&keywords=Henry+James%3A+The+imagination+of+Genius%2C+A+Biography&qid=1601442614&s=digital-text&sr=1-1">Amazon</a></figcaption>
        </figure>
    </div>
    <div id="bookdetail">
        <h2>Book Details:</h2>
        <p>Book Name: Henry James: The imagination of Genius, A Biography</p>
        <p>Authors: Fred Kaplan</p>
        <p>Published Date: Apr 23, 2013</p>
        <p>Pages: 620 pages</p>
        <h2>Book Summary:</h2>
        <div class="bookphra">
            <p>"A good up-to-date one-volume life of Henry James was long overdue; Fred Kaplan ...has done the job splendidly with Henry James: The imagination of Genius...Here, at last, is a thoughtful, balanced book to give us a consistent and persuasive account of the writer's life and his development as an author."-Miranda Seymour, New York Times Book Review One of the most influential novelists, Henry James led a life that was as rich as his writing.</p>
			<p> Born into an eccentric and difficult family, he left the United States for Europe, where he quickly became a fixture of the expatriate writing community. Fred Kaplan recreates the world of Henry James: his friendships with Edith Warton and Joseph Conrad, his love of all things exquisite-including exquisite writing-and his quest for understanding human nature. As James himself advocated and would have wanted, this is an artful, dramatic biography, placing the chronological narrative of James' life in the historical context of his times. "The twenty-one-year-old Henry James, Jr., preferred to be a writer rather than a soldier. His motives for writing were clear to himself, and they were not unusual: he desired fame and fortune. Whatever additional enriching compliacations that were to make him notorious for the complexity of his style and thought, the initial motivation remained constant. Deeply stubborn and persistently willful, he wanted praise and money, the rewards of recognition of what he believed to be genius, on terms that he himselfwanted to establish.</p>
            <p>Fred Kaplan recreates the world of Henry James: his friendships with Edith Warton and Joseph Conrad, his love of all things exquisite-including exquisite writing-and his quest for understanding human nature. As James himself advocated and would have wanted, this is an artful, dramatic biography, placing the chronological narrative of James' life in the historical context of his times.</p>
		</div>
        <h2>Book Price: RM 95.00</h2>
        <button onclick="product_submit(); window.location.href='enquiry.php' " class="buyon2" id="product_name" value="Henry James: The imagination of Genius, A Biography">Start Buy</button>
    </div>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="productfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>