document.addEventListener("DOMContentLoaded", function() {
    const flashSlider = document.getElementById("flash-slider");

    fetch("../API/get_flash_sales.php")
        .then(response => response.json())
        .then(products => {
            flashSlider.innerHTML = "";
            products.forEach(product => {
                let productHTML = `
                    <div class="flash-product">
                        <span class="discount">${product.discount_percentage}% OFF</span>
                        <img src="${product.image_url}" alt="${product.name}">
                        <h3>${product.name}</h3>
                        <p><s>$${product.old_price}</s> <b>$${product.price}</b></p>
                        <button class="buy-now">Buy Now</button>
                    </div>
                    <div class="countdown-container">
                        <div class="countdown-box" id="countdown-${product.id}"></div>
                    </div>
                `;
                flashSlider.innerHTML += productHTML;

                // Initialize countdown for this product
                const countdownElement = document.getElementById(`countdown-${product.id}`);
                const endTime = new Date(product.end_time).getTime();

                // Update the countdown every second
                const countdownInterval = setInterval(() => {
                    const now = new Date().getTime();
                    const timeRemaining = endTime - now;

                    if (timeRemaining <= 0) {
                        clearInterval(countdownInterval);
                        countdownElement.innerHTML = "Sale Ended";
                    } else {
                        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                        countdownElement.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
                    }
                }, 1000);
            });
        })
        .catch(error => console.error("Error loading flash sales:", error));
});
