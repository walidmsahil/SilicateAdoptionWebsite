<?php
session_start();

if (isset($_POST['update_cart'])) {
    $productId = $_POST['product_id'];
    $newQuantity = $_POST['quantity'];
    
    if ($newQuantity > 0 && is_numeric($newQuantity) && intval($newQuantity) == $newQuantity) {
        $_SESSION['cart'][$productId]['quantity'] = $newQuantity;
    }
}

header("Location: shopping-cart.php");
exit();
?>
