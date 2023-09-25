// Add this JavaScript code to your page, preferably just before the closing </body> tag.const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('show');
});

// Select the search input and articles
const searchInput = document.getElementById('search-input');
const articles = document.querySelectorAll('.article');

// Add an event listener to the search input
searchInput.addEventListener('input', () => {
    const searchText = searchInput.value.toLowerCase();

    // Loop through articles and hide/show based on filter
    articles.forEach((article) => {
        const articleText = article.textContent.toLowerCase();
        if (articleText.includes(searchText)) {
            article.style.display = 'block'; // Show matching articles
        } else {
            article.style.display = 'none'; // Hide non-matching articles
        }
    });
});
// JavaScript for handling "Read More" button click
document.addEventListener("DOMContentLoaded", function() {
    const readMoreButtons = document.querySelectorAll(".read-more-button");

    readMoreButtons.forEach(button => {
        button.addEventListener("click", function() {
            const articleContent = this.parentNode.querySelector(".article-content");
            articleContent.classList.toggle("show-content");

            // Change button text
            this.innerText = articleContent.classList.contains("show-content") ? "Read Less" : "Read More";
        });
    });
});

// JavaScript code to handle form submission and comment display
document.addEventListener("DOMContentLoaded", function() {
    const commentsList = document.getElementById("comments-list");
    const commentForm = document.getElementById("comment-form");

    commentForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const comment = document.getElementById("comment").value;

        // Send comment data to the server via AJAX and handle the response
        // Insert the new comment into the commentsList
    });

    // Fetch and display comments from the server on page load
    // Use AJAX to retrieve comments from the server
});

// Example JavaScript for page transitions
const formContainer = document.querySelector('.form-container');
const toggleButton = document.querySelector('.toggle-button');

toggleButton.addEventListener('click', () => {
    formContainer.classList.toggle('hidden');
});
// Example JavaScript for adding fade-in class
const successMessage = document.querySelector('.success-message');
successMessage.classList.add('fade-in');

// JavaScript code for translations and animations

// Function to change content based on selected language
function translateTo(language) {
    // Implement translation logic here
}

// Event listeners for language buttons
document.getElementById("translate-en").addEventListener("click", function() {
    translateTo("en");
});

document.getElementById("translate-es").addEventListener("click", function() {
    translateTo("es");
});