<?php
// Database credentials
$servername = "localhost"; // Change to your database server if it's not localhost
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "coffeeshop"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO orders (user_id, email, product, size, order_date, notes, price) 
        VALUES ('$user_id', '$email', '$product', '$size', '$order_date', '$notes', '$price')";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Close the connection

?>
