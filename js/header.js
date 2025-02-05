// =====================
// HERO SLIDER LOGIC
// =====================
const containers = document.querySelectorAll('.hero-image-container');
const heroText = document.querySelectorAll('.hero-text');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');

let currentImage = 0;
let autoSlideInterval;
const slideDuration = 5000; // Slide every 5 seconds

function showImage(n) {
  // Fade out current text (using a slightly longer duration for a smoother transition)
  gsap.to(heroText[currentImage], { opacity: 0, y: 20, duration: 1 });

  currentImage = (n + containers.length) % containers.length;

  // Show the current image container
  containers.forEach((container, index) => {
    container.classList.toggle('active', index === currentImage);
  });

  // Fade in the new text (using a longer duration)
  gsap.fromTo(
    heroText[currentImage],
    { opacity: 0, y: 20 },
    { opacity: 1, y: 0, duration: 1 }
  );
}

prevBtn.addEventListener('click', () => {
  showImage(currentImage - 1);
  resetAutoSlide();
});

nextBtn.addEventListener('click', () => {
  showImage(currentImage + 1);
  resetAutoSlide();
});

function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    showImage(currentImage + 1);
  }, slideDuration);
}

function resetAutoSlide() {
  clearInterval(autoSlideInterval);
  startAutoSlide();
}

// Start initial text animation and auto-slide
gsap.fromTo(
  heroText[currentImage],
  { opacity: 0, y: 20 },
  { opacity: 1, y: 0, duration: 1 }
);
startAutoSlide();

// Pause auto-slide when hovering over the hero
const hero = document.querySelector('.hero');
hero.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
hero.addEventListener('mouseleave', startAutoSlide);

// =====================
// SEARCH POPUP LOGIC
// =====================
const searchPopup = document.getElementById('search-popup');
const searchIcon = document.querySelector('.search-icon');
const closeSearch = document.getElementById('close-search');

searchIcon.addEventListener('click', () => searchPopup.classList.add('active'));
closeSearch.addEventListener('click', () => searchPopup.classList.remove('active'));

// =====================
// MOBILE MENU LOGIC
// =====================
document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenu = document.getElementById("close-menu");

  // Open the mobile menu (slide in)
  hamburger.addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent the event from bubbling up
    mobileMenu.classList.add("active");
  });

  // Close the mobile menu when clicking on the close button
  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
  });

  // Close the mobile menu when clicking outside of it
  document.addEventListener("click", (e) => {
    if (mobileMenu.classList.contains("active")) {
      // If the click is NOT inside the mobile menu and not on the hamburger
      if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
        mobileMenu.classList.remove("active");
      }
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});
