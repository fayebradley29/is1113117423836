<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
          <div id = "container">
            <div id = "container2">
        <h1>E-Business</h1>
            </div>
            
            <ul class = "nav">
         <li><a href="../homepage.html">Home</a></li>
         <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
         <li><a href="../sport.html" >Interests</a> </li>
         <li><a href = "https://is1113117423836-fayebradley29.c9users.io/e-business/Ebus1.php" >Ebus</a></li>
         <li><a href= "https://github.com/fayebradley29/is1113117423836" >Github</a></li>
        <li><a href="../cloudvendor.html"> About Cloud</a> </li>
    </ul>
        <h1>Please enter your payment details</h1>
        
        
<form name = "myForm"  method="POST" action="Ebus3.php">
                    <br>
                    <label for = "name">
                        <strong>  Name:</strong>
                        <br>
                        <input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for "email">
                        <strong> Email:</strong>
                        <br>
                        <input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>

