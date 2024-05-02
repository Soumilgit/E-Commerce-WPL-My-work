<?php
session_start();

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "myDB1";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM register WHERE email=? AND password1=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Set session variables
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['username'];
        header("Location: homepage.php"); 
        exit();
    } else {
        echo "Invalid username or password";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/login.css">
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
                <li><a href="login.php" class="active"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php" ><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>
    
    
    <div class="wrapper">
        <form id="loginForm" action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input id="email" type="email" placeholder="Enter your email" required  name="uname"> 
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input id="password" type="password" placeholder="Password" required  name="password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="forgotpassword.php">Forgot Password? </a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
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
