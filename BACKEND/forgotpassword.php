

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet", href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    
    .hidden {
            display: none;
        }
    </style>
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
                <li><a href="login.php" class="active"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php" ><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>
    
   
    <div class="wrapper">
        <form id="forgotPasswordForm">
            <h1>Forgot Password</h1>
            <div class="input-box">
                <input type="email" id="email" placeholder="Enter email address..." required style="color: black">
                <i class='bx bxs-envelope'></i>
            </div>

            <button type="button" id="sendOtpBtn" class="btn">Send OTP</button>

            <div class="input-box hidden" id="otpSection">
                <input type="text" id="otp" placeholder="Enter 4-digit OTP" required maxlength="4" style="color: black">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn hidden" id="confirmBtn">Confirm</button>
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

    <script>
        document.getElementById('sendOtpBtn').addEventListener('click', function() {
            var email = document.getElementById('email').value.trim();
            // Basic validation for email
            if (!email || !email.includes('@')) {
                alert('Please enter a valid email address.');
                return;
            }

            // Simulate sending OTP and show the OTP input
            alert('OTP has been sent to your email address.');
            document.getElementById('otpSection').classList.remove('hidden');
            document.getElementById('confirmBtn').classList.remove('hidden');
            this.classList.add('hidden'); // Hide the send OTP button
        });

        document.getElementById('forgotPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var otp = document.getElementById('otp').value.trim();
            // Validate OTP - For demonstration, any OTP is considered valid
            // Implement your logic for OTP validation
            alert('OTP Verified. Redirecting to homepage.');
            window.location.href = 'homepage.html'; // Redirect to home page
        });
    </script>
</body>
</html>
