 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="logo"><a href="index.php"><img src="img/logo.png" width="200" height="100" alt="Wings N Joy Logo"></a></li>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="menu.php"><i class="fas fa-utensils"></i> Menu</a></li>
                <li><a href="account.php"><i class="fas fa-user"></i> My Account</a></li>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>People's Choice Sauce</h1>
        <div class="menu">
            <div class="menu-item">
                <h2><i class="fas fa-pepper-hot"></i> Buffalo (Mild/Medium/Hot)</h2>
                <p>Classic spicy sauce, usually made with cayenne pepper and butter.</p>
            </div>
            <!-- Add other menu items here -->

            <div class="pricing-options">
                <h2><i class="fas fa-tag"></i> Pricing Options</h2>
                <div class="option">
                    <span class="option-description"><i class="fas fa-plus-circle"></i> Unlimited Flavors – 12 pcs</span>
                    <button class="option-btn">$25.00</button>
                </div>
                <div class="option">
                    <span class="option-description"><i class="fas fa-check-circle"></i> 4 Flavors – 9 pcs</span>
                    <button class="option-btn">$20.00</button>
                </div>
                <div class="option">
                    <span class="option-description"><i class="fas fa-check-circle"></i> 3 Flavors – 6 pcs</span>
                    <button class="option-btn">$15.00</button>
                </div>
                <div class="option">
                    <span class="option-description"><i class="fas fa-check-circle"></i> 2 Flavors – 3 pcs</span>
                    <button class="option-btn">$10.00</button>
                </div>
                <div class="option">
                    <span class="option-description"><i class="fas fa-check-circle"></i> 1 Flavor – 3 pcs</span>
                    <button class="option-btn">$7.00</button>
                </div>
            </div>

            <div class="gallery">
                <h2><i class="fas fa-image"></i> Delicious Sauces of Wings N Joy!</h2>
                <!-- Buffalo Wings -->
                <div class="gallery-item">
                    <img src="img/buffalo_wings.png" alt="Buffalo Wings">
                    <h3><i class="fas fa-bullhorn"></i> Buffalo Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Buffalo Wings">
                        <input type="hidden" name="item_price" value="5.99">
                        <label for="buffalo-qty">Quantity:</label>
                        <select id="buffalo-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Honey BBQ Wings -->
                <div class="gallery-item">
                    <img src="img/Honey-BBQ-Wings.png" alt="Honey BBQ Wings">
                    <h3><i class="fas fa-fire"></i> Honey BBQ Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Honey BBQ Wings">
                        <input type="hidden" name="item_price" value="6.99">
                        <label for="honey-bbq-qty">Quantity:</label>
                        <select id="honey-bbq-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Lemon Pepper Wings -->
                <div class="gallery-item">
                    <img src="img/Lemon-Pepper-Wings.png" alt="Lemon Pepper Wings">
                    <h3><i class="fas fa-lemon"></i> Lemon Pepper Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Lemon Pepper Wings">
                        <input type="hidden" name="item_price" value="7.99">
                        <label for="lemon-pepper-qty">Quantity:</label>
                        <select id="lemon-pepper-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Garlic Parmesan Wings -->
                <div class="gallery-item">
                    <img src="img/Garlic_Parmesan_Wings.png" alt="Garlic Parmesan Wings">
                    <h3><i class="fas fa-cheese"></i> Garlic Parmesan Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Garlic Parmesan Wings">
                        <input type="hidden" name="item_price" value="8.99">
                        <label for="garlic-parmesan-qty">Quantity:</label>
                        <select id="garlic-parmesan-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Teriyaki Wings -->
                <div class="gallery-item">
                    <img src="img/Teriyaki Wings.png" alt="Teriyaki Wings">
                    <h3><i class="fas fa-drumstick-bite"></i> Teriyaki Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Teriyaki Wings">
                        <input type="hidden" name="item_price" value="9.99">
                        <label for="teriyaki-qty">Quantity:</label>
                        <select id="teriyaki-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Cajun Wings -->
                <div class="gallery-item">
                    <img src="img/Cajun Wings.png" alt="Cajun Wings">
                    <h3><i class="fas fa-pepper-hot"></i> Cajun Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Cajun Wings">
                        <input type="hidden" name="item_price" value="10.99">
                        <label for="cajun-qty">Quantity:</label>
                        <select id="cajun-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Mango Habanero Wings -->
                <div class="gallery-item">
                    <img src="img/Mango_Habanero_Wings.png" alt="Mango Habanero Wings">
                    <h3><i class="fas fa-chili-pepper"></i> Mango Habanero Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Mango Habanero Wings">
                        <input type="hidden" name="item_price" value="11.99">
                        <label for="mango-habanero-qty">Quantity:</label>
                        <select id="mango-habanero-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>

                <!-- Korean BBQ Wings -->
                <div class="gallery-item">
                    <img src="img/Korean BBQ Wings.png" alt="Korean BBQ Wings">
                    <h3><i class="fas fa-cube"></i> Korean BBQ Wings</h3>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="item_name" value="Korean BBQ Wings">
                        <input type="hidden" name="item_price" value="12.99">
                        <label for="korean-bbq-qty">Quantity:</label>
                        <select id="korean-bbq-qty" name="item_quantity">
                            <option value="6">6 pieces</option>
                            <option value="12">12 pieces</option>
                            <option value="24">24 pieces</option>
                        </select>
                        <button type="submit" name="add_to_cart"><i class="fas fa-cart-plus"></i> Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy;  2024 WINGS 'N JOY. All rights reserved.</p>
    </footer>
</body>
</html>
