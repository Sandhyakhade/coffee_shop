<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - User Dashboard</title>
    <link rel="stylesheet" href="userdashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Coffee Shop</h2>
                <h3><?php session_start(); echo $_SESSION['name'];?></h3>
            </div>
            <ul class="menu">
                
                <li><button id="seeorders.php"><a href="seeorders.php" style="color: white; text-decoration:none;">See Ordered Items</a></button></li>
                <li><button id="order"></button><button><a href="orderpage.php"style="color: white; text-decoration:none;" >Order Coffee</a></button></li>
                <li><button id="logout"><a href="logout.php"style="color: white; text-decoration:none;" >Logout</a></button></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main>
            <header>
                <h1>Welcome, Coffee Lover!</h1>
            </header>
            <section id="content">
                <p>Select an option from the menu to get started.</p>
            </section>
        </main>
    </div>

    <script src="userdashboard.js"></script>
</body>
</html>
