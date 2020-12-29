<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>

</head>
<body>
<!-- <h1>Connect to your phpMyAdmin</h1> -->
<?php 
require_once "createuserTable.php";

$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="Shorui";

// Create connection
//The mysqli_connect() function attempts to open a connection to the MySQL Server 
//running on host which can be either a host name or an IP address.
$conn =mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
 	die("Connection Failed: ". msqli_connect_error());
 } 







?>
</body>
</html>













 
