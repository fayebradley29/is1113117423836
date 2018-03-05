<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
    </head>
    <body>
        <div id = "container">
            <div id = "container2">
        <h1 class="mainheading">RECEIPT</h1>
        </div>
        
        <ul class = "nav">
            
         <li><a href="../homepage.html">Home</a></li>
         <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
         <li><a href="../sport.html" >Interests</a> </li>
         <li><a href = "https://is1113117423836-fayebradley29.c9users.io/e-business/Ebus1.php" >Ebus</a></li>
         <li><a href= "https://github.com/fayebradley29/is1113117423836" >Github</a></li>
         <li><a href="../cloudvendor.html">About Cloud</a> </li>
        
    </ul>
        <h1>RECEIPT</h1>
              
        <?php
       //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" . $_SESSION["total"] ;
        ?>
    </body>
</html>
