<?php
if(isset($_POST['name'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS myDB1";
    if ($conn->query($sql) === TRUE) {
      $database = true;
    } 

    // SQL to create table
    $sql = "CREATE TABLE IF NOT EXISTS contact (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name1 VARCHAR(50) NOT NULL,
      email VARCHAR(50) UNIQUE NOT NULL,
      description1 VARCHAR(5000) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
       $table = true;
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $name1 = $_POST['name'];
    $email = $_POST['emailid'];
    $description1 = $_POST['desc'];

    $sql = "INSERT INTO `contact` (`name1`, `email`, `description1`) VALUES ('$name1', '$email', '$description1')";

    if ($conn->query($sql) === TRUE) {
       $insert = true;
       header("Location: homepage.php");
       exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style/contactus.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
                <li><a href="contact.php" class="active">Contact</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php" ><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>
       

     
   
    <br>
    <br>

    <section class="contact">
        <div class="content">
            <h2 class="titlecontact">Contact Us</h2>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <b>ADDRESS</b>
                        <P>K.j Somaiya college of Engneering</P>
                        <P>Vidhya-Vihar East</P>
                        <P>Mumbai, Maharashtra 400077</P>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <b>Phone</b>
                        <P>+22 24093682</P>
                        <p>+22 24083182</p>
                        <p>+22 24093182</p>

                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <b>Email</b>
                        <P>rahim@GeoInsight.in</P>
                        <p>mandeep@GeoInsight.in</p>
                    </div>
                </div>

            </div>

            <div class="contactus-form">
                <form action="contact.php" method="post">
                    <h2>Send Message</h2>
                    <div class="input-box">
                    <input type="text" name="name" required="required" placeholder="NAME">


                        
                    </div>

                    <div class="input-box">
                    <input type="email" name="emailid" required="required" placeholder="Email-id">
                        
                    </div>

                    <div class="input-box">
                    <textarea required="required" placeholder="Enter your msg" name="desc"></textarea>
                        
                    </div>

                    <div class="input-box">
                        <div class="center">
                            <button type="submit" class="submit-button">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
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
</html>