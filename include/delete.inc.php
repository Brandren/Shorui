<?php 

$conn =mysqli_connect("localhost","root","","Shorui");

if (!$conn) {
    die("Connection Failed: ". msqli_connect_error());
}

error_reporting(0);

$user = $_GET['user'];
$del = "DELETE FROM users where usersId = '$user'";

$data = mysqli_query($conn,$del);

if ($data) {
	header("location:../deleteprofile.php");
	exit();
}
else{
	echo "<font color='red'>Failed to delete.";
}

mysqli_close($conn);








 
