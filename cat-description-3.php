<?php 
$title = 'Jägermeister';
include 'header.php'; 
$cat_id = 3; 

?>

<!-- Cat description body container -->
<div class="body-container">

    <!-- Banner image -->
    <div class="desc-banner-container">
        <img src="images/cat3banner.jpg" alt="banner" draggable="false">
    </div>

    <!-- Cat description text -->
    <div class="article">
        <h1>Jägermeister</h1>
        <br>
        <p>Jägermeister is not just a cat; he's a spirited explorer with a heart full of curiosity. This handsome Domestic Shorthair with a striking coat is ready to embark on a new adventure with a loving family. Jägermeister is the perfect blend of playfulness and affection, making him an ideal companion for those seeking a feline friend with a touch of spice.
           <br><br>Jägermeister is looking for a home that appreciates his zest for life. Whether you're an active individual or a family with playful kids, Jägermeister is ready to be the lively addition to your household. An indoor-outdoor setup or a sunny window perch would make him purr with delight.
           <br><br>Jägermeister is a fan of interactive play and enjoys chasing feather toys, exploring cardboard boxes, and mastering agility courses. His playful antics will keep you entertained for hours, and he's always up for a game of hide-and-seek. He is a healthy cat, fully vaccinated, neutered, and microchipped. Regular veterinary check-ups confirm that he's ready to leap into the next chapter of his life with good health and vitality.
           <br><br>When Jägermeister isn't on a grand adventure, he loves to unwind with his human companions. His favorite spot is curled up on a cozy blanket, purring contentedly as he enjoys the warmth of your company.</p>
    </div>

    <!-- Adopt cat button -->
    <div class="button-placement">
        <a href="adoption-form.php?cat_id=<?php echo $cat_id; ?>"><button>Adopt me</button></a>
        <br>
    </div>
</div>

<?php include 'footer.php'; ?>