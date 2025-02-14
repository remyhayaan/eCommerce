const menuToggle = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebar");
const closeBtn = document.getElementById("closeBtn");

menuToggle.addEventListener("click", () => {
  sidebar.classList.add("show");
});

closeBtn.addEventListener("click", () => {
  sidebar.classList.remove("show");
});
// Get elements
const searchIcon = document.querySelector(".search");
const searchPopup = document.getElementById("searchPopup");
const closeSearch = document.getElementById("closeSearch");

// Show search popup on icon click
searchIcon.addEventListener("click", () => {
    searchPopup.classList.add("show");
});

// Hide search popup on close button click
closeSearch.addEventListener("click", () => {
    searchPopup.classList.remove("show");
});
