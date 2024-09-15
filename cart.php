<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Link to Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><a href="index.php"><img src="img/logo.png" width="200" height="100" alt="Wings N Joy Logo"></a></li>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                <li><a href="account.php"><i class="fas fa-user"></i> My Account</a></li>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Your Cart</h1>
        <?php if (empty($_SESSION['cart'])): ?>
            <p>No items in your cart yet.</p>
        <?php else: ?>
            <!-- Cart table -->
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    foreach ($_SESSION['cart'] as $item):
                        $item_total = $item['price'] * $item['quantity'];
                        $total_price += $item_total;
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><?php echo number_format($item['price'], 2); ?></td>
                            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                            <td><?php echo number_format($item_total, 2); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td><strong><?php echo number_format($total_price, 2); ?></strong></td>
                    </tr>
                </tbody>
            </table>

            <!-- Add Clear Cart Button and other options -->
            <div class="cart-buttons">
                <button onclick="window.location.href='menu.php'"><i class="fas fa-arrow-left"></i> Continue Shopping</button>

                <!-- Clear Cart Button -->
                <form action="cart.php" method="POST">
                    <button type="submit" name="clear_cart"><i class="fas fa-trash"></i> Clear Cart</button>
                </form>

                <button onclick="window.location.href='checkout.php'"><i class="fas fa-credit-card"></i> Checkout</button>
            </div>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 WINGS 'N JOY. All rights reserved</p>
    </footer>
</body>
</html>
