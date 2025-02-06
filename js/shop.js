const productsData = [
    {
        name: "Laptop",
        category: "electronics",
        price: 800,
        imgSrc: "../images/pc-2.jfif",
        oldPrice: 1000,
        discount: "20%"
    },
    {
        name: "Shirt",
        category: "fashion",
        price: 30,
        imgSrc: "../images/watch-1.jfif",
        oldPrice: 40,
        discount: "25%"
    },
    {
        name: "Blender",
        category: "home",
        price: 100,
        imgSrc: "../images/phone-1.jfif",
        oldPrice: 120,
        discount: "17%"
    },
    {
        name: "Headphones",
        category: "electronics",
        price: 150,
        imgSrc: "../images/watch-1.jfif",
        oldPrice: 200,
        discount: "25%"
    },
    {
        name: "Dress",
        category: "fashion",
        price: 50,
        imgSrc: "../images/phone-1.jfif",
        oldPrice: 60,
        discount: "17%"
    },
    {
        name: "Microwave",
        category: "home",
        price: 200,
        imgSrc: "../images/pc-2.jfif",
        oldPrice: 250,
        discount: "20%"
    },
];

function renderProducts() {
    const categoryFilter = document.getElementById("category").value;
    const priceFilter = document.getElementById("price").value;
    const alphabetFilter = document.getElementById("alphabet").value;

    let filteredProducts = productsData;

    if (categoryFilter !== "all") {
        filteredProducts = filteredProducts.filter(product => product.category === categoryFilter);
    }

    if (priceFilter === "low") {
        filteredProducts.sort((a, b) => a.price - b.price);
    } else if (priceFilter === "high") {
        filteredProducts.sort((a, b) => b.price - a.price);
    }

    if (alphabetFilter === "az") {
        filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
    } else if (alphabetFilter === "za") {
        filteredProducts.sort((a, b) => b.name.localeCompare(a.name));
    }

    const productsContainer = document.getElementById("products");
    productsContainer.innerHTML = '';

    filteredProducts.forEach((product, index) => {  // Add index here
        const productElement = document.createElement('div');
        productElement.classList.add('product');

        productElement.innerHTML = `
            <div class="icon-container">
                <span class="icon" onclick="showModal(${index})">&#128065;</span>
                <span class="icon">&#10084;</span>
                <span class="icon" onclick="showModal(${index})">&#10133;</span>
            </div>
            <img src="${product.imgSrc}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>$${product.price}</p>
            <button>Add to Cart</button>
        `;

        productsContainer.appendChild(productElement);
    });
}

document.getElementById("category").addEventListener("change", renderProducts);
document.getElementById("price").addEventListener("change", renderProducts);
document.getElementById("alphabet").addEventListener("change", renderProducts);

renderProducts();


function showModal(index) {
    const modal = document.getElementById("productModal");
    const product = productsData[index];

    document.getElementById("modalImg").src = product.imgSrc;
    document.getElementById("modalTitle").textContent = product.name;
    document.getElementById("modalPrice").textContent = "Tk " + product.price;
    document.getElementById("modalOldPrice").textContent = "Tk " + product.oldPrice;
    document.getElementById("modalDiscount").textContent = "-" + product.discount;

    modal.style.display = "flex";
}


const modal = document.getElementById("productModal");
const closeButton = document.querySelector(".close");

if (closeButton) {
    closeButton.addEventListener("click", () => {
        modal.style.display = "none";
    });
}

let quantity = 1;
const quantityDisplay = document.getElementById("quantity");
const qtyPlusButton = document.getElementById("plus-btn");  // Select by ID
const qtyMinusButton = document.getElementById("minus-btn"); // Select by ID

if (qtyPlusButton && qtyMinusButton && quantityDisplay) { // Check if elements exist
    qtyPlusButton.addEventListener("click", () => {
        if (quantity < 10) {
            quantity++;
            quantityDisplay.textContent = quantity;
        }
    });

    qtyMinusButton.addEventListener("click", () => {
        if (quantity > 1) {
            quantity--;
            quantityDisplay.textContent = quantity;
        }
    });
}

document.querySelectorAll(".color-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        document.querySelectorAll(".color-btn").forEach(b => b.classList.remove("active"));
        this.classList.add("active");
    });
});

document.querySelectorAll(".size-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        document.querySelectorAll(".size-btn").forEach(b => b.classList.remove("active"));
        this.classList.add("active");
    });
});