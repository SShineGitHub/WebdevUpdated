<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Link to Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="formcontainer">
        <header>
            <nav>
                <ul>
                    <li class="logo"><a href="index.php"><img src="img/logo.png" width="200" height="100" alt="Wings N Joy Logo"></a></li>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
                    <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                    <li><a href="account.php"><i class="fas fa-user"></i> My Account</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <h1>Wings N Joy</h1>
            <h1>Login</h1>
            <div class="form">
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="password" placeholder="Enter Password Here">
                <button class="btnn"><a href="#"><i class="fas fa-sign-in-alt"></i> Login</a></button>

                <p class="link">Don't have an account<br>
                <a href="register.php"><i class="fas fa-user-plus"></i> Sign up </a> here</p>
            </div>
        </main>
    </div>
</body>
</html>
