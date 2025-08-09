<?php
// Include database connection
include_once 'database.php';

// User data (these values should come from a form, e.g., POST request)
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$date = date('Y-m-d H:i:s');
$pdo = new PDO("mysql:host=localhost;dbname=coffeeshop", "root", "");

// Prepare the SQL query
$stmt = $pdo->prepare("INSERT INTO users (id,name, email, password,created_at) VALUES (?,?,?, ?, ?)");

// Execute with values


$stmt->execute(['',$name, $email, $password,$date]);
header('location: homepage.php');



    ?>