<?php
session_start();

if (isset($_POST['submitcheckout'])) {
    include 'db.php';
    if ($conn) {
        $fullName = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $paymentMethod = $_POST['paymthd'];

        $totalPrice = 0;

        foreach ($_SESSION['cart'] as $productId => $product) {
            $quantity = $product['quantity'];
            $productPrice = $product['price'];
            $totalPrice += $productPrice * $quantity;

            $sql = "INSERT INTO orders (product_id, quantity, fname, user_email, phone, address, payment_method, total_price)
                    VALUES ($productId, $quantity, '$fullName', '$email', '$phone', '$address', '$paymentMethod', $totalPrice)";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
                break; 
            }
        }

        header("Location: thanks.php");
        exit();
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
}

if ($conn) {
    $conn->close();
}
?>
