<?php
$title = 'Shopping Cart';
include("header.php"); 
session_start(); 

?>

<div class="cat-cart">
    <img src="images/paw.webp">
    <h1>Meow that's what I call a great order! Your feline friend will be 'feline' fine in no time!</h1>
    <img src="images/paw.webp">
</div>

<div class="body-container">
    <div class="cart-container">
        <h1>Your Cart</h1>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php
            
            $totalPrice = 0;

            if(isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $productId => $product) { 
                    $productName = $product['name'];
                    $productPrice = $product['price']; 
                    $quantity = $product['quantity']; 
                    $total = $productPrice * $quantity; 
                    $totalPrice += $total; 
                    ?>
                    <tr>
                        <td><?php echo $productName; ?></td>
                        <td><?php echo $productPrice; ?> €</td>
                        <td>
                            <form method="post" action="update-cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                                <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1" required>
                                <button type="submit" name="update_cart">Update</button>
                            </form>
                        </td>
                        <td><?php echo $total; ?> €</td>
                    </tr>
                <?php }
            }
            ?>
            <tr>
                <td colspan="3">Total:</td>
                <td class="total-price"><?php echo $totalPrice; ?> €</td>
            </tr>
        </table>


        <form method="post" action="clear.php" class="button-placement">
            <button type="submit" name="clear_cart" class="clear-cart-button">Clear Cart</button>
        </form>
</div>

<div class="adoption-container">
    <div class="center">
        <form action="checkoutprocess.php" method="post" class="adoption-form">
            <h4>PAYMENT INFO</h4>
            <div class="input-box">
                <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="email" name="email" placeholder="Email" required><br>
                <span id="emailError" class="error"></span>
            </div>
            <div class="input-box">
                <input type="tel" class="input-field" id="phone" name="phone" placeholder="Phone" required><br>
                <span id="phoneError" class="error"></span>
            </div>
            <div class="input-box">
                <textarea class="input-field" id="address" name="address" rows="4" placeholder="Delivery Address" required></textarea>
            </div>
            <div class="input-box">
                <label for="paymentmethod">Choose your payment method:</label>
                <select id="paymentmethod" name="paymthd" class="input-field" required>
                    <option class ="option" value="VISA">VISA</option>
                    <option class ="option" value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
                    <option class ="option" value="MASTERCARD">MASTERCARD</option>
                </select>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="cname" name="cardname" placeholder="Name on Card" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="cnum" name="cardnumber" placeholder="Credit Card Number" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="expmonth" name="expmonth" placeholder="Exp Date" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="CVV" name="CVV" placeholder="CVV" required>
            </div>
            <div class="input-submit">
                <button class="submit-btn" type="submitcheckout" name="submitcheckout">Checkout</button>
            </div>
        </form>
    </div>
</div>
<script src="validation.js"></script>
<?php
include("footer.php");
?>
