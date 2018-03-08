<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
         <div id = "container">
            <div id = "container2">
        <h4>E-Business</h4>
            </div>
            
            <ul class = "nav">
         <li><a href="../homepage.html">Home</a></li>
         <li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
         <li><a href="../Interests/sport.html" >Interests</a> </li>
         <li><a href = "../e-business/Ebus1.php" >Ebus</a></li>
         <li><a href= "https://github.com/fayebradley29/is1113117423836" >Github</a></li>
         <li><a href="../Cloud/cloudvendor.html">About Cloud</a> </li>
    </ul>
        <br/>
                <div id = "container3">
        <form action="Ebus3.php" method="POST">
            
            
            <!--creating text boxes for customer to enter details-->
            
            <label for="user_name">Name:</label>
            <input type="name" id="user_name" name="user_name" placeholder="Name" maxlength="35"/>
            <br>
            <br/>
            
            
            <label for="user_email">Email Address:</label>
            <input type="email" id="user_email" name="user_email" placeholder="Joeblogs@example.com" maxlength="40">
            <br>
            <br/>
            
             <label for="user_pin">PIN:</label>
             <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
             <br>
             </br>
             

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
          <!--passing total cost to nect page-->
            
            <?php
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        </div>
        
        
        <script type="text/javascript" src="ebus2_validator.js"></script></div>
           
    </body>
</html>
