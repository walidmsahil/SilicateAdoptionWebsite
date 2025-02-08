<?php
$title = 'Herbert';
include 'header.php';
$cat_id = 4;
?>

<!-- Cat description body container -->
<div class="body-container">

    <!-- Banner image -->
    <div class="desc-banner-container">
        <img src="images/cat4banner.jpg" alt="banner" draggable="false">
    </div>

    <!-- Cat description text -->
    <div class="article">
        <h1>Herbert</h1>
        <br>
        <p>Herbert is a precious bundle of fur and joy, with a personality as endearing as his fluffy coat. As a baby
            cat,
            he's still discovering the wonders of the world, from the fascinating twitch of a tail to the comforting
            warmth
            of a cozy bed. With each playful leap and curious sniff, Herbert brings a sense of wonder and innocence to
            every
            moment.
            <br><br>
            Despite his small size, Herbert's heart is brimming with love and affection. He'll eagerly curl up in your
            arms
            for cuddles and purr contentedly as you stroke his soft fur. His gentle demeanor and sweet nature make him
            the
            perfect companion for cozy nights in and playful afternoons filled with laughter.
            <br><br>
            With Herbert by your side, every day is an adventure waiting to unfold. From exploring new corners of the
            house
            to chasing after elusive shadows, he'll remind you of the simple joys in life and the beauty of
            unconditional
            love. Embrace the magic of kittenhood with Herbert, and let his playful antics brighten your days and warm
            your
            heart.
            <br><br>
            Whether he's napping in a sunny spot by the window or embarking on a playful adventure through the house,
            Herbert is sure to capture your heart with his irresistible charm and undeniable charisma. So why wait?
            Bring home Herbert today and let the magic begin!
        <p>
    </div>

    <!-- Adopt cat button -->
    <div class="button-placement">
        <a href="adoption-form.php?cat_id=<?php echo $cat_id; ?>"><button>Adopt me</button></a>
        <br>
    </div>
</div>

<?php include 'footer.php'; ?>