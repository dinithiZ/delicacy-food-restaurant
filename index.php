<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>delicacy</title>

<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
<!-- custom css file link -->
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- header section starts -->
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i>delicacy </a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#menu">menu</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
         
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" name="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>

    </form>
    

    <div class="shopping-cart">

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/pasta.webp" alt="">
            <div class="content">
                <h3>pasta</h3>
                <span class="price">LKR 990.00</span>
                <span class="quantity">qty: 1</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/pizza.jpg" alt="">
            <div class="content">
                <h3>pizza</h3>
                <span class="price">LKR 1900.00</span>
                <span class="quantity">qty: 1</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/CoconutWater.jpg" alt="">
            <div class="content">
                <h3>CoconutWater</h3>
                <span class="price">LKR 370.00</span>
                <span class="quantity">qty: 1</span>
            </div>
        </div>
        <div class="total"> total :LKR 3260.00  </div>
        <a href="checkout.php" class="btn">checkout</a>
    </div>


      
<form action="login.php" class="login-form">
    <h3>login now</h3>
    <input type="username" placeholder="username" class="box">
    <input type="password" placeholder="password" class="box">
    <p>forget your password <a href="#">click here</a></p>
    <p>don't have an account <a class="button" href="signup-form.php">create now</a></p>
    <input type="submit" value="login now" class="btn">
</form>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>delicious <span>food</span> for you</h3>
        <p></p>
        <a href="order.php" class="btn">order now</a>
    </div>
</section>

<!-- home section ends -->

<!-- features section starts -->
<section class="features" id="features">
    <h1 class="heading"> our <span>features</span> </h1>
    <div class="box-container">
        
        <div class="box">
            <img src="images/natural.avif" alt="">
            <h3>100% Fresh Ingredients</h3>
            <p>delicious meal from delicacy</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/delivery.avif" alt="">
            <h3>Free delivery</h3>
            <p>Speedy food, good food</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/easy_payment.webp" alt="">
            <h3>easy payment</h3>
            <p>It's quick, safe, and simple. Select several methods of payment</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>
</section>
<!-- features section ends -->

<!-- menu section starts -->

<section class="menu" id="menu">
    <h1 class="heading"> our <span>menu</span> </h1>
    
    <div class="swiper product-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="images/pizza.jpg" alt="">
                <h3>pizza</h3>
                <div class="price">LKR 1900.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/pasta.webp" alt="">
                <h3>pasta</h3>
                <div class="price"> LKR 990.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/avacado_toast.jpg" alt="">
                <h3>Avocado Toast</h3>
                <div class="price"> LKR 550.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/Sushi-Burrito.jpg" alt="">
                <h3>Sushi Burritos</h3>
                <div class="price"> LKR 1100.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/acai-bowl.jpg" alt="">
                <h3>Acai Bowls</h3>
                <div class="price"> LKR 1100.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/Quinoa-Bowl.jpg" alt="">
                <h3>Quinoa Bowls</h3>
                <div class="price"> LKR 950.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/laksa-soup.webp" alt="">
                <h3>Laksa</h3>
                <div class="price"> LKR 700.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/Tacos.jpeg" alt="">
                <h3>Tacos</h3>
                <div class="price"> LKR 800.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/burgers.jpg" alt="">
                <h3>Burgers</h3>
                <div class="price">LKR 890.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/fries.jpg" alt="">
                <h3>Fries</h3>
                <div class="price"> LKR 700.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/coffee.png" alt="">
                <h3>coffee</h3>
                <div class="price"> LKR 400.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/Matcha.jpg" alt="">
                <h3>Matcha Lattes</h3>
                <div class="price"> LKR 550.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/kombucha.webp" alt="">
                <h3>Kombucha</h3>
                <div class="price"> LKR 600.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/Strawberry-Smoothie-003.webp" alt="">
                <h3>Smoothies</h3>
                <div class="price"> LKR 800.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/fruit_water.jpg" alt="">
                <h3>Fruit Infused Water</h3>
                <div class="price"> LKR 590.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/CoconutWater.jpg" alt="">
                <h3>Coconut Water</h3>
                <div class="price"> LKR 450.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/tea.jpg" alt="">
                <h3>Tea</h3>
                <div class="price"> LKR 250.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/vegetable juice.jpg" alt="">
                <h3>Vegetable Juice</h3>
                <div class="price"> LKR 550.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/sparking water.jpg" alt="">
                <h3>Sparkling Water</h3>
                <div class="price"> LKR 500.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

             <div class="swiper-slide box">
                <img src="images/milk.jpg" alt="">
                <h3>milk</h3>
                <div class="price"> LKR 400.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
             </div>

        </div>
    </div>
</section>
<!-- menu section ends -->

<!-- categories section starts -->
<section class="categories" id="categories">
    <h1 class="heading"> product <span>categories</span> </h1>
    <div class="box-container">

        
        <div class="box">
            <img src="images/burgers.jpg" alt="">
            <h3>Burgers</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="images/softdrinks.jpg" alt="">
            <h3>soft drinks</h3>
            <p>upto 10% off</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="images/pizzacat.webp" alt="">
            <h3>pizza</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="images/pastacat.avif" alt="">
            <h3>pasta</h3>
            <p>upto 20% off</p>
            <a href="#" class="btn">order now</a>
        </div>
        
    </div>
</section>

<!-- categories section ends -->

<!-- review section starts -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>
    
    <div class="swiper review-slider">
       
        <div class="swiper-wrapper">
            
            <div class="swiper-slide box">
                <img src="images/john.png" alt="">
                <p>I recently celebrated a special occasion at delicacy, and it was a sensational dining experience. The chef's creativity shines through in every dish. The staff was attentive, and the atmosphere added a touch of magic to the evening. Highly recommended!
                    "Best Pizza in Town!"</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/alex.jpg" alt="">
                <p>As a pizza enthusiast, I can confidently say that delicacy serves the best pizza in town! The crust is perfection, and the toppings are fresh and flavorful. It's become a weekly tradition for my family. Kudos to the chefs!
                    "Exceptional Service"</p>
                <h3>Alex Smith</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="images/JessicaBWsmall.jpg" alt="">
                <p>What sets delicacy apart is their exceptional service. The staff goes above and beyond to make you feel welcome. The recommendations are always spot-on, and they truly care about the customer experience. A gem in the dining scene!</p>
                <h3>Jessica Wilson</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- review section ends -->    

<!-- footer section starts --> 
<section class="footer">
    
    <div class="box-container">
        
        <div class="box">
            <h3> delicacy <i class="fas fa-shopping-basket"></i> </h3>
            <p>Join us at our delicious food restaurant, where passion for flavor meets the art of hospitality. It's not just a dining experience; it's a celebration of culinary creativity, a journey into the heart of delightful gastronomy. Welcome to a place where every meal is a memorable event.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> delicacy@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Anuradhapura, Sri Lanka-50000 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> menu </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="images/credit_card.jpg" class="payment-img" alt="">
        </div>
    </div>
    <div class="credit">| all rights reserved </div>

</section>
<!-- footer section ends --> 


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Main Javascript File -->
<script src="js/script.js"></script>

</body>
</html>