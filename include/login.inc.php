<?php 

if (!empty($_POST["uid"]) && !empty($_POST["pwd"])) {
	$profile = $_POST["uid"];
	$pwd = $_POST["pwd"];

	require_once "createuserDatabase.php";
	require_once "functions.inc.php";

	if (emptyInputLogin($profile,$pwd) != false) {
		header("location:../login.php?error=emptyinput");
		exit();
	}

	loginUser($conn,$profile,$pwd);

}
else{
	header("location:../login.php");
	exit();
}










 
