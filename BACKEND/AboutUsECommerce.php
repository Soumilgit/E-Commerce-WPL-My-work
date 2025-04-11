<!DOCTYPE html>
<html lang="en"> 
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>About Us</title>
 <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 <link rel="stylesheet" href="style/homepage.css">

 

 
</head>

<body>
    <style>
        * {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Spartans', sans-serif;
}


h1 {
font-size: 50px;
line-height: 64px;
color: #222;
}
h2 {
font-size: 46px;
line-height: 54px;
color: #222;
}
h4 {
font-size: 20px;
color: #222;
}
h6 {
    font-weight: 700;
    font-size: 12px;
}
p {
    font-size: 16px;
    color: #465b52;
    margin: 15px 0 20px 0;
}
.section-p1 {
    padding: 40px 80px;
}
.section-m1 {
    margin: 40px 0;
}

button.normal {
    font-size:14px;
    font-weight:600;
    padding:15px 30px;
    color:#000;
    background-color:#fff;
    border-radius:4px;
    cursor:pointer;
    border:none;
    outline:none;
    transition:0.2s;
}

button.white {
    font-size:13px;
    font-weight:600;
    padding:11px 18px;
    color:#fff;
    background-color:transparent;
    cursor:pointer;
    border:1px solid#fff;
    outline:none;
    transition:0.2s;
}

body {
    width: 100%;
    }

/*Header Start */
#header {
    display: flex;
    align-items: center;
    justify-content:space-between;
    padding: 20px 80px;
    background:#E3E6F3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    z-index:999 ;
    position: sticky;
    top:0;
    left:0;
    }
#header .logo {
    display: flex;
    align-items: center;
    }
#navbar {
    display: flex;
    align-items:center;
    justify-content: center;
    }
    
#navbar li {
        list-style: none;
        padding:0 20px;
        position:relative;
        }
        
#navbar li a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        color:#1a1a1a;
        transition:0.3s ease;
        }

#navbar li a:hover,
#navbar li a.active {
        color: #088178;
        }
        
#navbar li a.active::after,
#navbar li a:hover::after{
        content: "";
        width: 30%;
        height:2px;
        background: #088178;
        position: absolute;
        bottom:-4px;
        left: 20px;
        }
        #feature{
    display:flex;
    align-items:center;
    justify-content:space-between;
    flex-wrap:wrap;
}

#feature .fe-box {
    width: 180px;
    text-align: center;
    padding: 20px 15px;
    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
    /* border: 1px solid #cce7d0; */
    border-radius: 4px;
    margin: 15px 0;
}

#feature .fe-box:hover {
    box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
}

.hello{
    height:150px;
    position: relative;
    width:150px;
}

#feature .fe-box img{
    width:100%;
    margin-bottom:10px;
}

#feature .fe-box h6{
    display: inline-block;
    padding:9px 8px 6px 8px;
    line-height: 1;
    border-radius: 4px;
    color:#088178;
    background-color:#fddde4;
}

#feature .fe-box:nth-child(2) h6 {
    background-color:#cdebbc;
}

#feature .fe-box:nth-child(3) h6 {
    background-color: #d1e8f2;
}

#feature .fe-box:nth-child(4) h6 {
    background-color:cdd4f8;
}

#feature .fe-box:nth-child(5) h6 {
    background-color:#f6dbf6;
}

#feature .fe-box:nth-child(6) h6 {
    background-color: #fff2e5;
}
        #page-header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; 
            height:100vh;/* Adjust the height as needed */
            text-align: center;
            color: white;
    }
        #page-header.about-header{
            background-image: url("banner.png");
            
            width:1700px;
            height:400px;
            background-repeat: no-repeat;
            background-position: center;
            text-align:center;
            
            
        }
        .row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap; /* This allows the boxes to wrap to the next row if there's not enough space */
}

.fe-box {
    flex: 1;
    /* Add any additional styling you need for the boxes here */
}
        #about-head {
            display: flex;
            align-items: center;
        }
        #about-head img{
            width: 50%;
            height:auto;
        }
        #about-head div{
            
            padding-left:0px;
        }
        #about-app{
            text-align:center;


        }
        #about-app .video{
            width: 70%;
            
        }
        #about-app .video video{
            width: 100%;
            height: 100%;
            border-radius:20px;
        }
        .section-p1{
            padding: 40px 40px;
        }
/* Example for the main content container */
.main-content {
    margin-top: 60px; /* Adjust this value based on the height of your navbar */
}

            #mobile{
                display:flex;
                align-items:center;
            }
            #mobile i{
                color:#1a1a1a;
                font-size:24px;
                padding-left:20px;

            }
            #close{
                display:initital;
                position:absolute;
                top:30px;
                left:30px;
                color:#222;
                font-size:24px;
            }
            #lg-bag{
                display:none;
            }
            #hero {
                height:70vh;
                padding:0 80px;
                background-position:top 30% right 30%
            }
            #feature {
                justify-content: space-between;
            }
            #feature .fe-box{
                width: 155px;
                margin:0 0 15px 0;
            }
            #product1.pro{
                width:100%;

            }
            #newsletter {
    display: flex;
    justify-content:space-between;
    flex-wrap:wrap;
    align-items:center;
    background-image:url("img/b14.png");
    background-repeat: no-repeat;
    background-position: 20% 30%;
    background-color: #041e42;
}

#newsletter h4{
    font-size:22px;
    font-weight: 700;
    color:#fff;
}

#newsletter p{
    font-size:14px;
    font-weight: 600;
    color:#fff;
}

#newsletter p span{
    color:#ffbd27;
}

#newsletter .form{
    display:flex;
    width:40%;
}

#newsletter input{
    height: 3.125rem;
    padding:0 1.25em;
    font-size:14px;
    width:100%;
    border:1px solid transparent;
    border-radius:4px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

#newsletter button{
    background-color:#088178;
    color:#fff;
    white-space:nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

footer{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
}

footer .col{
    display:flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom:20px;
}

footer .logo{
    margin-bottom:30px;

}

footer h4{
    font-size: 14px;
}

footer p{
    font-size: 13px;
    margin:0 0 8px 0;
}

footer a{
    font-size:13px;
    text-decoration:none;
    color:#222;
    margin-bottom:10px
}

footer .follow{
    margin-top:20px ;
}

footer .follow i{
    color:#465b52;
    padding-right:4px;
    cursor:pointer;
}

footer .install .row img{
    border:1px solid#088178;
    border-radius:6px;
}

footer .install img{
    margin:10 px 0 15px 0;
}

footer .follow i:hover,
    footer a:hover{
        color:#088178;
    }

footer .copyright{
    width:100%;
    text-align:center;
}

/* Shop Page */

#page-header{
    background-image:url("img/b1.jpg");
    width:100%;
    height:40vh;
    background-size: cover;
    display:flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding:14px;
}

#page-header h2,
#page-header p{
    color:#fff;
}
    </style>
    <body>

    <div>
    <section id="header">
        <div>
            <ul id="navbar">
                <li><img src="img/COVER.png" class="logo"  style="height: 50px; border-radius: 15px;"></a></li>
                <li><input type="text" placeholder="    Search" style="width: 350px;height: 28px; border-radius: 15px;"></li>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="AboutUsECommerce.php" class="active">About</a></li>
                <li><a href="contact.php" >Contact</a></li>
                <li><a href="login.php"><i class="fas fa-user"></i>   Login</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>   My-Cart</a></li>
            </ul>
        </div>
    </section>
    </div>
    
    
        
        
        <section id="about-head" class="section-p1">
            
            <img src="img/a6.jpg" alt="" style="height:590px;width:790px;">
            
            <div>
                <h2 style="margin:0 40px;font-family: 'Spartans', sans-serif;">Who are We?</h2>
                
                
                <p style="margin:0 40px;font-family: 'Spartans', sans-serif;font-size:20px;"><strong style="font-family: 'Spartan', sans-serif;">Our Vision:</strong> We began with a smart but simple vision where technology and design go hand-in-hand to help people get a feel for its products, plus stylish blocks of color that tell us as much about the company as the text does. In terms of knowing what your audience wants to see, it’s hard to do better than this.
                    Whether you're a fashion enthusiast seeking the latest trends, a tech-savvy individual in pursuit of cutting-edge gadgets, or someone with a penchant for timeless classics, our curated collection has you covered. From stylish jewelry and chic handbags to state-of-the-art tech accessories and practical everyday items, we take pride in offering a diverse range that transcends age, gender, and lifestyle.
                </p>
                <br></br>
                
            </div>
        </section>
        <marquee background-color="#ccc" loop="-1" scrollamount="5" width="100%"">
            Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.
            </marquee>
        <section id="about-app" class="section-p1">
           <h1>Download Our <a href="#">App</a></h1>
           <div class="video">
            <video autoplay muted loop src="img/1.mp4" style="margin:0 220px;"></video>

           </div>

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

</html>
        