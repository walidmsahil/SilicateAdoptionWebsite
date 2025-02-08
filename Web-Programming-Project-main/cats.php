<?php
$title = 'Cats';
include 'header.php'; ?>

<!-- Container for body -->
<div class="catnshop-container">

    <!-- Cats heading text -->
    <div class="cat-header">
        <img src="images/paw.webp">
        <h1>Paw-fect Companions Await: Meet Our Adorable Cats</h1>
        <img src="images/paw.webp">
    </div>

    <!-- Cat cards -->
    <div class="cat-cards">
        <?php
        $cats = [
            ['cat_id' => 1, 'name' => 'Bunker Buster', 'image' => 'images/bunker-buster.png'],
            ['cat_id' => 2, 'name' => 'Tole Tole', 'image' => 'images/toletole.jpg'],
            ['cat_id' => 3, 'name' => 'Jägermeister', 'image' => 'images/chernobyl.png'],
            ['cat_id' => 4, 'name' => 'Herbert', 'image' => 'images/herbert.jpeg'],
            ['cat_id' => 5, 'name' => 'Don Giovanni', 'image' => 'images/mafia-cat.jpg'],
            ['cat_id' => 6, 'name' => 'McSillypants Jr.', 'image' => 'images/silly-cat.jpg'],
            ['cat_id' => 7, 'name' => 'Jinx', 'image' => 'images/Jinx.webp'],
            ['cat_id' => 8, 'name' => 'Meowke Tyson', 'image' => 'images/meowke-tyson.png'],
        ];

        foreach ($cats as $cat) {
            echo '<div class="card">';
            echo '<img src="' . $cat['image'] . '" alt="' . $cat['name'] . '">';
            echo '<h2>' . $cat['name'] . '</h2>';
            echo '<a href="cat-description-' . $cat['cat_id'] . '.php"><button>See Profile</button></a>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>


