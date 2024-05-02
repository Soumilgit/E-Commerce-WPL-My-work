<?php
session_start();

// Check if session variables are set
if (!isset($_SESSION['email']) || !isset($_SESSION['name'])) {
    // Destroy session and cookies
    session_destroy();
    setcookie("email", "", time() - 3600, "/");
    setcookie("name", "", time() - 3600, "/");
    // Redirect to login page
    header("Location: login.php");
    exit();
}

// Your homepage content here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Fashionwear E-commerce Website </title>
    <link rel="stylesheet", href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="style/homepage.css">

</head>
<body>

<div class="background-text"></div>
<section id="header">
        <div>
            <ul id="navbar">
                <li><img src="img/COVER.png" class="logo"  style="height: 50px; border-radius: 15px;"></a></li>
                <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
                <li><a href="homepage.php" class="active">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="AboutUsECommerce.php" >About</a></li>
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php" ><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1> On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button> 
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box" >
            <img class="hello" src="img/img_freeshipping.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>

        <div class="fe-box" >
            <img class="hello" src="img/img_onlineorder.jpg" alt="">
            <h6>Online Order</h6>
        </div>

        <div class="fe-box" >
            <img class="hello" src="img/img_savemoney.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box" >
            <img class="hello"src="img/img_promotions.png" alt="">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box" >
            <img class="hello" src="img/img_happysell.png" alt="">
            <h6>Happy Sell</h6>
        </div> 

        <div class="fe-box" >
            <img class="hello" src="img/img_24by7support.png" alt="">
            <h6>24/7 Support</h6>
        </div> 

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
            <img src="img/f1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
            </div>
                <h4>₹ 1300 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        
        <div class="pro">
            <img src="img/f2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>selfless Tshirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1200 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        
        <div class="pro">
            <img src="img/f8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>dilla T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1000 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        
        <div class="pro">
            <img src="img/f3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>beach T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1900 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 2300 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 500 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 400 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/f7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1300 /-</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
       
        
    </section>

    <section id="banner"class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% OFF </span> - All Tshirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="row"></div>
        <div class="pro-container">
            <div class="pro">
            <img src="img/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1310</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1900</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 4300</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
    

        <div class="pro">
            <img src="img/n5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 150</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>

        <div class="pro">
            <img src="img/n6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1500</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        

        <div class="pro">
            <img src="img/n7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1000</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
        
        <div class="pro">
            <img src="img/n8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 1999</h4>
            </div>
            <a href="#"><div class="cart"><i class="fas fa-shopping-cart"></i></a>
        </div>
        </div>
    </section>
    

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Crazy deals</h4>
                <h2>Buy 1 Get 1 Free</h2>
                <span>The best classic dress is on sale at Voguebay</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>Spring/Summer</h4>
                <h2>Upcoming seasons</h2>
                <span>The best classic dress is on sale at Voguebay</span>
                <button class="white">Collection</button>
            </div>
        </section>

        <section id="banner3"> 
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -50% OFF</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>New FOOTWEAR COLLECTION</h2>
                <h3>Spring/Summer 2024</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-SHIRTS</h2>
                <h3>New Trendy Prints</h3>
            </div>
            
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up for Newsletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span>
                </p>
            </div>
            <div class="form">
                <input type="text"placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img src="img/COVER.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>567 Whistling Wood Road, Street 38, Los Angeles</p>
                <p><strong>Phone:</strong>+01 2222 789 / (+91) 5467 9865</p>
                <p><strong>Hours:</strong>10:00-18:00, Mon - Sun </p>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4></br>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>About</h4><br>
            <a href="#">Account</a>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4><br>
            <p>From App Store or Google Play Store</p>
            <div class="row">
                <img src="img/app.jpg"alt="">
                <img src="img/play.jpg"alt="">
            </div><br>
            <P>Secured Payment Gateways</P><br>
            <img src="img/pay.png"alt="">
        </div>

        <div class="copyright">
            <p> © 2024,  All Rights Reserved</p>
        </div>
    </footer>

    
</body>
<script>
// Wait for the DOM content to be fully loaded
document.addEventListener("DOMContentLoaded", function () {

    // Get all the 'Add to Cart' buttons
    var addToCartBtns = document.querySelectorAll('.cart');

    // Add click event listener to each 'Add to Cart' button
    addToCartBtns.forEach(function(btn) {
        btn.addEventListener('click', function () {
            // Get the product details
            var productName = this.parentNode.querySelector('.des h5').innerText;
            var productImageSrc = this.parentNode.querySelector('img').src;
            var priceText = this.parentNode.querySelector('.des h4').innerText;
            var price = parseFloat(priceText.replace('₹', '').replace('/-', '')); // Extract price from the text
            var selectedSize = "Select Size"; // You can modify this to dynamically get the selected size if needed
            var quantity = 1; // Assuming default quantity is 1

            // Create a new object for the product
            var product = {
                name: productName,
                image: productImageSrc,
                size: selectedSize,
                quantity: quantity,
                price: price // Add the price to the product object
            };

            // Get the existing cart items from localStorage
            var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            // Add the new product to the cart
            cartItems.push(product);

            // Store the updated cart items in localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            // Redirect to the cart page
            window.location.href = "cart.php";
        });
    });

});

</script>

</html>