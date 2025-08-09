<?php
session_start();
if (isset($_POST['submit'])){
 $servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password
$dbname = "coffeeshop"; // Replace with your database name

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "welcome";
    $name = $_POST['customerName'];
    $ordername = $_POST['coffeeType'];
    $quantity = $_POST['quantity'];
    $size = $_POST['coffeeSize'];
    $addon = $_POST['addons'];
    $price = $quantity * 100;
    $description=$_POST['specialInstructions'];
    $date=date('Y-m-d H:i:s');
    $email = $_POST['email'];
    $sql = "INSERT INTO order1 (order_id, order_name, quantity, size,add_on,description, price,date,email,status) 
        VALUES ('', '$ordername', '$quantity', '$size', '$addon', '$description', '$price','$date','$email','pending')";

// Execute the query
if ($conn->query($sql) === TRUE) {
        header("location:userdashboard.php");
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}







?>