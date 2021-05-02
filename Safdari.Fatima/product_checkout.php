<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Checkout Page</title>
	<?php include "parts/meta.php"; ?>
     

</head>
<body> 
	<?php include "parts/navbar.php"; ?>
   


	 <div class="container">
        <div class="card soft">
     	<h2>Product Checkout</h2>
        <h3>Address</h3>
        <form class="form">
            <div class="form-control">
                <label for="address-street" class="form-lable">Street</label>
                <input id="address-street" type="text" placeholder="Street name" class="form-input">
            </div>
            <div class="form-control">
                <div class="grid gap">
                    <div class="col-xs-12 col-md-6">
                        <label for="address-city" class="form-lable">City</label>
                        <input id="address-city" type="text" placeholder="City" class="form-input">
                    </div>
                        <div class="col-xs-12 col-md-6">
                        <label for="address-state" class="form-lable">State</label>
                        <input id="address-state" type="text" placeholder="State" class="form-input">
                    </div>
                </div>
            </div>
            <div class="form-control">
                <div class="grid gap">
                    <div class="col-xs-12 col-md-6"> 
                        <label for="address-zip" class="form-lable">Zip Code</label>
                        <input id="address-zip" type="text" placeholder="Zip Code" class="form-input"> 
                    </div>
                       <div class="col-xs-12 col-md-6"> 
                        <label for="address-country" class="form-lable">Country</label>
                        <input id="address-country" type="text" placeholder="Country" class="form-input"> 
                       </div>
                   </div>
               </div>
               <div class="form-control">
                   <input type="submit" class="form-button" value="Submit">
               </div>
        </form>
            <h3>Payment</h3>
            <form class="form">
            <div class="form-conrol">
                <label for="payment-name" class="form-lable">Full Name</label>
                <input id="payment-name" type="text" placeholder="Name" class="form-input">   
            </div>
            <div class="form-conrol">
                <label for="payment-number" class="form-lable">Card Number</label>
                <input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
             </div> 
             <div class="form-conrol">
             <div class="grid gap">
                    <div class="col-xs-12 col-md-6"> 
                        <label for="payment-expiration" class="form-lable">Expiration</label>
                        <input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
                    </div>
                    <div class="col-xs-12 col-md-6"> 
                        <label for="payment-cvv" class="form-lable">CVV</label>
                        <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
                       </div>
                   </div>
               </div>
                    <div class="form-conrol">
                    <label for="payment-zip" class="form-lable">Zip Code</label>
                    <input id="payment-zip" type="text" placeholder="Zip Code" class="form-input"> 
                </div>
               <div class="form-control">
                  <!-- <input type="submit" class="form-button" value="Submit">-->
                   <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
               </div>
            </form>
     	</div>
    </div>

	
</body>
</html>