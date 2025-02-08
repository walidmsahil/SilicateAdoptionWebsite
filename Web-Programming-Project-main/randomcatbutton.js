function showRandomCat() {
    var catPages = [
        'cat-description-1.php',
        'cat-description-2.php',
        'cat-description-3.php',
        'cat-description-4.php'
    ];

    // Gets a random index from the array
    var randomIndex = Math.floor(Math.random() * catPages.length);

    // Redirects to the randomly chosen page
    window.location.href = catPages[randomIndex];
}