<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Getaway</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assests/style/contactus.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/payment.css">
    <link rel="stylesheet" href="style/homepage.css">
</head>
<body>
<section id="header">
        <div>
            <ul id="navbar">
                <li><img src="img/COVER.png" class="logo"  style="height: 50px; border-radius: 15px;"></a></li>
                <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="AboutUsECommerce.php" >About</a></li>
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php" class="active"><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>

    
    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">
                    <h3 class="title">Billing Address</h3>

                    <div class="inputbox">
                        <span>Full Name: </span>
                        <input type="text" placeholder="Enter your name..." required>
                    </div>

                    <div class="inputbox">
                        <span>Email: </span>
                        <input type="email" placeholder="Enter your email..." required>
                    </div>

                    <div class="inputbox">
                        <span>Address: </span>
                        <input type="text" placeholder="Enter your address..." required>
                    </div>

                    <div class="inputbox">
                        <span>City: </span>
                        <input type="text" placeholder="Enter your city..." required>
                    </div>

                    <div class="flex">

                        <div class="inputbox">
                            <span>State: </span>
                            <input type="text" placeholder="Eg:Maharashtra" required>
                        </div>
                        <div class="inputbox">
                            <span>Zip Code: </span>
                            <input type="text" placeholder="Eg: 123456" maxlength="6" required>
                        </div>

                    </div>

                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputbox">
                        <span>cards Accepted: </span>
                        <img src="img/Payment.jpg" style="width: 240px; height: 90px;" alt="">
                    </div>

                    <div class="inputbox">
                        <span>Name on Card: </span>
                        <input type="text" placeholder="Eg: Mr.Om Shukla" required>
                    </div>

                    <div class="inputbox">
                        <span>Debit/Credit Card Number: </span>
                        <input type="text" placeholder="Eg: 1111-2222-3333-4444" maxlength="16" required>
                    </div>

                    <div class="inputbox">
                        <span>Exp Month: </span>
                        <input type="text" placeholder="Eg: March" required>
                    </div>

                    <div class="flex">

                        <div class="inputbox">
                            <span>Exp Year: </span>
                            <input type="text" placeholder="Eg:2025" required maxlength="4">
                        </div>
                        <div class="inputbox">
                            <span>CVV: </span>
                            <input type="text" placeholder="Eg: 1234" maxlength="4" required>
                        </div>

                    </div>

                </div>

            </div>

            <input type="submit" value="Proceed to Checkout" class="submit-btn">


        </form>
    </div>

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
</html>