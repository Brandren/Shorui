<?php 

if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["uid"]) && !empty($_POST["pwd"]) && !empty($_POST["pwdrepeat"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$profile = $_POST["uid"];
	$pwd = $_POST["pwd"]; 
	$pwdrepeat = $_POST["pwdrepeat"];

	require_once "createuserDatabase.php";
	require_once "functions.inc.php";

	if (emptyInputSignup($name,$email,$profile,$pwd,$pwdrepeat) != false) {
		header("location:../signup.php?error=emptyinput");
		exit();
	}

	if (invalidUid($profile) != false) {
		header("location:../signup.php?error=invaliduid");
		exit();
	}

	if (invalidEmail($email) != false) {
		header("location:../signup.php?error=invalidemail");
		exit();
	}

	if (invalidPwd($pwd) != false) {
		$chars = preg_quote( '~`!@#$%^&*()_-+={}[]|:;&lt;&gt;.?/\\\\', '#' );
		if (pwdMatch($pwd,$pwdrepeat) != false) {
				header("location:../signup.php?error=passwordsdontmatch");
				exit();
		}
		elseif (preg_match("#[$chars]+#",$pwd)) {
			header("location:../signup.php?error=invalidpassword");
			exit();
		}
		else{
			if (strlen($pwd) < '8') {
				header("location:../signup.php?error=passwordcharacters");
				exit();
			}
			else if(!preg_match("#[0-9]+#",$pwd)) {
				header("location:../signup.php?error=passwordnumbers");
				exit();
			}
			else if(!preg_match("#[A-Z]+#",$pwd)) {
				header("location:../signup.php?error=passworduppercase");
				exit();
			}
			else if(!preg_match("#[a-z]+#",$pwd)) {
				header("location:../signup.php?error=passwordlowercase");
				exit();
			}
			
		}
	}

	if (uidExists($conn,$profile,$email) != false) {
		header("location:../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn,$name,$email,$profile,$pwd);


}
else{
	header("location:../signup.php");
	exit();
}





 
