<?php 
$title = 'Sign up';
include 'header.php'; 
?>


<?php
$message = ""; 


if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];         
    $email = $_POST['email'];       
    $user_password = $_POST['user_password'];

    include 'db.php';
 
    $sql = "INSERT INTO users (fname, user_email, user_password)
            VALUES ('$fname', '$email', '$user_password')";

    if ($conn->query($sql) === TRUE) {

        $message = "New user added";
    } else {

        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<div class="body-container">
    <div class="login-container">
        <div class="space"></div>

        <div class="center-2">
            <div class="message">
                <?php echo $message; ?>
            </div>

            <form action="" method="post" class="loginform">
                <h4>CREATE ACCOUNT</h4>
                <div class="input-box">
                    <input type="text" name="fname" class="input-field" id="fname" placeholder="Full Name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email" required>
                    <span id="emailError" class="error"></span>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="user_password" class="input-field" placeholder="Password" autocomplete="off" required>
                    <span id="passwordError" class="error"></span>
                </div>
                <div class="input-box">
                    <input type="password" id="confirm_password" name="confirm_password" class="input-field" placeholder="Confirm Password" autocomplete="off" required>
                    <span id="confirmPasswordError" class="error"></span>
                </div>
                <div class="input-submit">
                    <button type="submit" class="submit-btn" name="submit">SIGN UP</button>
                </div>
                <div class="sign-up-link">
                    <p>Already have an account? <a href="login.php">Log In</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="validation.js"></script>
<?php include 'footer.php'; ?>