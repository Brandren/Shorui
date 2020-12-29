<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>

</head>
<body>
<!-- <h1>Connect to your phpMyAdmin</h1> -->
<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
//The mysqli_connect() function attempts to open a connection to the MySQL Server 
//running on host which can be either a host name or an IP address. 
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	//The die() function is an alias of the exit() function.
    die("Connection failed: " . mysqli_connect_error()); 
}
//echo "Connected successfully";
?>

<!-- <h1>Create DataBase in phpMyAdmin</h1> -->
<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
//mysqli_query() function performs a query against a database.
$sql = "CREATE DATABASE Shorui";
if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully";
} else {
    //echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!-- <h1>Create Table in phpMyAdmin</h1> -->
<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Shorui";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create users table
	$sql = "CREATE TABLE users (
	usersId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	usersName VARCHAR(128) NOT NULL, 
	usersEmail VARCHAR(128) NOT NULL, 
	usersUid VARCHAR(128) NOT NULL, 
	usersPwd VARCHAR(128) NOT NULL,
	reg_date TIMESTAMP
	)";


if (mysqli_query($conn, $sql)) {
   //echo "Table MyDetails created successfully";
} else {
   //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>










 
