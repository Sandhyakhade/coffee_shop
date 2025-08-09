<?php
session_start();

// If the admin is already logged in, redirect them to the dashboard
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: admindashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Admin credentials for demonstration purposes
    $admin_username = "admin"; // Replace with database check
    $admin_password = "sandhya"; // Replace with database check

    // Get the entered credentials from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials (in a real app, this would be checked against a database)
    if ($username === $admin_username && $password === $admin_password) {
        // Set session variable indicating the admin is logged in
        $_SESSION['admin_logged_in'] = true;
        header("Location: admindashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <?php
    if (isset($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
