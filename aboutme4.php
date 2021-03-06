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
	<title>Shorui-Allan Cheboiwo Murungi</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
	<div id="membername">
     <p>Allan Cheboiwo Murungi</p>   
    </div>
    <div id="memberdetail">
        <div class="detail1">
            <p>Student ID: 102760283</p>
            <p>Gender: Male</p>
            <p>Occupation: Students</p>
            <p>Course: Bachelor Of Computer Science</p>
            <p>Email: <a href="mailto:102760283@students.swinburne.edu.my">102760283@students.swinburne.edu.my</a></p>
            <table id="detail1">
                <tr>
                    <th class="col1table">Contribution</th>
                    <th class="col2table">Description</th>
                </tr>
                <tr>
                    <td class="col1table">Product page</td>
                    <td class="col2table">Created at least 5 product pages of biography category.</td>
                </tr>
                <tr>
                    <td class="col1table">Disclaimer page</td>
                    <td class="col2table">Created the disclaimer page</td>
                </tr>
                <tr>
                    <td class="col1table">Profile page of team members</td>
                    <td class="col2table">Personal details according to the format required and consistently formatted with CSS</td>
                </tr>
                <tr>
                    <td class="col1table">Hierarchical Structure</td>
                    <td class="col2table">Having a plan on our website structure and discussing with other members</td>
                </tr>
            </table>

        </div>
        <div class="detail2"><img src="images/profile4.png" id="detail2" alt="Allan Cheboiwo Murugi" /></div>
    </div>

    <div class="borderpattern">
        <button type="button" onclick="proChange1()">Cyan</button>
        <button type="button" onclick="proChange2()">Brown</button>
        <button type="button" onclick="proChange3()">Black</button>
    </div>


    <footer id="aboutme1footer">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <p>Email: <a href="mailto:102760283@students.swinburne.edu.my">102760283@students.swinburne.edu.my</a></p>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>