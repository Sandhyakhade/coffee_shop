
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <h1>Go Coffee</h1>
        </div>
        <form action="validatelogin.php" method="POST" id="loginform"class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" placeholder="enter your Name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" placeholder="enter your Password" name="password" required>
            </div>
            <input type="submit" class="btn" value="Login" name="submit"></><p class="register-link">Don't have an account<a href="">Register here</a></p>
        </form>
    </div>
  
</body>
</html>