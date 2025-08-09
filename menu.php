<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Menu</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header>
        <h1>Coffee Shop Menu</h1>
    </header>
    <main>
        <div id="menu-container">
            <h2>Our Menu</h2>
            <div id="menu-items">
                <?php
                // Include the database connection file
                $servername = "localhost"; // Change to your database server if it's not localhost
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "coffee_shop"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


                // SQL query to get the menu items
                $sql = "SELECT * FROM menu";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output each menu item
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='menu-item'>";
                        echo "<span class='menu-name'>".$row['menu_name']."</span>";
                        echo "<span class='menu-price'>".$row['menu_price']."</span>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No menu items available.</p>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Coffee Shop</p>
    </footer>
</body>
</html>
