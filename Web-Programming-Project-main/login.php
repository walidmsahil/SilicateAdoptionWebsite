<?php 
$title = 'Login';
include 'header.php'; ?>
<!-- Home body container -->
<div class="body-container">

<!-- Body text -->

<div class="login-container">
    <div class="center">
        <div class="cat-header">
            <img src="images/paw.webp">
            <h1>Log in to Begin Your Feline Journey!</h1>
            <img src="images/paw.webp">
        </div>
    </div>

    <div class="center-2">
                <form action="logincheck.php" method="post" class="loginform">
                    <h4>LOGIN</h4>
                    <div class="input-box">
                    <input type="email" id="email" class="input-field" placeholder="Email" required><br>
                    <span id="emailError" class="error"></span>
                    </div>
                    <div class="input-box">
                    <input type="password" id="password" name="user_password" class="input-field" placeholder="Password" >
                    <span id="passwordError" class="error"></span>
                </div>
                    <div class="input-submit">
                        <button class="submit-btn" id="submit">SIGN IN</button>
                    </div>
                    <div class="sign-up-link">
                        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </form>
        </div>
    </div>

<script src="validation.js"></script>
<?php include 'footer.php'; ?>