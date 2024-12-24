// Toggle search container visibility
document.getElementById('searchButton').addEventListener('click', function() {
  const searchContainer = document.getElementById('searchContainer');
  searchContainer.style.display = searchContainer.style.display === 'none' || searchContainer.style.display === '' ? 'flex' : 'none';
  searchContainer.querySelector('input').focus();
});

// Voice search button (annyang)
if (annyang) {
  document.getElementById('voiceButton').addEventListener('click', function() {
    annyang.start();
    alert('Voice recognition started. Speak your search query.');
  });

  annyang.addCallback('result', function(phrases) {
    const searchQuery = phrases[0];
    document.getElementById('Search').value = searchQuery;
    executeSearch(searchQuery);
  });
} else {
  console.error('Annyang is not available.');
}

// Execute search function
function executeSearch(query) {
  alert("Searching for: " + query);
}


// Slideshow functionality
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// Slider functionality for next/previous buttons
const scrollContainer = document.querySelector(".slider");
const backBtn = document.getElementById("backBtn");
const nextBtn = document.getElementById("nextBtn");

// Ensure smooth scrolling behavior for dynamic content
function scrollContainerBy(amount) {
  scrollContainer.style.scrollBehavior = 'smooth'; // Ensure smooth scroll
  scrollContainer.scrollLeft += amount;
}

// Next Button - Scrolls forward
nextBtn.addEventListener("click", () => {
  const scrollAmount = scrollContainer.scrollWidth - scrollContainer.clientWidth;
  scrollContainerBy(scrollAmount > 900 ? 900 : scrollAmount); // Prevent excessive scrolling
});

// Back Button - Scrolls backward
backBtn.addEventListener("click", () => {
  scrollContainerBy(-900); // Scroll 900px to the left
});

// Optional: Add more items dynamically and trigger scrolling as necessary
function addMoviePoster() {
  const newPoster = document.createElement("div");
  newPoster.classList.add("movies-poster");

  // Add content inside the new poster
  newPoster.innerHTML = `
    <img src="newMoviePoster.jpg" alt="New Movie" class="poster-image">
    <a href="#" target="_blank" class="plays-button">▶</a>
    <div class="movies-info">
      <h3 class="movies-title">New Movie</h3>
      <p class="movies-description">2024 ‧ Genre ‧ 1h 30m</p>
    </div>
  `;

  // Append the new poster to the slider container
  scrollContainer.appendChild(newPoster);
}
