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
	<title>Shorui-Delete Profile</title>
</head>
<style>
    html{
        scroll-behavior: smooth;
    }

    #edtable{
        margin: auto;
        width: 95%;
        padding: 1%;
        margin-bottom: 20%; 
    }

    #edtable h4{
        font-size: 120%;
        margin-bottom: 1.5%; 
    }

    #edtable table{
        border-collapse: collapse;
        border: 3px solid #976502;
        width: 100%;
        color: #976502;
        font-size: 80%;
        text-align: left;
        box-shadow: 2px -3px rgba(0,0,0,0.3);
    }

    #edtable th{
        border: 3px solid #976502;
        background-color: #976502;
        color: white;
    }

    #edtable td{
        border: 3px solid #976502;
        padding: 1%;
    }

    #edtable tr:nth-child(even){
        background-color: #f2f2f2;
    }

    #edtable a{
        color: red;
        text-decoration: none;
    }

    #edtable a:hover{
        text-decoration: underline;
    }

    #Users h1{
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

    /* Use a media query to add a breakpoint at 1050px: */
    @media screen and (max-width: 1050px) {
        #edtable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 30%; 
        }

    }
    
    /* Use a media query to add a breakpoint at 900px: */
    @media screen and (max-width: 900px) {
        #edtable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 50%; 
        }

        #edtable h4{
            font-size: 90%;
            margin-bottom: 1.5%; 
        }

        #edtable table{
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
        #edtable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 55%; 
        }

        #edtable h4{
            font-size: 80%;
            margin-bottom: 1.5%; 
        }

        #edtable table{
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
        #edtable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 60%; 
        }

        #edtable h4{
            font-size: 70%;
            margin-bottom: 1.5%; 
        }

        #edtable table{
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
        #edtable{
            margin: auto;
            width: 95%;
            padding: 1%;
            margin-bottom: 80%; 
        }

        #edtable h4{
            font-size: 60%;
            margin-bottom: 1.5%; 
        }

        #edtable table{
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

    <div id="Users">
        <h1 id="top">Delete Profile</h1>
    </div>
    
    <section id="edtable">
        <h4>Profile Table</h4>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php
            $conn =mysqli_connect("localhost","root","","Shorui");

            if (!$conn) {
                die("Connection Failed: ". msqli_connect_error());
             }


            $sql = "SELECT usersId,usersName,usersEmail,usersUid,usersPwd,reg_date from users";

            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["usersId"]."</td><td>".$row["usersName"]."</td><td>".$row["usersEmail"]."</td><td>".$row["usersUid"]."</td><td>".$row["reg_date"]."</td><td>"."<a href='include/delete.inc.php?user=$row[usersId]'>Delete</a>"."</td></tr>";
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