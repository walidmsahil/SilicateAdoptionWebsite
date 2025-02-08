<?php
session_start();

if(isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = 1; 

    if(isset($_SESSION['cart'][$productId])) {

        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        );
    }
}

header("Location: shop.php");
?>
