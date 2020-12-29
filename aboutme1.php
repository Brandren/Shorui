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
	<title>Shorui-Ng Jing Ping</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
	<div id="membername">
     <p>Ng Jing Ping</p>   
    </div>
    <div id="memberdetail">
        <div class="detail1">
            <p>Student ID: 101211418</p>
            <p>Gender: Male</p>
            <p>Occupation: Students</p>
            <p>Course: Bachelor Of Computer Science</p>
            <p>Email: <a href="mailto:101211418@students.swinburne.edu.my">101211418@students.swinburne.edu.my</a></p>
            <table id="detail1"> 
                <tr>
                    <th class="col1table">Contribution</th>
                    <th class="col2table">Description</th>
                </tr>
                <tr>
                    <td class="col1table">Homepage</td>
                    <td class="col2table">Create the slideshow animation at the website's homepage. Moreover, I create horizontal scroll effect at comment section to reduce the page size.</td>
                </tr>
                <tr>
                    <td class="col1table">Aboutme page</td>
                    <td class="col2table">Combine all the members' individual aboutme page link together within the page.</td>
                </tr>
                <tr>
                    <td class="col1table">Product page</td>
                    <td class="col2table">Create at least 5 product pages about music book category.</td>
                </tr>
                <tr>
                    <td class="col1table">Hierarchical structure</td>
                    <td class="col2table">Having a plan on our website structure and discuss with other members.</td>
                </tr>
                
            </table>

        </div>
        <div class="detail2"><img src="images/profile1.png" id="detail2" alt="Ng Jing Ping" /></div>
    </div>

    <div class="borderpattern">
        <button type="button" onclick="proChange1()">Cyan</button>
        <button type="button" onclick="proChange2()">Brown</button>
        <button type="button" onclick="proChange3()">Black</button>
    </div>


    <footer id="aboutme1footer">
        <?php include("include/footerlink.php"); ?>
    	<hr/>
        <p>Email: <a href="mailto:101211418@students.swinburne.edu.my">101211418@students.swinburne.edu.my</a></p>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>