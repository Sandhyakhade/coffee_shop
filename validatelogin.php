<?php
session_start();
if (isset($_POST['submit'])) {
    // Admin credentials for demonstration purposes
    $servername = "localhost"; // Change to your database server if it's not localhost
    $username = "root"; // Change to your database username
    $password = ""; // Change to your database password
    $dbname = "coffeeshop"; // The name of your database
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    echo $conn->server_info;
// SQL query to fetch data"; // Your query
$sql = "SELECT email, password FROM users";
$result = $conn->query($sql); // Execute the query

// Check if there are results
if ($result->num_rows>0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
           if ($row['email']==$user && $row['password']==$pass){
                $_SESSION['name'] = $name;
                $_SESSION['user_id'] = $user;
                $_SESSION['user_logged_in'] = True;
                header('location:userdashboard.php');
                exit();

           }
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();

}
   
?>