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
	<title>Shorui-View Enquiries</title>
</head>
<style>
    html{
        scroll-behavior: smooth;
    }

    #entable{
        margin: auto;
        width: 95%;
        padding: 1%;
        margin-bottom: 20%; 
    }

    #entable h4{
        font-size: 120%;
        margin-bottom: 1.5%; 
    }

    #entable table{
        border-collapse: collapse;
        border: 3px solid #976502;
        width: 100%;
        color: #976502;
        font-size: 80%;
        text-align: left;
        box-shadow: 2px -3px rgba(0,0,0,0.3);
    }

    #entable th{
        border: 3px solid #976502;
        background-color: #976502;
        color: white;
    }

    #entable td{
        border: 3px solid #976502;
        padding: 1%;
    }

    #entable tr:nth-child(even){
        background-color: #f2f2f2;
    }

    #Enquiries h1{
    width: 100%;
    padding-top:2%; 
    padding-bottom:2%;
    font-size: 200%;
    text-align: center;
    }

    #back_btn{
    display: none;
    position: fixed;
    bottom: 10%;
    right: 1%;
    width: 50px;
    height: 50px;
    padding-top: 0.2%;
    font-size: 180%;
    font-weight: bold;
    outline: none;
    border: none;
    background-color: #f44336;
    box-shadow: 3px 3px rgba(0,0,0,0.5);
    cursor: pointer;
    z-index: 100000;
    }

    #back_btn:hover{
      background-color: #bd352b;
    }

    .up {
      transform: rotate(-135deg);
      -webkit-transform: rotate(-135deg);
    }

    .arrow {
      border: solid white;
      border-width: 0 5px 5px 0;
      display: inline-block;
      padding: 5px;
    }
    
    #profilesize{
        margin: auto;
        margin-top: 0;
        width: 100%;
        background-color: #976502;
        color: white;
    }

    #profile{
        margin: auto;
        width: 50%;
        padding: 1%;
        padding-top: 2%;
        margin-bottom: 2%;
    }

    #userphoto{
        color: white;
        text-decoration: none;
        list-style: none;
        font-size: 500%;
        text-align: center;
    }

    #user{
        color: white;
        text-decoration: none;
        list-style: none;
        font-size: 100%;
        text-align: center;
    }

    #user i{
        color: white;
    }

    #prtable{
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin: 2%;
        width: 70%;
        font-size: 100%;
    }

    #prtable td{
        border-collapse: collapse;
        padding: 2%;
        background: none;
    }


    /* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #entable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 20%; 
        }

        #entable h4{
            font-size: 90%;
            margin-bottom: 1.5%; 
        }

        #entable table{
            border-collapse: collapse;
            border: 3px solid #976502;
            width: 100%;
            color: #976502;
            font-size: 70%;
            text-align: left;
            box-shadow: 2px -3px rgba(0,0,0,0.3);
        }

    }


    /* Use a media query to add a breakpoint at 760px: */
    @media screen and (max-width: 760px) {
        #profile{
            margin: auto;
            width: 50%;
            padding: 1%;
            padding-top: 3%;
            margin-bottom: 2%;
        }

        #userphoto{
            color: white;
            text-decoration: none;
            list-style: none;
            font-size: 400%;
            text-align: center;
        }

        #prtable{
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            margin: 2%;
            width: 70%;
            font-size: 70%;
        }

        #entable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 20%; 
        }

        #entable h4{
            font-size: 80%;
            margin-bottom: 1.5%; 
        }

        #entable table{
            border-collapse: collapse;
            border: 3px solid #976502;
            width: 100%;
            color: #976502;
            font-size: 60%;
            text-align: left;
            box-shadow: 2px -3px rgba(0,0,0,0.3);
        }

    }

    /* Use a media query to add a breakpoint at 680px: */
    @media screen and (max-width: 680px) {
        #entable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 20%; 
        }

        #entable h4{
            font-size: 70%;
            margin-bottom: 1.5%; 
        }

        #entable table{
            border-collapse: collapse;
            border: 3px solid #976502;
            width: 100%;
            color: #976502;
            font-size: 55%;
            text-align: left;
            box-shadow: 2px -3px rgba(0,0,0,0.3);
        }

    }


    /* Use a media query to add a breakpoint at 540px: */
    @media screen and (max-width: 580px) {
        #entable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 20%; 
        }

        #entable h4{
            font-size: 60%;
            margin-bottom: 1.5%; 
        }

        #entable table{
            border-collapse: collapse;
            border: 3px solid #976502;
            width: 100%;
            color: #976502;
            font-size: 45%;
            text-align: left;
            box-shadow: 2px -3px rgba(0,0,0,0.3);
        }

    }


</style>

<body>
	<?php include("include/navigation.php"); ?>

    <div id="Enquiries">
        <h1 id="top">View Enquiries</h1>
    </div>

    <section id="profilesize">
        <div id="profile">
            <div id="userphoto"><i class="fas">&#xf2bd;</i></div>
            <div id="user">User Profile</div>
            <?php

                if (isset($_SESSION["useruid"])) {
                  echo "<table id='prtable'>";
                  echo "<tr><td>Username</td><td>".$_SESSION["useruid"]."</td>";
                  echo "<tr><td>Email</td><td>".$_SESSION["useremail"]."</td>";
                  echo "</td>";

                  echo "</table>";
                }

            ?>
        </div>
    </section>
    
    <section id="entable">
        <h4>Enquiries Table</h4>
        <table>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Comment</th>
                <th>Date</th>
            </tr>
            <?php
            $conn =mysqli_connect("localhost","root","","Shorui");

            if (!$conn) {
                die("Connection Failed: ". msqli_connect_error());
             }


            $sql = "SELECT id,First_name,Last_name,Email_address,Phone_number,Subject,Product,How_many,Unit,Comment,reg_date from enquiry";

            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["Email_address"]."</td><td>".$row["Phone_number"]."</td><td>".$row["Subject"]."</td><td>".$row["Comment"]."</td><td>".$row["reg_date"]."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result.";
            }

            mysqli_close($conn);
            ?>
            
        </table>

        <br/>
        
        <button type='button' id='back_btn' onclick="topFunction()"><i class='arrow up'></i></button>
        
    </section>
    <script>
    //Get the button
    var mybutton = document.getElementById("back_btn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    <footer id="aboutmefooter">
        <?php include("include/footerlink.php"); ?>
        <hr/>
        <?php include("include/footerinfo.php"); ?>
    </footer>
</body>
</html>