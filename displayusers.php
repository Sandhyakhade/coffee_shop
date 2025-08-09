<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        /* Header styling */
        table th {
            background-color: #4CAF50;
            color: white;
        }

        /* Row styling */
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Styling for password column (if needed to hide it) */
        .password {
            color: #777;
        }

        /* Styling for the table's borders */
        table, th, td {
            border: 1px solid #ddd;
        }

        /* Add some space around the page */
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Users List</h1>
        <?php
        // Database connection details
        $servername = "localhost";  // Change this based on your server
        $username = "root";         // Your database username
        $password = "";             // Your database password
        $dbname = "coffeeshop";     // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch all users
        $sql = "SELECT id, name, email, password, created_at FROM users";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created At</th>
                    </tr>";

            // Output data for each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td class='password'>" . $row["password"] . "</td>
                        <td>" . $row["created_at"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No users found in the database.</p>";
        }

        // Close connection
        $conn->close();
        ?>
    </div>

</body>
</html>
