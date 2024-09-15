<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><a href="index.php"><img src="img/logo.png" width="200" height="100" alt="Wings N Joy Logo"></a></li>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                <li><a href="account.php"><i class="fas fa-user"></i> My Account</a></li>
            </ul>
        </nav>
    </header>
    <main>
       
        <h1><i class="fas fa-user-plus"></i> Register</h1>
        <div class="form">
            <form action="register.php" method="POST">
                <input type="text" name="first_name" placeholder="First Name" required><br>
                <input type="text" name="last_name" placeholder="Last Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="text" name="phone_no" placeholder="Phone No" required><br>
                <input type="text" name="landline" placeholder="Landline"><br>
                <input type="text" name="delivery_address" placeholder="Delivery Address" required><br>
                <input type="text" name="city_province" placeholder="City/Province" required><br>
                <input type="text" name="barangay" placeholder="Barangay" required><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                <button class="btnn" type="submit">Register</button>
            </form>
        </div>
    </main>
</body>
</html>
