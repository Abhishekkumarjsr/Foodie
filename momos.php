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
            <a href="index.php">Home</a>
            <a href="#" class="active">Dishes</a>
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

    <!-- Momos section starts -->
    <section class="dishes" id="dishes">
        <h3 class="dishes-page-sub-heading"> Momos </h3>
        <h1 class="heading">Our Popular Momos Dishes </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Steamed Veg Momos</p>
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
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Steamed Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Fried Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Fried Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Tandoori Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Tandoori Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Paneer Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Cheese Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Corn & Cheese Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Spinach & Cheese Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Mushroom Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Spinach & Mushroom Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Mixed Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Schezwan Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Schezwan Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Manchurian Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Manchurian Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Kothey Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Kothey Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Jhol Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Kothey Jhol Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Chilli Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Chilli Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Garlic Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Garlic Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Lemon Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Lemon Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Prawn Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Fish Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Patato & Cheese Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Tofu Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Spinach & Tofu Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>BBQ Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>BBQ Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Coconut Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Coconut Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Peanut Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Peanut Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Pesto Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Pesto Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Cashew Nut Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Avocado Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Avocado Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Honey Glazed Veg Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Honey Glazed Chicken Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Jalapeno & Cheese Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.jpg" alt="">
                <div class="content">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <h3>Momos</h3>
                    <p>Sweet Potato & Black Bean Momos</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <span><strong>₹75.00 only</strong></span>
                <div class="cart">
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- dishes section ends -->

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>