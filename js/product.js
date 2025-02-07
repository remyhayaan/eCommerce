function increaseQuantity() {
    let quantityElement = document.getElementById('quantity');
    let quantity = parseInt(quantityElement.textContent);
    quantityElement.textContent = quantity + 1;
}

function decreaseQuantity() {
    let quantityElement = document.getElementById('quantity');
    let quantity = parseInt(quantityElement.textContent);
    if (quantity > 1) {
        quantityElement.textContent = quantity - 1;
    }
}

// Collapsible sections
document.addEventListener("DOMContentLoaded", function () {
    let coll = document.querySelectorAll(".collapsible");
    coll.forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            content.style.display = content.style.display === "block" ? "none" : "block";
        });
    });
});
// Function to change main image when thumbnail is clicked
// Select all thumbnails and add click event listener
document.querySelectorAll(".thumbnail").forEach(thumbnail => {
    thumbnail.addEventListener("click", function() {
        const mainImage = document.getElementById("main-image");
        mainImage.src = this.src; // Change the source of the main image
        
        // Remove 'active' class from all thumbnails
        document.querySelectorAll(".thumbnail").forEach(img => img.classList.remove("active"));
        
        // Add 'active' class to clicked thumbnail
        this.classList.add("active");
    });
});
