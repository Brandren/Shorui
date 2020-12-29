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
	<title>Shorui-Confirm Enquiry</title>
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

	#confirmfieldset{
		border: 3px solid rgb(255,127,80);
		box-shadow: 5px -1px rgba(0,0,0,0.3);
	}

	#confirmtext{
		font-size: 120%;
		text-align: center;
		letter-spacing: 5px;
		font-weight: bold;
		color: rgb(255,127,80);
	}

	#confirm {
		width:45%;
	    transition: .5s ease;
		box-shadow: 3px 3px rgba(0,0,0,0.3);
		background-color: #4CAF50;
	}

	#cancel{
		width:45%;
	    transition: .5s ease;
	    box-shadow: 3px 3px rgba(0,0,0,0.3);
	    background-color: #f44336;
	}

	#confirm, #cancel{
	  border: none;
	  color: white;
	  padding: 2% 3%;
	  text-decoration: none;
	  margin: 2% 1%;
	  cursor: pointer;
	  border-radius: 4px;
	}

	#confirm:hover{
		background-color: #3b8c3e;
		box-shadow: none;
	}

	#cancel:hover{
		background-color: #bd352b;
		box-shadow: none;
	}

	.error {
		margin-left: 1%;
		color: #FF0000;
	}

	.warning {
		color: #FF0000;
	}

</style>
<body onload="init()">
	<?php include("include/navigation.php"); ?>
<?php
		$warningErr = $firstnameErr = $lastnameErr = $emailErr = $phoneErr = $streetErr = $cityErr = $stateErr = $postcodeErr = $countryErr = $subjectErr = $productErr = $how_manyErr = $unitErr = $commentErr = "";
		$firstname  = $lastname  = $email = $phone = $street  = $city  = $state  = $postcode = $country  = $subject  = $product  = $how_many  = $unit  = $comment = "";
        //get the value from enquiry.php
		$firstname = $_POST['First_name'];
	    $lastname = $_POST['Last_name'];
	    $email = $_POST['Email_address'];
	    $phone = $_POST['Phone_number'];
	    $street = $_POST['Street_address'];
	    $city = $_POST['City'];
	    $state = $_POST['State'];
	    $postcode = $_POST['Postcode'];
	    $country = $_POST['Country'];
	    $subject = $_POST['Subject'];
	    $product = $_POST['Product'];
	    $how_many = $_POST['How_many'];
	    $unit = $_POST['Unit'];
	    $comment = $_POST['Comment'];

	    if (empty($_POST["First_name"])) {
	        $firstnameErr = "**First Name is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Last_name"])) {
	        $lastnameErr = "**Last Name is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Email_address"])) {
	        $emailErr = "**Email address is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Phone_number"])) {
	        $phoneErr = "**Phone number is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Street_address"])) {
	        $streetErr = "**Street address is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["City"])) {
	        $cityErr = "**City is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["State"])) {
	        $stateErr = "**State is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Postcode"])) {
	        $postcodeErr = "**Postcode is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Country"])) {
	        $countryErr = "**Country is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Subject"]) || $_POST["Subject"] == "RE: Enquiry on null") {
	        $subjectErr = "**Subject is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Product"]) || $_POST["Product"] == "null") {
	        $productErr = "**Product is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["How_many"])) {
	        $how_manyErr = "**How Many is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Unit"]) || $_POST["Unit"] == " ") {
	        $unitErr = "**Unit is required";
	        $warningErr = "**Please check your enquiry";
	      }

	    if (empty($_POST["Comment"])) {
	        $commentErr = "**Comment is required";
	        $warningErr = "**Please check your enquiry";
	      }
		
?>
	<h1 class="heading1process">Confirm Your Enquiry</h1>
	<h2 class="heading2process">Thank you and come again</h2>
	<form id="enquiryform" method="post" action="enquiry_process.php">
		<input type="hidden" name="First_name" value="<?php echo $firstname; ?>">
		<input type="hidden" name="Last_name" value="<?php echo $lastname; ?>">
		<input type="hidden" name="Email_address" value="<?php echo $email; ?>">
		<input type="hidden" name="Phone_number" value="<?php echo $phone; ?>">
		<input type="hidden" name="Street_address" value="<?php echo $street; ?>">
		<input type="hidden" name="City" value="<?php echo $city; ?>">
		<input type="hidden" name="State" value="<?php echo $state; ?>">
		<input type="hidden" name="Postcode" value="<?php echo $postcode; ?>">
		<input type="hidden" name="Country" value="<?php echo $country; ?>">
		<input type="hidden" name="Subject" value="<?php echo $subject; ?>">
		<input type="hidden" name="Product" value="<?php echo $product; ?>">
		<input type="hidden" name="How_many" value="<?php echo $how_many; ?>">
		<input type="hidden" name="Unit" value="<?php echo $unit; ?>">
		<input type="hidden" name="Comment" value="<?php echo $comment; ?>">

		<fieldset id="confirmfieldset">
			<p id="confirmtext">User Detail</p>
			<p class="warning"><?php echo $warningErr;?></p>
			<p>First Name: <span id="confirm_firstname"><?php echo $firstname; ?></span><span class="error"><?php echo $firstnameErr;?></span></p>
			<p>Last Name: <span id="confirm_lastname"><?php echo $lastname; ?></span><span class="error"><?php echo $lastnameErr;?></span></p>
			<p>Email address: <span id="confirm_email"><?php echo $email; ?></span><span class="error"><?php echo $emailErr;?></span></p>
			<p>Phone number: <span id="confirm_phone"><?php echo $phone; ?></span><span class="error"><?php echo $phoneErr;?></span></p>
			<p>Street address: <span id="confirm_street"><?php echo $street; ?></span><span class="error"><?php echo $streetErr;?></span></p>
			<p>City/town: <span id="confirm_city"><?php echo $city; ?></span><span class="error"><?php echo $cityErr;?></span></p>
			<p>State: <span id="confirm_state"><?php echo $state; ?></span><span class="error"><?php echo $stateErr;?></span></p>
			<p>Postcode: <span id="confirm_postcode"><?php echo $postcode; ?></span><span class="error"><?php echo $postcodeErr;?></span></p>
			<p>Country: <span id="confirm_country"><?php echo $country; ?></span><span class="error"><?php echo $countryErr;?></span></p>
			<p>Subject: <span id="confirm_subject"><?php echo $subject; ?></span><span class="error"><?php echo $subjectErr;?></span></p>
			<p>Product: <span id="confirm_product"><?php echo $product; ?></span><span class="error"><?php echo $productErr;?></span></p>
			<p>How Many: <span id="confirm_many"><?php echo $how_many; ?></span><span class="error"><?php echo $how_manyErr;?></p>
			<p>Unit: <span id="confirm_unit"><?php echo $unit; ?></span><span class="error"><?php echo $unitErr;?></p>
			<p>Comment: <span id="confirm_comment"><?php echo $comment; ?></span><span class="error"><?php echo $commentErr;?></p>

			<?php 
			if (!empty($_POST['First_name']) && !empty($_POST['Last_name']) && !empty($_POST['Email_address']) && !empty($_POST['Phone_number']) && !empty($_POST['Street_address']) && !empty($_POST['City']) && !empty($_POST['State']) && !empty($_POST['Postcode']) && !empty($_POST['Country']) && !empty($_POST['Subject']) && !empty($_POST['Product']) && !empty($_POST['How_many']) && !empty($_POST['Unit']) && !empty($_POST['Comment'])) {
				echo '<button type="submit" name="Submit" id="confirm">Confirm Purchasing</button>'; 
				}
			?>
			<button type="cancel" onclick="window.location='enquiry.php';return false;" id="cancel">Cancel</button>
		</fieldset>
	</form>
	
	
	<footer id="enquiryfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>