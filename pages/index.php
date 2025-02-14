<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero Section with Image Slider</title>
  <link rel="stylesheet" href="../css/try.css" />
  <link rel="stylesheet" href="../css/header1.css" />
  <link rel="stylesheet" href="../css/zoom.css" />
  <link rel="stylesheet" href="../css/flash.css" />
<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

</head>
<body>
  <div class="hero">
   <!-- Navbar section -->
<nav class="navbar">
    <!-- Hamburger on small screens -->
    <button class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </button>
  
    <!-- Logo for larger screens -->
    <div class="logo">
      <span>Logo</span>
    </div>
  
    <!-- Navigation Links -->
    <div class="links">
      <a href="#">Home</a>
      <a href="../pages/shop.php">Shop</a>
      <a href="#">About</a>
      <a href="../pages/contact.html">Contact</a>
    </div>
  
    <!-- Icons on the right -->
    <div class="icons">
  <div class="search-container">
    <a href="#" class="search-icon" id="search-icon"><i class="fas fa-search"></i></a>
    <input type="text" id="search-input" placeholder="Search..." autocomplete="yes" style="display: none;">
    <div id="autocomplete-list" class="autocomplete-items" style="display: none;"></div>
  </div>
  <a href="#" class="icon-with-number cart-icon">
    <i class="fas fa-shopping-cart"></i><span class="icon-number">0</span>
  </a>
  <a href="#" class="icon-with-number wishlist-icon">
    <i class="fas fa-heart"></i><span class="icon-number">0</span>
  </a>
  <a href="../pages/signin.html" class="user-icon"><i class="fas fa-user"></i></a>
</div>
  </nav>
  
    <!-- Mobile Slide-in Menu -->
    <div class="mobile-menu" id="mobile-menu">
      <div class="mobile-menu-header">
        <span class="mobile-logo">Logo</span>
        <button class="close-menu" id="close-menu"><i class="fas fa-times"></i></button>
      </div>
      <div class="mobile-nav-links">
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
      </div>
    </div>
    <br>
    <br>
      <!--Removed Heo section-->

      <hr style="color:white; size:12px;">
<section id="banner-section">

  <h1 style="background-color: #040e54; color: #db9b07; text-align: center; padding: 0px; margin: 0; width: 100%;">
  Top Deals
    </h1>
    <div id="banner-container" class="banner-slider">
       <!-- Banners will be dynamically inserted here -->
    </div>
</section>
<!---Section for Flash Sales-->
<section class="flash-sales">
    <div class="flash-header">
        <h2>🔥 Flash Sales – Limited Time Only!</h2>
 
    </div>

    <div class="flash-slider-container">
  
        <div class="flash-slider" id="flash-slider">
            <!-- Dynamic Products Will Be Inserted Here -->
        </div>
</div>
</section>


<div class="container-img">
  <h1 style="background-color: #040e54; color: #db9b07; text-align: center; padding: 5px; margin: 0; width: 100%;">
 Product Category
    </h1>
  <div class="categories" id="category-list">
  <!-- Categories will be dynamically inserted here -->
</div>
  </div>
</div>
<h2 class="h1-grid ">Our Featured Products</h2>
  <div class="navigation">
  <h1 style="background-color: #040e54; color: #db9b07; text-align: center; padding: 5px; margin: 0; width: 100%;">
        Super and Durable | Top Deals
    </h1>
   <h1>Electronics products continue to drive innovation and shape the
   way we live, work, and interact with our environment.</h1>
    <button class="nav-button right">View All</button>
   <h1>Electronics products continue to drive innovation and shape the
   way we live, work, and interact with our environment.</h1>
    <button class="nav-button right">View</button>
  </div>
<section class="products">
  <div class="product">
      <img src="../images/pc-2.jfif" alt="Product 1">
      <a href="../pages/product.html"><h3>Product 1</h3></a>
      <p class="description">This is a great product that does amazing things.</p>
      <p class="price">$19.99</p>
  </div>
  <div class="product">
      <img src="../images/phone-1.jfif" alt="Product 2">
      <a href="../pages/product.html"><h3>Product 2</h3></a>
      <p class="description">This product is useful for various purposes.</p>
      <p class="price">$24.99</p>
  </div>
  <div class="product">
      <img src="../images/watch-1.jfif" alt="Product 3">
      <a href="../pages/product.html"><h3>Product 3</h3></a>
      <p class="description">An excellent choice for anyone looking for quality.</p>
      <p class="price">$29.99</p>
  </div>
  <div class="product">
    <img src="../images/pc-2.jfif" alt="Product 1">
    <a href="../pages/product.html"><h3>Product 1</h3></a>
    <p class="description">This is a great product that does amazing things.</p>
    <p class="price">$19.99</p>
</div>
<div class="product">
    <img src="../images/phone-1.jfif" alt="Product 2">
    <a href="../pages/product.html"><h3>Product 2</h3></a>
    <p class="description">This product is useful for various purposes.</p>
    <p class="price">$24.99</p>
</div>
<div class="product">
<a href="../pages/product.html"><h3>Product 3</h3></a>
    <h3>Product 3</h3>
    <p class="description">An excellent choice for anyone looking for quality.</p>
    <p class="price">$29.99</p>
</div>
</section>

<div class="container">
  <div class="card card1">
      <p class="tag">NEW ARRIVAL</p>
      <h2>Latest Qpad with keyboard</h2>
      <a href="#" class="buy">Buy Now</a>
  </div>
  <div class="card card2">
      <p class="tag">GET UP TO 35% OFF</p>
      <h2>And then there were pro versions</h2>
      <a href="#" class="buy">Buy Now</a>
  </div>
  <div class="card card3">
      <p class="tag">HURRY UP!</p>
      <h2>Modern & Stylish Headphone</h2>
      <a href="#" class="buy">Buy Now</a>
  </div>
</div>


  <br/><br/><h2 class="h1-grid ">Best Selling Products</h2>
  <div class="navigation">
   <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem debitis laborum ex.</h1>
    <button class="nav-button right">Right</button>
  </div>
<section class="products" id="product-list">
  <div class="product">
 <!---Products to be displyed here dynamically--->
</div>
</section>

<div class="search-popup" id="search-popup">
  <div class="search-box">
      <button class="close-search" id="close-search">&times;</button>
      <input type="text" placeholder="Search..." />
      <button class="search-btn"><i class="fas fa-search"></i></button>
  </div>
</div>

<div class="reviews-container">
  <button class="arrow left-arrow" onclick="scrollReviews(-1)">&#10094;</button>
  
  <div class="reviews" id="reviews">
    <!-- Reviews will be dynamically inserted here -->
  </div>

  <button class="arrow right-arrow" onclick="scrollReviews(1)">&#10095;</button>
</div>

<!-- Customer Reviews Section -->
<!-- Customer Reviews Section -->
<h2 class="h1-grid">What Our Customers Say</h2>
<div class="customer-reviews">
    <div class="review">
        <p class="review-text">"Great quality products and fast delivery. Highly recommend!"</p>
        <h4 class="reviewer">- Jane Doe</h4>
    </div>
    <div class="review">
        <p class="review-text">"Excellent customer service and amazing deals. Will buy again!"</p>
        <h4 class="reviewer">- John Smith</h4>
    </div>
    <div class="review">
        <p class="review-text">"I love the variety of products available. Everything is top-notch!"</p>
        <h4 class="reviewer">- Sarah Lee</h4>
    </div>
</div>

<!---Script for dsiaplying Categories--->

<!---End of the Categories script--->

 <!-- Include SweetAlert JS -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <!-- Include your custom JavaScript file -->
  <script src="../js/search.js"></script>
  <script src="../js/categories.js"></script>
  <script src="../js/cat.js"></script>
  <script src="../js/reviews.js"></script>
  <script src="../js/banners.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="../js/newArrivals.js"></script> <!-- New JavaScript file for new arrivals -->
  <script src="../js/header.js"></script>
  <script src="../js/flashSales.js"></script>

</body>
</html>
