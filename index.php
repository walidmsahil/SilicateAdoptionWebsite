<?php 
$title = 'Home';
include 'header.php'; ?>


<!-- Home body container -->
<div class="body-container">

<!-- Banner -->
<div class="home-banner-container">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/home-banner.png" alt="banner" draggable="false">
        </div>

        <div class="mySlides fade">
            <img src="images/home-banner2.jpg" alt="banner2" draggable="false">
        </div>

        <div class="mySlides fade">
            <img src="images/home-banner3.jpeg" alt="banner3" draggable="false">
        </div>
    </div>
    <br>
</div>

<!-- Random cat button -->
<div class="randomcat">
    <h1> Trouble choosing? Let our cats choose you!</h1>
    <div class="grid-container">
        <p>Click the 'Show Cat' button, and let our magical algorithm introduce you to the paw-fect companion waiting to bring joy and warmth into your home. Your new best friend is just a click away!</p>
        <button class="show-cat-button" onclick="showRandomCat()">
            Show Cat
            <img src="images/paw.webp" alt="Cat Icon">
        </button>
    </div>
</div>


<!-- Body text -->
                <div class="article">
                <br>
                <h2>About us</h2>
                <p>Silicate Adoption: Your Gateway to Feline Happiness. Discover various ways to embrace the joy of cat companionship with us. 
                    Choose from a curated selection of adorable cats ready for adoption, <br>
                    explore the option to put a cat up for adoption, or enhance your cat-parenting journey with our premium cat products. Introducing Silicate Adoption – the cat-loving wonderland where whiskers meet whimsy! 
                    Embark on a whimsical journey through the feline universe with Silicate Adoption, where time is measured in catnaps, and history unfolds in the playful pounces of our furry companions. From the legendary Catnip Renaissance to the epic Yarn Wars, we've been at the forefront of feline festivities, embracing the motto: "A cat on every lap, a smile on every face."
                    
                    <br><br>In the year 9 Lives Before Internet (9LBLI), a band of cat enthusiasts united to form Silicate Adoption. The founders, Sir Whiskerlot and Lady Purrlock, envisioned a world where cats reign supreme, and every meow is music to the ears. Our first headquarters, a cozy cardboard castle, witnessed the birth of countless paw-some ideas.               
                    Our mission? To find loving homes for cats, create joyous purr-sonalities, and sprinkle the world with a generous dose of feline charm. Silicate Adoption stands as a testament to the belief that a house is not a home without a cat – or two, or three! 
                    Silicate Adoption dreams of a future where every cat has a castle, where scratching posts touch the sky, and where laser pointers are unlimited. Our vision board includes a world where cats rule the internet (and, by extension, the universe) and where napping is a recognized Olympic sport.
                    So, whether you're a seasoned cat whisperer or a novice kitten cuddler, join us in celebrating the magical world of Silicate Adoption. Because in our feline-friendly universe, every day is Caturday, and the pursuit of purr-fection never ends! </p>
                <br><h2> Adoption Paw-ty Favor Bag</h2>

                <p>    Each adoption comes with an exclusive Paw-ty Favor Bag! Filled with treats, toys, and a personalized cat-themed playlist, it's the ideal starter kit for your new life as a cat parent. Your house will be the talk of the town, and your cat will be the life of the paw-ty!
                    
                    Remember, at Cat Cuddles & Whisker Wonders, we take silly cat business very seriously. Come on down, adopt a cat, and let the purr-festivities begin! Meow is the time to make your home a whisker-friendly wonderland!</p>
                </div>     

                <div class="randomcat2">
                    <h1> Find a Loving Home for Your Furry Friend! </h1>
                    <div class="grid-container">
                    <p>We understand that life can throw unexpected challenges our way, and sometimes, caring for our beloved feline friends becomes overwhelming. But fret not! At Purrfect Haven Adoption Agency, we're here to lend a helping paw. Click the 'Adoption' button to begin the process of providing a new, loving home for your kitty.</p>
                    <a href="adoptout_cat.php"><button class="show-cat-button">
                    Adopt out
                    <img src="images/paw.webp" alt="Cat Icon">
                    </button></a>
                </div>
            </div>
    </div>

<script src="randomcatbutton.js"></script>

<?php 
include 'footer.php'; 
?>

<script src = "banner.js"></script>