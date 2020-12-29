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

// sql to create Enquiry table
	$sql = "CREATE TABLE Enquiry (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	First_name VARCHAR(30) NOT NULL,
	Last_name VARCHAR(30) NOT NULL,
	Email_address VARCHAR(50),
	Phone_number VARCHAR(50) NOT NULL,
	Street_address VARCHAR(50) NOT NULL,
	City VARCHAR(50) NOT NULL,
	State VARCHAR(30) NOT NULL,
	Postcode VARCHAR(50) NOT NULL,
	Country VARCHAR(30) NOT NULL,
	Subject VARCHAR(70) NOT NULL,
	Product VARCHAR(60) NOT NULL,
	How_many VARCHAR(30) NOT NULL,
	Unit VARCHAR(20 ) NOT NULL,
	Comment VARCHAR(800),
	reg_date TIMESTAMP
	)";

if (mysqli_query($conn, $sql)) {
   //echo "Table MyDetails created successfully";
} else {
   //echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!-- <h1>Insert Value in phpMyAdmin</h1> -->
<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Shorui";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Enquiry (First_name, Last_name, Email_address,Phone_number,Street_address,City,State,Postcode,Country,Subject,Product,How_many,Unit,Comment)
VALUES ('".$_POST['First_name']."', '".$_POST['Last_name']."', '".$_POST['Email_address']."','".$_POST['Phone_number']."','".$_POST['Street_address']."','".$_POST['City']."','".$_POST['State']."','".$_POST['Postcode']."','".$_POST['Country']."','".$_POST['Subject']."','".$_POST['Product']."','".$_POST['How_many']."','".$_POST['Unit']."','".$_POST['Comment']."')";


if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>










 
