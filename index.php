<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings N Joy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        <h1>Welcome to Wings N Joy!</h1>
		 <h1>The best chicken wings in town!</h1>

        <a href="menu.php" class="btnn">Order Now</a>  

        <!-- Auto-Sliding Gallery -->
<div class="gallery">
    <h2>Our Delicious Wings</h2>
    <div class="gallery-slider">
        <div class="slides-container">
            <div class="slide">
                <img src="img/logo.png" alt="Wings 1">
            </div>
            <div class="slide">
                <img src="img/Teriyaki Wings.png" alt="Wings 2">
            </div>
            <div class="slide">
                <img src="img/Sweet Chilli.png" alt="Wings 3">
            </div>
            <div class="slide">
                <img src="img/Sriracha Wings.png" alt="Wings 4">
            </div>
				 <div class="slide">
                    <img src="img/spicy_garlic wings.png" alt="Wings 5">
                </div>
				 <div class="slide">
                    <img src="img/pineapple teriyaki-wings.png" alt="Wings 6">
                </div>
				 <div class="slide">
                    <img src="img/Maple-Bacon-Wrapped-Wings.png" alt="Wings 7">
                </div>
				 <div class="slide">
                    <img src="img/Mango_Habanero_Wings.png" alt="Wings 8">
                </div>
				 <div class="slide">
                    <img src="img/Lemon-Pepper-Wings.png" alt="Wings 9">
                </div>
				 <div class="slide">
                    <img src="img/Korean BBQ Wings.png" alt="Wings 10">
                </div>
				 <div class="slide">
                    <img src="img/Jamaican Jerk wings.png" alt="Wings 11">
                </div>
				 <div class="slide">
                    <img src="img/Honey-Mustard.png" alt="Wings 12">
                </div>
				 <div class="slide">
                    <img src="img/Honey-BBQ-Wings.png" alt="Wings 13">
                </div>
				 <div class="slide">
                    <img src="img/Garlic_Parmesan_Wings.png" alt="Wings 14">
                </div>
				 <div class="slide">
                    <img src="img/Chipotle_chicken-wings.png" alt="Wings 15">
                </div>
				 <div class="slide">
                    <img src="img/Carolina Gold wings.png" alt="Wings 16">
                </div>
				 <div class="slide">
                    <img src="img/Cajun Wings.png" alt="Wings 17">
                </div>
				 <div class="slide">
                    <img src="img/buffalo-chicken-wings.png" alt="Wings 18">
                </div>
				 <div class="slide">
                    <img src="img/buffalo_wings.png" alt="Wings 3">
                </div>
			 </div>	
 </div>
            </div>
       
    </main>
    <footer>
        <p>&copy; 2024 WINGS 'N JOY. All rights reserved.</p>
    </footer>

  <script>
    // Auto-Sliding Gallery JavaScript
    let currentSlide = 0;
    const slidesContainer = document.querySelector('.gallery-slider .slides-container');
    const totalSlides = document.querySelectorAll('.gallery-slider .slide').length;

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlidePosition();
    }

    function updateSlidePosition() {
        slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Auto-slide every 3 seconds
    setInterval(nextSlide, 3000);
</script>


</body>
</html>
