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