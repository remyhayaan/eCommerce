
fetch('../api/get_categories.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    console.log(data); // Log the data to see what is returned
    const categoryList = document.getElementById('category-list');
    categoryList.innerHTML = ''; // Clear existing content

    if (data.length > 0) {
      data.forEach(category => {
        const categoryDiv = document.createElement('div');
        categoryDiv.className = 'category';
        categoryDiv.innerHTML = `
          <img src="../images/${category.image}" alt="${category.name}"> <!-- Adjust the image path as needed -->
          <h2>${category.name}</h2>
        `;
        categoryList.appendChild(categoryDiv);
      });
    } else {
      categoryList.innerHTML = '<p>No categories available</p>';
    }
  })
  .catch(error => {
    console.error('Error fetching categories:', error);
  });
  