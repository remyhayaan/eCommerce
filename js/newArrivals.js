// Function to fetch and display new arrivals
function loadNewArrivals() {
  fetch('../api/get_new_arrivals.php')
    .then(response => response.json())
    .then(data => {
      const newArrivalsContainer = document.getElementById('new-arrivals');
      newArrivalsContainer.innerHTML = ''; // Clear existing content

      if (data.length > 0) {
        data.forEach(product => {
          const productDiv = document.createElement('div');
          productDiv.className = 'card';
          productDiv.innerHTML = `
            <p class="tag">NEW ARRIVAL</p>
            <h2>${product.name}</h2>
            <a href="#" class="buy">Buy Now</a>
          `;
          newArrivalsContainer.appendChild(productDiv);
        });
      } else {
        newArrivalsContainer.innerHTML = '<p>No new arrivals available.</p>';
      }
    })
    .catch(error => {
      console.error('Error fetching new arrivals:', error);
    });
}

// Call the function to load new arrivals when the page loads
document.addEventListener('DOMContentLoaded', loadNewArrivals);