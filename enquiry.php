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
	<title>Shorui-Enquiry</title>
</head>
<body onload="init()">
	<?php include("include/navigation.php"); ?>

    <!--action="mailto:101211418@students.swinburne.edu.my"--><!-- action="javascript:void(0);" -->
    <form name="enquiry" id="enquiry"  method="post" action="confirm.php" onsubmit="validateForm()">
        <fieldset id="fieldsetbody">
        <legend id="formtitle">Enquiry</legend>

        <div id="today"></div>

        <fieldset class="fieldsetcol">
            <legend>Personal Information</legend>
            <p><label for="first_name">First Name:
                <input type="text" name="First_name" id="first_name"/><span id="alert1"></span>
            </label></p>
            <p><label for="last_name">Last Name:
                <input type="text" name="Last_name" id="last_name"/><span id="alert2"></span>
            </label></p>
            <p><label for="email">Email address:
                <input type="email" name="Email_address" id="email" placeholder="example@mail.com"/><span id="alert3"></span>
            </label></p>
            <p><label for="phone_number">Phone number:
                <input type="tel" name="Phone_number" id="phone_number" placeholder="### ### ####"/><span id="alert4"></span>
        </label></p>
        </fieldset>
        <fieldset class="fieldsetcol">
            <legend>Address</legend>
            <p><label for="s_address">Street address:
                <input type="text" name="Street_address" id="s_address" /><span id="alert5"></span>
            </label></p>
            <p><label for="city">City/town:
                <input type="text" name="City" id="city"/><span id="alert6"></span>
            </label></p>
            <p><label for="state">State:
                <input type="text" name="State" id="state"/><span id="alert7"></span>
            </label></p>
            <p><label for="postcode">Postcode:
                <input type="text" name="Postcode" id="postcode"/><span id="alert8"></span>
            </label></p>
            <p><label for="country">Country:
                <select name="Country" id="country" onfocus="countryList()">
                    <optgroup label="Selected">
                        <option value="Malaysia" id="Malaysia">Malaysia</option>
                    </optgroup>
                </select>
                </label>
            </p>

        </fieldset>
        <fieldset class="fieldsetcol">
            <legend>Your Purchases</legend>
            <p><label for="subject">Subject:
                <input type="text" name="Subject" id="subject" value="RE: Enquiry on [product name]"/><span id="alert9"></span></label></p>
            <p><label for="product">Product:
            <select name="Product" id="product" onfocus="productList()" onclick="product_change()">
                <optgroup label="Selected">
                    <option value="data" id="data">---</option>
                </optgroup>
            </select><span id="alert10"></span>
            </label>
            <p><label for="how_many">How Many:
                <input type="number" name="How_many" id="how_many" min="1" value="1" max="1000"/><span id="alert11"></span>
            </label></p>
            <p><label for="unit">Unit:
                <select name="Unit" id="unit" onfocus="unitList()">
                    <option value=" ">---</option>
                </select><span id="alert12"></span>
            </label></p>
            <p>
                <textarea name="Comment" placeholder="Please leave your comment here......" id="note"></textarea>
            </p>
        </fieldset>
        <button type="submit" form="enquiry" id="submit">Submit</button>    
        <button type="reset" form="enquiry" id="reset" onclick="resetFormat()">Reset</button>
    </fieldset>
    
    </form>

    <button type="button" id="print_btn">&#128438;</button>

    <footer id="enquiryfooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>