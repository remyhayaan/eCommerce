<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero Section with Image Slider</title>
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/try.css" />

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
      <a href="#" class="search-icon"><i class="fas fa-search"></i></a>
      <a href="#" class="icon-with-number cart-icon">
        <i class="fas fa-shopping-cart"></i><span class="icon-number">5</span>
      </a>
      <a href="#" class="icon-with-number wishlist-icon">
        <i class="fas fa-heart"></i><span class="icon-number">3</span>
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

    <!-- Hero Slider -->
    <div class="hero-image-container active">
        <div class="hero-image" style="background-image: url('../images/banner4.jpg');"></div>
        <div class="hero-text">
          <!-- Black background container on mobile remains unchanged -->
          <div class="hero-text-content">
            <h1>Welcome to Our Site</h1>
            <p>Discover the best services with us.</p>
          </div>
        </div>
      </div>
      
      <div class="hero-image-container">
        <div class="hero-image" style="background-image: url('../images/banner2.jpg');"></div>
        <div class="hero-text">
          <div class="hero-text-content">
            <h1>Quality Services</h1>
            <p>We provide top-notch solutions for you.</p>
          </div>
        </div>
      </div>
      
      <div class="hero-image-container ">
        <div class="hero-image" style="background-image: url('../images/banner3.jpg');"></div>
        <div class="hero-text">
          <div class="hero-text-content">
            <h1>Join Us Today</h1>
            <p>Be a part of our growing community.</p>
          </div>
        </div>
      </div>      

    <!-- Slider Controls (arrows centered vertically) -->
    <div class="slider-controls">
      <button id="prev-btn">&lt;</button>
      <button id="next-btn">&gt;</button>
    </div>
  </div>

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

<div class="container-img">
  <h1>Choose Your Category</h1>
  <div class="categories" id="category-list">
  <!-- Categories will be dynamically inserted here -->
</div>
  </div>
</div>
<h2 class="h1-grid ">Our Featured Products</h2>
  <div class="navigation">
   <h1>Electronics products continue to drive innovation and shape the
   way we live, work, and interact with our environment.</h1>
    <button class="nav-button right">View All</button>
  </div>
<section class="products">
  <div class="product">
      <img src="../images/pc-2.jfif" alt="Product 1">
      <h3>Product 1</h3>
      <p class="description">This is a great product that does amazing things.</p>
      <p class="price">$19.99</p>
  </div>
  <div class="product">
      <img src="../images/phone-1.jfif" alt="Product 2">
      <h3>Product 2</h3>
      <p class="description">This product is useful for various purposes.</p>
      <p class="price">$24.99</p>
  </div>
  <div class="product">
      <img src="../images/watch-1.jfif" alt="Product 3">
      <h3>Product 3</h3>
      <p class="description">An excellent choice for anyone looking for quality.</p>
      <p class="price">$29.99</p>
  </div>
  <div class="product">
    <img src="../images/pc-2.jfif" alt="Product 1">
    <h3>Product 1</h3>
    <p class="description">This is a great product that does amazing things.</p>
    <p class="price">$19.99</p>
</div>
<div class="product">
    <img src="../images/phone-1.jfif" alt="Product 2">
    <h3>Product 2</h3>
    <p class="description">This product is useful for various purposes.</p>
    <p class="price">$24.99</p>
</div>
<div class="product">
    <img src="../images/watch-1.jfif" alt="Product 3">
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
    <div class="review">
      <p>"Great service! Highly recommend!"</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
      </div>
      <p>- John Doe</p>
    </div>
    <div class="review">
      <p>"Very satisfied with the quality of work."</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
      </div>
      <p>- Jane Smith</p>
    </div>
    <div class="review">
      <p>"A wonderful experience from start to finish."</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span>
      </div>
      <p>- Alice Johnson</p>
    </div>
    <div class="review">
      <p>"The team was very professional and efficient."</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
      </div>
      <p>- Bob Brown</p>
    </div>
    <div class="review">
      <p>"Excellent customer support and service."</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
      </div>
      <p>- Mary Davis</p>
    </div>
    <div class="review">
      <p>"I would definitely use their services again."</p>
      <div class="stars">
        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
      </div>
      <p>- James Wilson</p>
    </div>
  </div>
  
  <button class="arrow right-arrow" onclick="scrollReviews(1)">&#10095;</button>
</div>
<!---Script for dsiaplying Categories--->
<script>
fetch('../api/get_categories.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log(data); // Log the data to see what is returned
    const categoryList = document.getElementById('category-list');
    categoryList.innerHTML = ''; // Clear existing content

    if (data.length > 0) {
      data.forEach(category => {
        const categoryDiv = document.createElement('div');
        categoryDiv.className = 'category';
        categoryDiv.innerHTML = `
          <img src="../images/${category.image}" alt="${category.name}"> <!-- Adjust the image path as needed -->
          <h2>${category.name}</h2>
        `;
        categoryList.appendChild(categoryDiv);
      });
    } else {
      categoryList.innerHTML = '<p>No categories available</p>';
    }
  })
  .catch(error => {
    console.error('Error fetching categories:', error);
  });
  </script>
<!---End of the Categories script--->
<script>
    // Fetch products from the API
    fetch('../api/get_products.php')
      .then(response => response.json())
      .then(data => {
        const productList = document.getElementById('product-list');
        productList.innerHTML = ''; 
        if (data.length > 0) {
          data.forEach(product => {
            const productDiv = document.createElement('div');
            productDiv.className = 'product';
            productDiv.innerHTML = `
              <h3 class="category">${product.category_name}</h3>
              <img src="../uploads/${product.main_image}" alt="${product.name}">
              <h3>${product.name}</h3>
              <p class="description">${product.description}</p>
              <p class="price">UGX &nbsp;${parseFloat(product.price).toFixed(2)}</p>
              <a href="product-details.php?id=${product.product_id}" class="buy">Buy Now</a>
            `;
            productList.appendChild(productDiv);
          });
        } else {
          productList.innerHTML = '<p>No products available</p>';
        }
      })
      .catch(error => {
        console.error('Error fetching products:', error);
      });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="../js/header.js"></script>
</body>
</html>
