<?php
// Simple session check for admin (in real-world apps, authenticate using sessions or tokens)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: adminlogin.php");
    exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    /* General styles */
   body {
       margin: 0;
       font-family: Arial, sans-serif;
       background-color: #f4f4f9;
   }

   h1,
   h2,
   h3 {
       margin: 0;
   }

   /* Sidebar styles */
   .sidebar {
       width: 250px;
       height: 100vh;
       background-color: #6f4e37;
       color: #fff;
       position: fixed;
       top: 0;
       left: 0;
       display: flex;
       flex-direction: column;
   }

   .sidebar h1 {
       font-size: 20px;
       text-align: center;
       padding: 20px;
       border-bottom: 1px solid #444;
   }

   .sidebar ul {
       list-style: none;
       padding: 0;
       margin: 0;
   }

   .sidebar ul li {
       padding: 15px 20px;
       border-bottom: 1px solid #444;
   }

   .sidebar ul li a {
       text-decoration: none;
       color: #fff;
       font-size: 16px;
       display: block;
   }

   .sidebar ul li:hover {
       background-color: #575757;
   }

   /* Main content styles */
   .main-content {
       margin-left: 250px;
       padding: 20px;
   }

   .dashboard-header {
       display: flex;
       justify-content: space-between;
       align-items: center;
       padding: 10px 20px;
       background-color: #fff;
       border-bottom: 1px solid #ddd;
       box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
   }

   .dashboard-header h2 {
       font-size: 24px;
       color: #333;
   }

   .dashboard-header button {
       padding: 10px 15px;
       border: none;
       background-color: #333;
       color: #fff;
       border-radius: 5px;
       cursor: pointer;
   }

   .dashboard-header button:hover {
       background-color: #575757;
   }

   /* Widgets section */
   .widgets {
       display: grid;
       grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
       gap: 20px;
       margin-top: 20px;
   }

   .widget {
       background-color: #fff;
       border: 1px solid #ddd;
       border-radius: 5px;
       padding: 20px;
       text-align: center;
       box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
   }

   .widget h3 {
       font-size: 18px;
       color: #333;
       margin-bottom: 10px;
   }

   .widget p {
       font-size: 22px;
       font-weight: bold;
       color: #333;
   }
    </style

</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Admin Panel</h1>
        <ul>
            <li><a href="displayusers.php">view Users</a></li>
            <li><a href="seeorders.php">Orders</a></li>
            <li><a href="menu.php">menu</a></li>
            <li><a href="addmenu.html">add menu</a></li>
            <li><a href="payments.php">view payments</a></li>
            <li><a href="Logout.php">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="dashboard-header">
            <h2>Dashboard</h2> 
        </div>

        <!-- Widgets -->
        <div class="widgets">
            <div class="widget">
                <h3>Total Orders</h3>
                <p></p>
            </div>
            <div class="widget">
                <h3>Total Revenue</h3>
                <p></p>
            </div>
            <div class="widget">
                <h3>Total Users</h3>
                <p></p>
            </div>
            <div class="widget">
                <h3>Pending Orders</h3>
                <p></p>
            </div>
        </div>
    </div>
</body>
</html>
