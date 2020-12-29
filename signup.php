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
	<title>Shorui-Sign Up</title>
</head>
<style>
	#sign{
		margin: auto;
		margin-top: 10%;
		padding: 0;
		width: 40%;
		text-align: center;
		margin-bottom: 20%;
	}

	#sign fieldset{
		width: 100%;
		border: 3px solid rgb(255,127,80);
		box-shadow: 5px -1px rgba(0,0,0,0.3);
		padding: 3%;
	}

	#sign a{
		float: right;
		padding-right: 5%;
		padding-top: 5%;
		text-decoration: none;
	}

	#sign a:hover{
		text-decoration: underline;
	}

	#sign fieldset h1{
		text-align: center;
		padding: 2%;
		font-size: 200%;
	}


	#sign input[type=text], #sign input[type=password]{
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	#signup {
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

	#signup:hover{
		background-color: #704b01;
		box-shadow: none;
	}

	/* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #sign{
		margin: auto;
		margin-top: 10%;
		padding: 0;
		width: 55%;
		text-align: center;
		margin-bottom: 20%;
	}

    }

	/* Use a media query to add a breakpoint at 700px: */
    @media screen and (max-width: 700px) {
        #sign{
		margin: auto;
		margin-top: 10%;
		padding: 0;
		width: 65%;
		text-align: center;
		margin-bottom: 20%;
	}

    }

    /* Use a media query to add a breakpoint at 520px: */
    @media screen and (max-width: 520px) {
        #sign{
		margin: auto;
		margin-top: 10%;
		padding: 0;
		width: 70%;
		text-align: center;
		margin-bottom: 20%;
	}

    }


</style>
<body>
	<?php include("include/navigation.php"); ?>

	<section id="sign">
		<form action="include/signup.inc.php" method="post">
			<fieldset>
				<h1>Sign Up</h1>
				<input type="text" name="name" placeholder="Fullname"/>
				<input type="text" name="email" placeholder="Email"/>
				<input type="text" name="uid" placeholder="Username"/>
				<input type="password" name="pwd" placeholder="Password"/>
				<input type="password" name="pwdrepeat" placeholder="Repeat Password"/><br/>
				<button type="submit" name="submit" id="signup">Sign Up</button>
				<a href="pwdrule.php">Password Rule</a>
			</fieldset>
		</form>
		<?php 
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}

			else if ($_GET["error"] == "invaliduid") {
				echo "<p>Choose a proper username!</p>";
			}
			
			else if ($_GET["error"] == "invalidemail") {
				echo "<p>Choose a proper email!</p>";
			}

			else if ($_GET["error"] == "invalidpassword") {
				echo "<p>Choose a proper password (no special characters)!</p>";
			}

			else if ($_GET["error"] == "passwordcharacters") {
				echo "<p>Password Must Contain At Least 8 Characters!</p>";
			}

			else if ($_GET["error"] == "passwordnumbers") {
				echo "<p>Password Must Contain At Least 1 Number!</p>";
			}

			else if ($_GET["error"] == "passworduppercase") {
				echo "<p>Password Must Contain At Least 1 Uppercase Letter!</p>";
			}

			else if ($_GET["error"] == "passwordlowercase") {
				echo "<p>Password Must Contain At Least 1 Lowercase Letter!</p>";
			}

			else if ($_GET["error"] == "passwordsdontmatch") {
				echo "<p>Passwords do not match!</p>";
			}

			else if ($_GET["error"] == "usernametaken") {
				echo "<p>Username already existed!</p>";
			}

			else if ($_GET["error"] == "stmtfailed") {
				echo "<p>Something went wrong, try again!</p>";
			}

			else if ($_GET["error"] == "none") {
				echo "<p>You have sign up successfully!</p>";
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