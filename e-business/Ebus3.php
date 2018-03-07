
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
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
             <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["user_email"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
        
        <br/>
        
        <br>
        <br>
        
        
        <a href="../cloudservices.html"><button>Return to Homepage</button></a>
        
        </div>
           
    </body>
</html>