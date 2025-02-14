
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Section</title>
  <link rel="stylesheet" href="../css/shop.css">
</head>
<body>

  <div class="container">
    <!-- Filters Section -->
    <div class="filters">
      <h2>Filters</h2>
      
      <label for="category">Category:</label>
      <select id="category" class="filter">
        <option value="all">All</option>
        <option value="electronics">Electronics</option>
        <option value="fashion">Fashion</option>
        <option value="home">Home</option>
      </select>

      <label for="price">Price:</label>
      <select id="price" class="filter">
        <option value="all">No Sorting</option>
        <option value="low">Low to High</option>
        <option value="high">High to Low</option>
      </select>

      <label for="alphabet">Sort Alphabetically:</label>
      <select id="alphabet" class="filter">
        <option value="none">No Sorting</option>
        <option value="az">A-Z</option>
        <option value="za">Z-A</option>
      </select>
    </div>

    <!-- Products Section -->
    <div class="products" id="products">
      <!-- Product items will be dynamically inserted here -->
    </div>
  </div>

 
  <!-- Product Popup Modal -->
<div id="productModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      
      <div class="modal-body">
        <!-- Left: Product Image -->
        <div class="modal-image">
          <img id="modalImg" src="" alt="Product Image">
        </div>
        
        <!-- Right: Product Details -->
        <div class="modal-info">
          <h2 id="modalTitle"></h2>
          <p id="modalPrice"></p>
          <p id="modalOldPrice"></p>
          <p id="modalDiscount"></p>
  
          <!-- Color Selection -->
          <div class="color-options">
            <span>Color:</span>
            <div class="color-buttons">
              <button class="color-btn active">Silver</button>
              <button class="color-btn">Verdigris</button>
              <button class="color-btn">Eampit</button>
              <button class="color-btn">Gray</button>
            </div>
          </div>
  
          <!-- Size Selection -->
          <div class="size-options">
            <span>Size:</span>
            <div class="size-buttons">
              <button class="size-btn active">6"</button>
              <button class="size-btn">5.6"</button>
            </div>
          </div>
  
          <!-- Quantity Selector -->
          <div class="quantity-selector">
            <button class="qty-btn" id="minus-btn">-</button>
            <span id="quantity">1</span>
            <button class="qty-btn" id="plus-btn">+</button>
          </div>
  
          <!-- Buttons -->
          <button class="cart-btn">Add to Cart</button>
          <button class="buy-btn">Buy It Now</button>
  
          <a href="#" class="full-details">View full details →</a>
        </div>
      </div>
    </div>
  </div>
  

  <script src="../js/shop.js"></script>
</body>
</html>
