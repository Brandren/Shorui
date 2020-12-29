<style>
    #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 200%;
    }

    #logintxt i{
        color: black;
    }

    .userauth {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -220%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .userauth-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .userauth-content a:hover {background-color: #976502; color: white;}

    .userauth:hover .userauth-content {display: block;}

    .userauth:hover .logintxt {background-color: #3e8e41;}

    /* Use a media query to add a breakpoint at 1400px: */
    @media screen and (max-width: 1400px) {
    .userauth-content {
      display: none;
      position: absolute;
      left: -240%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }


    }

    /* Use a media query to add a breakpoint at 1200px: */
    @media screen and (max-width: 1200px) {
    .userauth-content {
      display: none;
      position: absolute;
      left: -250%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }


    }

    /* Use a media query to add a breakpoint at 1080px: */
    @media screen and (max-width: 1050px) {
    .userauth-content {
      display: none;
      position: absolute;
      left: -280%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }


    }


    /* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 148%;

    }

    .navlink span, .dropdown span{
        width: 55%;
    }

    .logo{
        width: 40%;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -400%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }


    }

    /* Use a media query to add a breakpoint at 800px: */
    @media screen and (max-width: 800px) {
        #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 135%;
    }

    .navlink span, .dropdown span{
        width: 50%;
    }

    .logo{
        width: 45%;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -480%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    }

    /* Use a media query to add a breakpoint at 700px: */
    @media screen and (max-width: 700px) {
        #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 128%;
    }

    .navlink span, .dropdown span{
        width: 50%;
    }

    .logo{
        width: 45%;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -480%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    }

    /* Use a media query to add a breakpoint at 700px: */
    @media screen and (max-width: 700px) {
        #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 128%;
    }

    .navlink span, .dropdown span{
        width: 55%;
    }

    .logo{
        width: 40%;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -520%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    }

    /* Use a media query to add a breakpoint at 520px: */
    @media screen and (max-width: 520px) {
        #logintxt{
        color: black;
        text-decoration: none;
        list-style: none;
        font-size: 120%;
    }

    .navlink span, .dropdown span{
        width: 65%;
    }

    .logo{
        width: 30%;
    }

    .userauth-content {
      display: none;
      position: absolute;
      left: -540%;
      background-color: #f1f1f1;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    }

</style>

  <nav>
		<div class="navbar">
			<div class="logo"><a href="index.php"><img src="images/logo.png" alt="logo"/></a></div>
			<span class="navlink"><a href="index.php">Home</a></span>
            <div class="dropdown" id="dropdown-btn">
                <span><a href="index.php#discover">Discover</a></span>
                <ul id="dropdown-content">
                    <li><a href="#">Genre 1</a></li>
                    <li><a href="#">Genre 2</a></li>
                    <li><a href="#">Genre 3</a></li>
                    <li><a href="#">Genre 4</a></li>
                </ul>
            </div>
            <span class="navlink"><a href="enquiry.php">Enquiry</a></span>
            <span class="navlink"><a href="aboutme.php">About Us</a></span>
            <span class="navlink"><a href="disclaimer.php">Disclaimer</a></span>
            <div class="userauth">
              <li id="logintxt"><i class="fas">&#xf2bd;</i></li>
              <div class="userauth-content">
                <?php
                  if (isset($_SESSION["useruid"])) {
                    echo"<a href='view_enquiries.php'>Enquiries</a>";
                    echo"<a href='view_enquiries.php#profile'>Profile</a>";
                    echo"<a href='deleteprofile.php'>Delete</a>";
                    echo"<a href='include/logout.inc.php'>Log Out</a>";
                  }
                  else{
                    echo"<a href='login.php'>Log In</a>";
                    echo"<a href='signup.php'>Sign Up</a>";
                  }
                ?>
              </div>
            </div>
		</div>
	</nav>

<!-- class="active"-->