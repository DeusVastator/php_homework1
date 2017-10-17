<!DOCTYPE html>
<html>

<head>
    
<title>Denis Alfonso - Homework 1</title>
<meta charset="utf-8">
<link type="text/css" href="css/main.css" rel="stylesheet">
    
</head>

<body>


   <div class="cash-register"> 
       <form method="POST">
           <fieldset>
            <legend>Cash Register:</legend>
                Total:
               <input type="text" name="total" id="total">
               <br>
               <br>
               Cash Paid:
               <input type="text" name="paid" id="paid">
               <br>
               <br>
               <input type="submit" value="submit" id="submit" name="submit">
               
               <p id="change"></p>
           
           </fieldset> 
    
        <?php

           // isset checks if a variable is set or not for the values in the submit button.
   if(isset($_REQUEST['submit'])) {
       // Collect data from the html form using $_REQUEST and convert it into variables in php.
       $total = $_REQUEST['total'];
       $paid = $_REQUEST['paid'];
       // echo the change in a money format the difference between the amount paid and the total cost and show the change that is left.
       echo money_format("Your change is &#36;%i", $paid - $total);
   }
    
?>
    
    
    
    
    
    
       </form>

    
    </div>
    
    
    
</body>

</html>