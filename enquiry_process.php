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
	<title>Shorui-Enquiry Process</title>
</head>
<style>
	.heading1process{
		text-align: center;
		padding: 0;
		margin: 0;
		color: #976502;
		padding-bottom: 1%;
		font-size: 200%;
	}

	.heading2process{
		text-align: center;
		padding: 0;
		margin: 0;
		color: #fbaa06;
		font-size: 140%;
	}

	#tablecenter{
		display: flex;
		align-items: center;
		justify-content: space-around;
		width: 100%;
		padding: 0;
		margin: 0;
	}

	#processtable{
		border-collapse: collapse;
		width: 70%;
		margin: 0%;
		margin-top: 2%;
		margin-bottom: 5%;
		margin-bottom: 10%;
		box-shadow: 5px -1px rgba(0,0,0,0.3);
	}

	#processtable td{
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 0.5%;
		padding-bottom: 0.5%;
		margin: 0;
		border: 3px solid rgb(255,127,80);
		font-size: 100%;
	}

	#processtable th{
		border: 3px solid rgb(255,127,80);
		font-size: 120%;
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 2%;
		padding-bottom: 2%;
	}

	#cancelButton{
		width: 100px;
	}

	/* Use a media query to add a breakpoint at 900px: */
	@media screen and (max-width: 900px) {
	#processtable{
		border-collapse: collapse;
		width: 80%;
		margin: 5%;
		margin-bottom: 25%;
	}

	#processtable td{
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 0.5%;
		padding-bottom: 0.5%;
		margin: 0;
		border: 3px solid rgb(255,127,80);
		font-size: 80%;
	}

	#processtable th{
		border: 3px solid rgb(255,127,80);
		font-size: 80%;
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 2%;
		padding-bottom: 2%;
	}

	}

	/* Use a media query to add a breakpoint at 700px: */
	@media screen and (max-width: 700px) {
	#processtable{
		border-collapse: collapse;
		width: 85%;
		margin: 5%;
		margin-bottom: 25%;
	}

	#processtable td{
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 0.5%;
		padding-bottom: 0.5%;
		margin: 0;
		border: 3px solid rgb(255,127,80);
		font-size: 80%;
	}

	#processtable th{
		border: 3px solid rgb(255,127,80);
		font-size: 80%;
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 2%;
		padding-bottom: 2%;
	}

	}

	/* Use a media query to add a breakpoint at 520px: */
	@media screen and (max-width: 520px) {
	#processtable{
		border-collapse: collapse;
		width: 90%;
		margin: 5%;
		margin-bottom: 30%;
	}

	#processtable td{
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 0.5%;
		padding-bottom: 0.5%;
		margin: 0;
		border: 2px solid rgb(255,127,80);
		font-size: 80%;
	}

	#processtable th{
		border: 2px solid rgb(255,127,80);
		font-size: 80%;
		padding-left: 2%;
		padding-right: 2%;
		padding-top: 2%;
		padding-bottom: 2%;
	}

	}

</style>
<body>
<?php 
if (!empty($_POST['First_name']) && !empty($_POST['Last_name']) && !empty($_POST['Email_address']) && !empty($_POST['Phone_number']) && !empty($_POST['Street_address']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['Postcode']) && !empty($_POST['Country']) && !empty($_POST['Subject']) && !empty($_POST['Product']) && !empty($_POST['How_many']) && !empty($_POST['Unit']) && !empty($_POST['Comment'])) {
	echo '<script>alert("Purchasing Successful. Thank You!!")</script>'; 
	}
else{
	header("location:confirm.php");
	exit();
}
?>
	<?php include("include/navigation.php"); ?>
	<h1 class="heading1process">Purchasing Confirmed</h1>
	<h2 class="heading2process">Thank you and come again</h2>
<?php
		//get the value from confirm.php
	    $Fname = $_POST['First_name'];
	    $Lname = $_POST['Last_name'];
	    $Email = $_POST['Email_address'];
	    $Phone = $_POST['Phone_number'];
	    $Street = $_POST['Street_address'];
	    $City = $_POST['City'];
	    $State = $_POST['State'];
	    $Postcode = $_POST['Postcode'];
	    $Country = $_POST['Country'];
	    $Subject = $_POST['Subject'];
	    $Product = $_POST['Product'];
	    $How_many = $_POST['How_many'];
	    $Unit = $_POST['Unit'];
	    $Comment = $_POST['Comment'];	
?>
	<div id="tablecenter">
		<table id="processtable">
		<tr>
			<th>Description</th>
			<th>Value</th>
		</tr>
		<tr><td>First Name</td><td><?php echo $Fname;?></td></tr>
		<tr><td>Last Name</td><td><?php echo $Lname;?></td></tr>
		<tr><td>Email address</td><td><?php echo $Email;?></td></tr>
		<tr><td>Phone number</td><td><?php echo $Phone;?></td></tr>
		<tr><td>Street address</td><td><?php echo $Street;?></td></tr>
		<tr><td>City/town</td><td><?php echo $City;?></td></tr>
		<tr><td>State</td><td><?php echo $State;?></td></tr>
		<tr><td>Postcode</td><td><?php echo $Postcode;?></td></tr>
		<tr><td>Country</td><td><?php echo $Country;?></td></tr>
		<tr><td>Subject</td><td><?php echo $Subject;?></td></tr>
		<tr><td>Product</td><td><?php echo $Product;?></td></tr>
		<tr><td>How Many</td><td><?php echo $How_many;?></td></tr>
		<tr><td>Unit</td><td><?php echo $Unit;?></td></tr>
		<tr><td>Comment</td><td><?php echo $Comment;?></td></tr>
		</table>
	</div>
	
	<?php include("include/createDatabase.php"); ?>
	
	<footer id="enquiryfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>