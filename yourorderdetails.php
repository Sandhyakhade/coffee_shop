<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="email"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .no-data {
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Order Details</h1>

    <!-- Input form for email -->
    <form method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Fetch Orders</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
        // Database connection details
        $servername = "localhost"; // Change as required
        $username = "root";        // Database username
        $password = "";            // Database password
        $dbname = "coffeeshop";    // Database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get the email from the form
        // Query to fetch orders based on the given email
       $sql = "SELECT * FROM order1";
                $result = $conn->query($sql);
$email=$_POST['email'];


        // Display results if any orders are found
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Name</th>
                        <th>Quantity</th>
                         <th>Add On</th>
                          <th>Size</th>
                           <th>description</th>
                            <th>Price</th>
                             <th>Date</th>
                              <th>Email</th>
                               <th>status</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                if ( $email== $row['email']) {
                    echo "<tr>
                        <td>{$row['order_id']}</td>
                        <td>{$row['order_name']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['add_on']}</td>
                        <td>{$row['size']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['status']}</td>

                      </tr>";
                }
            }
            echo "</table>";
        } else {
            echo "<p class='no-data'>No orders found for this email.</p>";
        }

        // Close the connection
        
        $conn->close();
    }
    ?>
</body>
</html>
