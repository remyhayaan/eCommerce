document.addEventListener("DOMContentLoaded", function () {
    // Sample dynamic reviews data (this would be fetched from an API or database in a real project)
    const reviewsData = [
      {
        text: "Great service! Highly recommend!",
        rating: 5,
        name: "John Doe"
      },
      {
        text: "Very satisfied with the quality of work.",
        rating: 4,
        name: "Jane Smith"
      },
      {
        text: "Excellent experience, will use again!",
        rating: 5,
        name: "Mike Johnson"
      },
      {
        text: "Good, but could be improved in certain areas.",
        rating: 3,
        name: "Emily Davis"
      }
    ];
  
    const reviewsContainer = document.getElementById("reviews");
  
    // Function to create review elements dynamically
    function createReviewElement(review) {
      const reviewDiv = document.createElement("div");
      reviewDiv.className = "review";
  
      const stars = Array(5)
        .fill("&#9734;")
        .map((star, index) => {
          return index < review.rating ? "&#9733;" : star;
        })
        .join("");
  
      reviewDiv.innerHTML = `
        <p>"${review.text}"</p>
        <div class="stars">${stars}</div>
        <p>- ${review.name}</p>
      `;
  
      return reviewDiv;
    }
  
    // Insert reviews into the container
    reviewsData.forEach((review) => {
      const reviewElement = createReviewElement(review);
      reviewsContainer.appendChild(reviewElement);
    });
  
    // Set the initial position for the slider
    let currentIndex = 0;
  
    // Function to scroll the reviews (left or right)
    function scrollReviews(direction) {
      const reviews = document.querySelectorAll(".review");
      const totalReviews = reviews.length;
  
      // Update the current index
      currentIndex = (currentIndex + direction + totalReviews) % totalReviews;
  
      const reviewsWrapper = document.getElementById("reviews");
      reviewsWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  
    // Initial state: set up the first review
    scrollReviews(0);
  });
  