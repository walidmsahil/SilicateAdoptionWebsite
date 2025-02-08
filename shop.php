<?php
$title = 'Shop';
include ("header.php");
include ("db.php");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);   

?>

    <!-- Shop body container -->
    <div class="catnshop-container">

        <!-- Shop heading text -->
        <div class="cat-header">
            <img src="images/paw.webp">
            <h1>Shop in Style: Discover Purr-fect Cat Products for Your Feline Friend</h1>
            <img src="images/paw.webp">
        </div>

        <!-- Shop cards -->
        <div class="cat-cards">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card">
                        <img src="<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                        <h2><?php echo $row['product_name']; ?></h2>
                        <p><?php echo $row['product_price']; ?> €</p>
                        <form method="post" action="cartprocess.php" class="add-to-cart">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                        <button type="submit" name="add_to_cart">Add to cart</button>
                    </form>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>

<?php

include ("footer.php");

?>