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
	<title>Shorui-Password Rule</title>
</head>
<style>
    #pwdruleheading h1{
    width: 100%;
    padding-top:2%; 
    padding-bottom:2%;
    font-size: 200%;
    text-align: center;
    }

    #pwdrule{
        width: 50%;
        margin: auto;
        border: 3px solid rgb(255,127,80);
        box-shadow: 5px -1px rgba(0,0,0,0.3);
        border-radius: 10px;
        padding: 2%;
        margin-top: 1%;
        margin-bottom: 5%; 
    }

    #pwdrule h2{
        padding-bottom: 2%;
        font-size: 120%;
    }

    #pwdrule p{
        text-align: justify;
        font-size: 100%;
    }

    /* Use a media query to add a breakpoint at 1040px: */
    @media screen and (max-width: 1040px) {
        #pwdrule{
            width: 65%;
            margin: auto;
            border: 3px solid rgb(255,127,80);
            box-shadow: 5px -1px rgba(0,0,0,0.3);
            padding: 2%;
            margin-top: 1%;
            margin-bottom: 5%; 
        }

    }

    /* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #pwdrule{
            width: 76%;
            margin: auto;
            border: 3px solid rgb(255,127,80);
            box-shadow: 5px -1px rgba(0,0,0,0.3);
            padding: 2%;
            margin-top: 1%;
            margin-bottom: 5%; 
        }

    }




</style>
<body>
	<?php include("include/navigation.php"); ?>

	<div id="pwdruleheading">
        <h1>Password Rule</h1>
    </div>
    <section id="pwdrule">
        <h2>1. Aviod Using Special Characters</h2>
        <p> - You should prevent using special character for your password like ~, `, !, @, #, $, %, ^, & or *. For example, Abc@12, #312John, Gem$^ and etc.</p>

        <br/>

        <h2>2. At Least 8 Characters</h2>
        <p> - You should have at least 8 proper characters like uppercase letter from A to Z, lowercase letter from a to z or numbers from 0 to 9. For example, Abc123126 and etc.</p>

        <br/>

        <h2>3. At Least 1 Number</h2>
        <p> - You should have at least 1 mumber like 0 to 9. For example, Abc123126 and etc.</p>

        <br/>

        <h2>4. At Least 1 Uppercase Letter</h2>
        <p> - You should have at least 1 uppercase letter like A to Z. For example, Abc123126 and etc.</p>

        <br/>

        <h2>5. At Least 1 Lowercase Letter</h2>
        <p> - You should have at least 1 lowercase letter like a to z. For example, Abc123126 and etc.</p>

        <br/>
        
        <h2>6. Password Match</h2>
        <p> - You should match your signup password with your repeat password while you register the password. For example, Abc123126 must be same at password field and repeat password field.</p>
    </section>

    <footer id="aboutmefooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>