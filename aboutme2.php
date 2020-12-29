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
	<title>Shorui-Ho Kai Xian</title>
</head>
<body>
	<?php include("include/navigation.php"); ?>
    
	<div id="membername">
     <p>Ho Kai Xian</p>   
    </div>
    <div id="memberdetail">
        <div class="detail1">
            <p>Student ID: 101218529</p>
            <p>Gender: Male</p>
            <p>Occupation: Students</p>
            <p>Course: Bachelor of Engineering (Robotics and Mechatronics) (Honours) / Bachelor of Computer Science (Software Development)</p>
            <p>Email: <a href="mailto:101218529@students.swinburne.edu.my">101218529@students.swinburne.edu.my</a></p>
            <table id="detail1">
                <tr>
                    <th class="col1table">Contribution</th>
                    <th class="col2table">Description</th>
                </tr>
                <tr>
                    <td class="col1table">Profile page of team members</td>
                    <td class="col2table">Personal details according to the format required and consistently formatted with CSS.</td>
                </tr>
                <tr>
                    <td class="col1table">Product page</td>
                    <td class="col2table">Create at least 5 product pages about food category.</td>
                </tr>
                <tr>
                    <td class="col1table">Enhancement page</td>
                    <td class="col2table">When there is any enhancement that goes beyond the requirements of the assignments, this enhancement.html will further explain the enhancement and CITING the resources of it. There is also a HYPERLINK to where we have applied that extension in our Web site.</td>
                </tr>
                <tr>
                    <td class="col1table">Hierarchical structure</td>
                    <td class="col2table">Having a plan on our website structure and discuss with other members.</td>
                </tr>
                
            </table>

        </div>
        <div class="detail2"><img src="images/profile2.png" id="detail2" alt="Ho Kai Xian" /></div>
    </div>

    <div class="borderpattern">
        <button type="button" onclick="proChange1()">Cyan</button>
        <button type="button" onclick="proChange2()">Brown</button>
        <button type="button" onclick="proChange3()">Black</button>
    </div>


    <footer id="aboutme1footer">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <p>Email: <a href="mailto:101218529@students.swinburne.edu.my">101218529@students.swinburne.edu.my</a></p>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>