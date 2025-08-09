<?php
session_start();
if (!$_SESSION['user_logged_in']==True){
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Order</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <header class="header">
        <h1> Go Coffee</h1>
        <p>Place your coffee order online!</p>
    </header>

    <main>
        <section class="order-container">
            <h2>Order Your Coffee</h2>
            <form id="orderForm"  action="order.php"  method="post">
                <label for="customerName">Name:</label>
                <input type="text" id="customerName" name="customerName" placeholder="Enter your name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" required>

                <label for="coffeeType">Coffee Type:</label>
                <select id="coffeeType" name="coffeeType" required>
                    <option value="" disabled selected>Select Coffee</option>
                    <option value="Espresso" >Espresso   100</option>
                    <option value="Latte">Latte  100</option>
                    <option value="Cappuccino">Cappuccino   100</option>
                    <option value="Americano">Americano  100</option>
                    <option value="Mocha">Mocha 100</option>
                </select>
                <label for="quantity">Quantity:</label>
                <input type="int" id="quantity" name="quantity" placeholder="1" required>


                <label for="coffeeSize">Size:</label>
                <select id="coffeeSize" name="coffeeSize" required>
                    <option value="" disabled selected>Select Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select>

                <label for="addons">Add-ons:</label>
                <div id="addons">
                    <label><input type="checkbox" name="addons" value="Milk"> Milk</label>
                    <label><input type="checkbox" name="addons" value="Sugar"> Sugar</label>
                    <label><input type="checkbox" name="addons" value="Caramel"> Caramel</label>
                    <label><input type="checkbox" name="addons" value="Chocolate"> Chocolate</label>
                </div>

                <label for="specialInstructions">Special Instructions:</label>
                <textarea id="specialInstructions" name="specialInstructions" placeholder="E.g., less sugar, extra hot"></textarea>

                <button id="submitOrder" name="submit" >order now</button>
            </form>
        </section>

        <section id="orderSummary" class="hidden">
            <h2>Order Summary</h2>
            <div id="summaryDetails"></div>
            <input type="submit" id="newOrder" name="submit" value="place order">
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Go Coffee. All rights reserved.</p>
    </footer>
<script src="order.js"></script>
    

</body>
</html>