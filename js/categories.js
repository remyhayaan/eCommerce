document.addEventListener("DOMContentLoaded", function () {
  fetch('../api/get_products.php')
    .then(response => response.json())
    .then(data => {
      const productList = document.getElementById('product-list');
      productList.innerHTML = ''; // Clear previous content

      if (data.length > 0) {
        const categories = {}; // Store products by category

        // Group products by category
        data.forEach(product => {
          if (!categories[product.category_name]) {
            categories[product.category_name] = [];
          }
          categories[product.category_name].push(product);
        });

        // Create sections for each category
        Object.keys(categories).forEach(category => {
          const categorySection = document.createElement('div');
          categorySection.className = 'category-section';

          categorySection.innerHTML = `
            <h3 class="category-title">${category}</h3>
            <div class="category-row"></div>
          `;

          const categoryRow = categorySection.querySelector('.category-row');

          // Add products under the category row
          categories[category].forEach(product => {
            const productDiv = document.createElement('div');
            productDiv.className = 'product';
            productDiv.innerHTML = `
              <div class="product-image-wrapper">
                <img src="../uploads/${product.main_image}" alt="${product.name}" class="product-image" data-id="${product.product_id}">
              </div>
              <h3>${product.name}</h3>
              <p class="description">${product.description}</p>
              <p class="price">UGX ${parseFloat(product.price).toFixed(2)}</p>
              <a href="../API/product-details.php?id=${product.product_id}" class="buy">Buy Now</a>
            `;
            categoryRow.appendChild(productDiv);
          });

          productList.appendChild(categorySection);
        });

        // Zoom image functionality
        document.querySelectorAll('.product-image-wrapper').forEach(imageWrapper => {
          imageWrapper.addEventListener('click', function () {
            const image = imageWrapper.querySelector('img');
            imageWrapper.classList.toggle('zoomed-in');
            
            if (imageWrapper.classList.contains('zoomed-in')) {
              // Create close button for zoomed-in image
              const closeBtn = document.createElement('button');
              closeBtn.textContent = 'Close';
              closeBtn.classList.add('close-zoom');
              closeBtn.addEventListener('click', function () {
                imageWrapper.classList.remove('zoomed-in');
                closeBtn.remove(); // Remove close button when zoom is closed
              });
              imageWrapper.appendChild(closeBtn);
            } else {
              imageWrapper.querySelector('.close-zoom')?.remove();
            }
          });
        });

      } else {
        productList.innerHTML = '<p>No products available</p>';
      }
    })
    .catch(error => {
      console.error('Error fetching products:', error);
    });
});
