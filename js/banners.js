document.addEventListener("DOMContentLoaded", function () {
    fetch("../api/get_banners.php")
        .then((response) => response.json())
        .then((data) => {
            if (data.status === "success") {
                const bannerContainer = document.getElementById("banner-container");
                bannerContainer.innerHTML = "";

                data.banners.forEach((banner, index) => {
                    const bannerDiv = document.createElement("div");
                    bannerDiv.classList.add("banner-item");
                    if (index === 0) bannerDiv.classList.add("active");
                    bannerDiv.innerHTML = `
                        <a href="${banner.link}" target="_blank">
                            <img src="${banner.image_url}" alt="${banner.title}" class="animated-image">
                            <div class="banner-text">
                                <h3>${banner.title}</h3>
                                <p>${banner.description}</p>
                                <button class="cta-button">Click Now!</button>
                            </div>
                        </a>
                    `;
                    bannerContainer.appendChild(bannerDiv);
                });

                // Smooth Rotating Banner Effect
                let currentIndex = 0;
                const banners = document.querySelectorAll(".banner-item");

                setInterval(() => {
                    banners[currentIndex].classList.remove("active", "flip"); 
                    currentIndex = (currentIndex + 1) % banners.length;
                    banners[currentIndex].classList.add("active", "flip");

                    // Optional: Play a sound when switching banners
                    const audio = new Audio("../assets/slide-sound.mp3");
                    audio.play();
                }, 3500); // Change banner every 3.5 seconds
            } else {
                console.error("Error fetching banners:", data.message);
            }
        })
        .catch((error) => console.error("Error:", error));
});
