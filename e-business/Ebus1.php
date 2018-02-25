<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
    
    </head>
    
    <body>
        <div id = "container">
            <div id = "container2">
        <h4>Select A Product</h4>
            </div>
            
            <ul class = "nav">
         <li><a href="CV/cv_page1.html">Curriculum Vitae</a></li>
         <li><a href="Interests/sport.html" >Interests</a> </li>
         <li><a href = " https://is1113117423836-fayebradley29.c9users.io/e-business/Ebus1.php" >Ebus</a></li>
         <li><a href= "https://github.com/fayebradley29/is1113117423836" >Github</a></li>
        <li><a href = "Cloud/Cloudservices.html"> About Cloud</a> </li>
    </ul>
    
        <br/>
                <div id = "container3">
        <form method="POST" action="Ebus2.php">
        
        <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/> 
        SalesForce @ $100
        </label>
        
        <br/>
        
        <label for="aws">
            <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/> 
        AWS @ $300
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
            Sub Total
            <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="total">
            Total
            <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <button type="submit" id="btnProceed" diabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
          <a role="button" href="Ebus1.php">Clear Choice</a>
           </div>
       </div>
    </body>
</html>