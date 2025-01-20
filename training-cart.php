<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training - Shopping Cart</title>
    <link rel="stylesheet" href="css/training-cart.css">
    <script src="javascript/training-cart.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="modal-blur">
    <!-- New nav bar responsive -->
    <div class="navbar-container flex">
        <div class="img-container flex">
            <img src="bilder/golds-gym.png" alt="Golds Gym">
        </div>
    
    
    <button type="button" class="mobile-nav-toggle" aria-controls="primary-nav" aria-expanded="false">
        ☰
    </button>
    
        <nav>
            <ul id="primary-nav" class="primary-nav flex" data-visible="false">
                <li >
                    <a href="training.php" class="flex menu-text">
                        <div>00</div>Home
                    </a>
                </li>
                <li>
                    <a href="#contact" class="flex menu-text">
                        <div>01</div>Contact
                    </a>
                </li>
                <li>
                    <a href="training-signup.php" class="flex menu-text">
                        <div>02</div>Sign Up
                    </a>
                </li>
                <li>
                    <a href="training-login.php" class="flex menu-text">
                        <div>03</div>Log In
                    </a>
                </li>
                <li>
                    <a href="training-cart.php" class="flex menu-text">
                        <div>04</div>Products
                    </a>
                </li>
        
            </ul>
        </nav>
    </div>
<!-- New responsive navbar ends here -->

<!-- checkout slide out here-->
    <div class="checkout-container">
        <nav>
            <div class="form-container flex" data-visible="false" id="form-container">
                <div class="checkout-close-btn-container flex">
                    <button class="close-btn">Stäng</button>
                </div>

                <div class="checkout-header-container">
                    <div class="checkout-header">
                        Please fill in your info below
                    </div>
                </div>
                
                <div class="checkout-content flex">
                <!-- Left image -->
                    <div class="checkout-image-left">
                        <img src="bilder/teletech.jpg" alt="Left Image" class="checkout-img">
                    </div>

                    <form action="" method="post" class="checkout-form flex">
                        <label for="fullName" class="checkout-label">Name and Email</label>
                        <input type="name" placeholder="Full name" name="fullName" >
                        <input type="email" placeholder="Email" name="email" >

                        <label for="cardName" class="checkout-label">Card Info</label>
                        <input type="name" placeholder="Card name" name="cardName" >
                        <input type="number" placeholder="Card number" name="cardNumber" >
                        <input type="text" placeholder="Expire" name="cardExpire" >
                        <input type="number" placeholder="CVC" name="cardCVC" >

                        <label for="adress" class="checkout-label">Adress Info</label>
                        <input type="text" placeholder="Full adress" name="adress" >
                        <input type="number" placeholder="Post code" name="postCode" >
                        <input type="text" placeholder="City" name="city">

                        <button type="submit" class="place-order-btn">Place order</button>
                    </form>

                    <div class="checkout-image-right">
                        <img src="bilder/teletech.jpg" alt="Right Image" class="checkout-img">
                    </div>
                </div>
            </div>
        </nav>
    </div>
<div class="blur">






    <div class="shopping-cart-js">
        
    </div>
          

    <div class="product-container flex">
            <div class="products">
                <img class="product-img" src="bilder/tren1.jpg" alt="Tren">
                <div class="product-label">Trenbolone Acetate</div>
                <div class="product-price">199kr</div>
                <button class="add-btn">Add to Cart</button>
                <div class="product-info">
                    <p>Trenbolone acetate, sold under brand names such as Finajet and Finaplix among others, is an androgen and anabolic steroid (AAS) medication which is used in veterinary medicine, specifically to increase the profitability of livestock by promoting muscle growth in cattle. It is given by injection into muscle.</p>
                </div>
            </div>
            
    </div>

    <div class="product-container flex">
            <div class="products">
                <img class="product-img" src="bilder/creatin.png" alt="Creatine">
                <div class="product-label">Creatine Monohydrate</div>
                <div class="product-price">69kr</div>
                <button class="add-btn">Add to Cart</button>
                <div class="product-info">
                    <p>The most common creatine supplement is creatine monohydrate. Its a dietary supplement that increases muscle performance in short-duration, high-intensity resistance exercises, such as weightlifting, sprinting and bicycling.</p>
                </div>
            </div>
    </div>

    <div class="product-container flex">
            <div class="products">
                <img class="product-img" src="bilder/jack3d.jpg" alt="PWO">
                <div class="product-label">Jack3d PWO</div>
                <div class="product-price">99kr</div>
                <button class="add-btn">Add to Cart</button>
                <div class="product-info">
                    <p>Jack3d Pre-Workout is a potent formula that combines essential stimulants with supplements like creatine to maximize your weight training sessions.</p>
                </div>
            </div>
    </div>

    <div class="product-container flex">
            <div class="products">
                <img class="product-img" src="bilder/mk677.jpg" alt="MK 677">
                <div class="product-label">MK677 Sarms</div>
                <div class="product-price">49kr</div>
                <button class="add-btn">Add to Cart</button>
                <div class="product-info">
                    <p>MK-677 is a non-peptide compound that stimulates the release of growth hormone and IGF-1 in the body.</p>
                </div>
            </div>
    </div>
        <div class="cart-header flex" id="shopping-cart">
            Shopping Cart
        </div>
        <div class="cart-header-container flex">
            <div class="cart-item-header">Item</div>
            <div class="cart-price-header">Price</div>
            <div class="cart-quantity-header">Quantity</div>
        </div>
    <div class="cart-items">
        
    </div>
        <div class="checkout-container flex">
            <div class="checkout-total-header">Total
                <div class="checkout-total">0</div>
            </div>
            <button type="button" class="checkout-btn" aria-controls="form-container" aria-expanded="false">Checkout</button>
        </div>

        <div class="contact-container flex" id="contact">
            <div class="contact-header-container flex">
                <div class="contact-header">
                    Contact
                </div>
                <div class="contact-info">
                    Bollywood Boulevard 69 <br>
                    Venice, CA <br>
                    +90210 - 6969 <br>
                    trånkantraining@gmail.com
                </div>
                <div class="support-container">
                    <button class="support-btn">Support</button>
                </div>
            </div>
    
        </div>
</div> <!-- div for blur with slideout open-->
</div> <!-- div for blur with modal open -->
<!-- support modal here -->
<div class="support-modal-container">
    <div class="support-modal-container-2 flex">
        <div class="support-modal-container-3 flex">
            <div class="modal-header-container flex">
                <div class="modal-header">
                    Support
                </div>
                <button class="close-modal">X</button>
            </div>

            <div class="modal-content">
                <!-- Bild till vänster -->
                <img src="bilder/teletech.jpg" alt="Left Image" class="modal-image">

                <form class="modal-form-container flex">
                    <input type="text" placeholder="Name" required class="modal-input-name">
                    <input type="email" placeholder="Your Email" required class="modal-input-mail">
                    <textarea rows="10" cols="10" placeholder="Write your support message here..."></textarea>
                    <button type="submit" class="modal-submit-btn">Send Message</button>
                </form>

                <img src="bilder/teletech.jpg" alt="Right Image" class="modal-image modal-image-bottom">
            </div>
        </div>
    </div>
</div>
<!-- support modal ends here -->



</body>
</html>