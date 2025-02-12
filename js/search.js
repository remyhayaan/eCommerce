// search.js

const searchIcon = document.getElementById('search-icon');
const searchInput = document.getElementById('search-input');
const autocompleteList = document.getElementById('autocomplete-list');

// Show the search input when the search icon is clicked
searchIcon.addEventListener('click', function() {
  searchInput.style.display = 'block';
  searchInput.focus();
});

// Fetch suggestions based on user input
searchInput.addEventListener('input', function() {
  const query = this.value;

  if (query.length > 0) {
    fetch(`../api/get_suggestions.php?query=${query}`)
      .then(response => response.json())
      .then(data => {
        autocompleteList.innerHTML = ''; // Clear previous suggestions
        if (data.length > 0) {
          data.forEach(item => {
            const suggestionDiv = document.createElement('div');
            suggestionDiv.innerHTML = item.name; // Adjust based on your data structure
            suggestionDiv.addEventListener('click', function() {
              searchInput.value = item.name; // Set input value to selected suggestion
              autocompleteList.innerHTML = ''; // Clear suggestions
              // Optionally, trigger a search or redirect
            });
            autocompleteList.appendChild(suggestionDiv);
          });
          autocompleteList.style.display = 'block'; // Show suggestions
        } else {
          autocompleteList.style.display = 'none'; // Hide if no suggestions
          // Show SweetAlert message
          Swal.fire({
            icon: 'info',
            title: 'No Matches Found',
            text: 'No matching results found for your search.',
            confirmButtonText: 'OK'
          });
        }
      })
      .catch(error => console.error('Error fetching suggestions:', error));
  } else {
    autocompleteList.style.display = 'none'; // Hide if input is empty
  }
});

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
  if (!searchInput.contains(event.target) && !searchIcon.contains(event.target)) {
    autocompleteList.style.display = 'none';
  }
});