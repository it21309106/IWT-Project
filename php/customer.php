<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Contact US</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/contactus_style.css">
    
</head>
<body>
    
    <!-- header section starts  -->
	

    <header class="header">
	
	
	<div class="header-3">

            <div class="icons">
                <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html"><i><img src="../images/location.png" width="20px" height="20px"></i>Store Location</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/php/delivery.php"><i><img src="../images/delivery.png" width="20px" height="20px"></i>Shipping Method</a>
                <a href="http://localhost/OnlinecustomerSupportSystem/php/cart.php"><i><img src="../images/cart.png" width="20px" height="20px"></i>Cart</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/php/trackorder.php"><i><img src="../images/track.png" width="30px" height="25px"></i>Track</a>
            </div>
			
			<div class="buttons">
		<a href="http://localhost/OnlineCustomerSupportSystem/php/insertnew1.php" class="btn btn-1">LOGIN</a>
        <a href="http://localhost/OnlineCustomerSupportSystem/php/signup.php" class="btn btn-1">SIGN UP</a> 
		</div>
        </div>
		
		<div>
		<img src="../images/background.png" height="300px" width="1590px">
		</div>
      
	
	
<div class="header-2">

            <nav class="navbar">
 <a href="Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/product.html">Our Products</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Offers.html">Offers</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html">Stores</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/bill_payment.php">Utility Bill Payment</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/customer.php">Cutomer Support</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/contactus.php">Contact Us</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/AboutUs.html">About Us</a>
            </nav>
            </nav>
        </div>
		
<div class="header-4">

     <form class="search-form">
					<input type="text" placeholder="Search">
					<button class="button">Search</button>
				</form>     
  

</div>

    </header>

    <!-- header section ends  -->
	
	<!-- body part start-->
	
	<div><br>
     <h2>Welcome !!</h2>
<!--options-->
 
        <a class="space" href="http://localhost/OnlineCustomerSupportSystem/html/ContactAgent.html"><img class="icon" src="../images/contact.png" alt="Image not found"><h3 class="service">Contact Agent </h3></a>

        <a class="space" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><img class="icon" src="../images/mail.png" alt="Image not found"><h3 class="service">Mail Us </h3></a>

        <a class="space" href="http://localhost/OnlineCustomerSupportSystem/html/faq.html"><img class="icon" src="../images/faq.png" alt="Image not found"><h3 class="service">FAQ </h3></a>
</div> 
	
	<!--Message form-->

<div class="message">
    <h2>Drop us a message</h2>

    <form class=""  method ="post" action ="customersupport.php">
        
        <input type= "text" id="details" name="name" placeholder="Name"><br>
    
        <input type= "text" id="details"  name="address" placeholder="Address"><br>

        <input type= "text" id="details"  name ="city" placeholder="City">
    
        <input type= "text" id="details" name ="phone" placeholder="Phone"><br>
        
        <input type= "text" id="details" name ="postalcode"  placeholder="Postal/Zip code">

        <select name= "district" id="details" name ="district">
            <option value = "none" selected disabled hidden>District</option>
            <option value = "gampaha">Gampaha</option>
            <option value = "colombo">Colombo</option>
            <option value = "kurunegala">Kurunegala</option>   
            <option value = "puttalam">Puttalam</option>
            <option value = "galle">Galle</option>
            <option value = "kandy">Kandy</option>
            <option value = "nuwaraeliya">Nuwara Eliya</option>
            <option value = "matara">Matara</option>
        </select>
            
        <br>
        
        <textarea rows="3px" cols="46px" id="details"  name="message" placeholder="Write message..."></textarea>
        
        
        <input type ="submit" class = "submit" value = "Submit">

    </form>

<button class="chatbutton">
  <i class="material-icons">chat_bubble</i> Chat with us!
</button>

</div>

	
	
	
	
	
	
	<!--body part ends-->
	<!-- footer section starts  -->

    <section class="footer">

       <div class="box-container">

        <div class="box">
			<h1 id="footerheader">FOODIGO</h1>
            <div class="icons icon-1">
                <a href="#"><i><img src="../images/phone.png" width="20px" height="20px"></i>+94 112 893 440</a>
                <a href="#"><i><img src="../images/fax.png" width="20px" height="20px"></i>+94 112 896 453</a>
                <a href="#"><i><img src="../images/email.png" width="20px" height="20px"></i> foodigo@gmail.com</a>
                <a href="#"><i><img src="../images/web.png" width="20px" height="20px"></i> www.foodigo.com</a>
            </div>
        </div>

        <div class="box">
            <h2>Whatsin Store</h2>
            <div class="icons">
                <a href="http://localhost/OnlineCustomerSupportSystem/html/vegi.html">Vegetables</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/fruits.html">Fruits</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/spices.html">Seeds and Spices</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/beverages.html">Soft Drinks</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/snaks.html">Biscuits & Cookies</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/snaks.html">Choclates</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/spices.html">Grocery & Staples</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/bakery.html">Bakery</a>
            </div>
        </div>

        <div class="box">
            <h2>Useful Links</h2>
            <div class="icons">
               <a href="Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/product.html">Our Products</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Offers.html">Offers</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html">Stores</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/bill_payment.php">Utility Bill Payment</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/customer.php">Cutomer Support</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/contactus.php">Contact Us</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/AboutUs.html">About Us</a>
            </nav>
            </div>
        </div>

        <div class="box">
            <h2>Download App</h2>
            <div class="image">
                <img src="../images/facebook.png" alt="" height="50px" width="50px">
                <img src="../images/instagram.png" alt="" height="50px" width="50px">
				<img src="../images/twitter.png" alt="" height="50px" width="50px">
				<img src="../images/youtube.png" alt="" height="50px" width="50px">
            </div>
        </div>

       </div>

    </section>

    <div class="credit"> Copyright 2022 <span>SLIIT MLB_6.01_05 Group</span> all reserved</div>

    <!-- footer section ends  -->

</body>
</html>