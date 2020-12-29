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
	<title>Shorui-Log In </title>
</head>
<style>
    #log{
        margin: auto;
        margin-top: 10%;
        padding: 0;
        width: 40%;
        text-align: center;
        margin-bottom: 20%;
    }

    #log fieldset{
        width: 100%;
        border: 3px solid rgb(255,127,80);
        box-shadow: 5px -1px rgba(0,0,0,0.3);
        padding: 3%;
    }

    #log fieldset h1{
        text-align: center;
    }

    #log fieldset h1{
        text-align: center;
        padding: 2%;
        font-size: 200%;
    }


    #log input[type=text], #log input[type=password]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    #login {
        transition: .5s ease;
        box-shadow: 3px 3px rgba(0,0,0,0.3);
        background-color: #976502;
        border: none;
        color: white;
        padding: 2% 3%;
        text-decoration: none;
        margin: 2% 0%;
        cursor: pointer;
        border-radius: 4px;
    }

    #login:hover{
        background-color: #704b01;
        box-shadow: none;
    }

    /* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #log{
        margin: auto;
        margin-top: 30%;
        padding: 0;
        width: 40%;
        text-align: center;
        margin-bottom: 28%;
    }

    }


    /* Use a media query to add a breakpoint at 700px: */
    @media screen and (max-width: 700px) {
        #log{
        margin: auto;
        margin-top: 30%;
        padding: 0;
        width: 55%;
        text-align: center;
        margin-bottom: 30%;
    }

    }

    /* Use a media query to add a breakpoint at 520px: */
    @media screen and (max-width: 520px) {
        #log{
        margin: auto;
        margin-top: 30%;
        padding: 0;
        width: 70%;
        text-align: center;
        margin-bottom: 40%;
    }

    }

</style>
<body>
	<?php include("include/navigation.php"); ?>

	<section id="log">
        <form action="include/login.inc.php" method="post">
            <fieldset>
                <h1>Login</h1>
                <input type="text" name="uid" placeholder="Username/Email"/>
                <input type="password" name="pwd" placeholder="Password"/><br/>
                <button type="submit" name="submit" id="login">Login</button>
            </fieldset>
        </form>
        <?php 
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }

            else if ($_GET["error"] == "loginwrong") {
                echo "<p>Incorrect login information!</p>";
            }
            
        }

        ?>
    </section>
    

    <footer id="aboutmefooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>