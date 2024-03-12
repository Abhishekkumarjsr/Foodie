<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/ba586748f0.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- header sectoin starts -->
    <header class="navbar">
        <div class="logo">
            <a href="#"><img src="logo.png" alt="">
                <h2>Foodie</h2>
            </a>
        </div>
        <div class="link">
            <a href="#" class="active">Home</a>
            <a href="#">Dishes</a>
            <a href="#">About</a>
            <a href="#">Menu</a>
            <a href="#">Review</a>
            <a href="#">Orders</a>
        </div>
        <div class="symbols">
            <a href="#"> <i class="material-symbols-outlined" id="search-label">search</i></a>
            <a href="#"> <i class="material-symbols-outlined">favorite</i></a>
            <a href="#"> <i class="material-symbols-outlined">shopping_cart</i></a>
            <a href="#"> <i id="menu-bar" class="material-symbols-outlined menu">menu</i></a>
        </div>
    </header>
    <!-- header sectoin ends -->

    <!-- search form starts -->
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box"><span class="material-symbols-outlined">search</span></label>
        <span class="material-symbols-outlined" id="close">close</span>
    </form>
    <!-- search form ends -->

    <!-- home section starts -->
    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Sandwich</h3>
                        <p>Do Try</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="img/1.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Spicy noodles</h3>
                        <p>Do Try</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="img/2.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Fried Chicken</h3>
                        <p>Do Try</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="img/3.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Hot Pizza</h3>
                        <p>Do Try</p>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="img/4.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- home section ends -->

    <!-- dishes section starts -->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading"> Our Dishes </h3>
        <h1 class="heading"> Popular Dishes </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/1.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Sandwiches</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <span><strong>Starting form ₹45.00 only</strong></span>
                <div class="cart">
                    <a href="sandwish.php" class="btn">Have a look</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹70.00 only</strong></span>
                <div class="cart">
                    <a href="momos.php" class="btn">Have a look</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Chowmein</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <span><strong>Starting form ₹80.00 only</strong></span>
                <div class="cart">
                    <a href="Chowmein.php" class="btn">Have a look</a>
                </div>
            </div>
        </div>
    </section>
    <!-- dishes section ends -->

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>