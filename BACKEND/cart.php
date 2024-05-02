<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYcart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assests/style/contactus.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="style/cart.css">
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

    <section id="cart" class="section-p1">
        <h2>My Cart</h2>
        <div id="cart-items"></div>
        <button id="clear-cart">Clear Cart</button>
        <button id="proceedButton">Proceed to Buy</button>
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
    
    <script>
        // Function to render cart items
        function renderCartItems() {
            var cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';
            var subtotal = 0;
    
            // Get cart items from localStorage
            var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
            // Loop through cart items and create HTML for each item
            cartItems.forEach(function (item, index) {
                var itemHtml = `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                        <div class="cart-item-details">
                            <h4>${item.name}</h4>
                            <p>Size: ${item.size}</p>
                            <p>Price: ₹${item.price}</p> <!-- Add this line to display the price -->
                            <p>Quantity: <input type="number" class="quantity-input" value="${item.quantity}" data-index="${index}"></p>
                            <button class="remove-item" data-index="${index}">Remove</button>
                        </div>
                    </div>
                `;
                cartItemsContainer.innerHTML += itemHtml;
                subtotal += item.price * item.quantity; // Calculate subtotal
            });
    
            // Add subtotal to the cart
            cartItemsContainer.innerHTML += `
                <div class="subtotal">
                    <h4>Subtotal: ₹${subtotal}</h4>
                </div>
            `;
    
            // Add event listeners for quantity update and remove item
            var quantityInputs = document.querySelectorAll('.quantity-input');
            quantityInputs.forEach(function (input) {
                input.addEventListener('change', updateQuantity);
            });
    
            var removeButtons = document.querySelectorAll('.remove-item');
            removeButtons.forEach(function (button) {
                button.addEventListener('click', removeItem);
            });
        }
    
        // Function to update quantity
        function updateQuantity(event) {
            var index = event.target.dataset.index;
            var newQuantity = parseInt(event.target.value);
            var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems[index].quantity = newQuantity;
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            renderCartItems();
        }
    
        // Function to remove item
        function removeItem(event) {
            var index = event.target.dataset.index;
            var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            cartItems.splice(index, 1);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            renderCartItems();
        }
    
        // Clear cart
        document.getElementById('clear-cart').addEventListener('click', function () {
            localStorage.removeItem('cartItems');
            renderCartItems();
        });
    
        // Call renderCartItems when the page loads
        renderCartItems();


        proceedButton.addEventListener("click", function() {
    // Redirect to payment.html when the button is clicked
    window.location.href = "payment.php";
        });
    </script>
    

    

</body>

</html>
