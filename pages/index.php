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
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
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
        <a href="#">About</a>
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
