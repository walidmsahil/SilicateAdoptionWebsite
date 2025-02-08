<?php
$title = 'Adoption Form';
include 'header.php';
?>

<?php
$message = ""; 
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Include the database connection file
    include 'db.php';

    // Retrieve form data
    $fname = $_POST['fname'];
    $user_email = $_POST['user_email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];
    $experience = $_POST['experience'];
    $house_type = $_POST['house_type'];
    $reasons = $_POST['reasons'];
    $comments = $_POST['comments'];
    $cat_id = $_POST['cat_id']; // Retrieve the cat_id from the form data


$insertQuery = $conn->prepare("INSERT INTO adoption_form (cat_id, fname, user_email, phone, address, age, occupation, experience, house_type, reasons, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


$insertQuery->bind_param("sssssssssss", $cat_id, $fname, $user_email, $phone, $address, $age, $occupation, $experience, $house_type, $reasons, $comments);


if ($insertQuery->execute()) {
    // Delete data from available_cats table
    $deleteQuery = "DELETE FROM available_cats WHERE cat_id = '$cat_id'";
    if (mysqli_query($conn, $deleteQuery)) {
        $conn->commit();
        $message = "Thank you for submitting the form. We will contact you shortly.";
    } else {
        $conn->rollback();
        $message = "Error deleting from available_cats: " . mysqli_error($conn);
    }
} else {
    $conn->rollback();
    $message = "Error inserting into adoption_form: " . $insertQuery->error;
}


$insertQuery->close();


echo $message;
}
?>



<div class="cat-header">
    <img src="images/paw.webp">
    <h1>Find Your Feline Friend: Begin Your Adoption Journey Today</h1>
    <img src="images/paw.webp">
</div>

<div class="adoption-container">
    <div class="center">
        <form action="" method="POST" class="adoption-form">
            <input type="hidden" name="cat_id" value="<?php echo htmlspecialchars($_GET['cat_id'] ?? ''); ?>">
            <h4>ADOPTION FORM</h4>
            <div class="input-box">
                <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
            </div>
            <div class="input-box">
                <input type="email" id="email" class="input-field" name="user_email" placeholder="Email" required><br>
                <span id="emailError" class="error"></span>
            </div>
            <div class="input-box">
                <input type="phone" class="input-field" id="phone" name="phone" placeholder="Phone" required><br>
                <span id="phoneError" class="error"></span>
            </div>
            <div class="input-box">
                <textarea class="input-field" id="address" name="address" rows="4" placeholder="Address"
                    required></textarea>
            </div>
            <div class="input-box">
                <input type="number" class="input-field" id="age" name="age" placeholder="Age" required>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" id="occupation" name="occupation" placeholder="Occupation"
                    required>
            </div>
            <div class="input-box">
                <label for="experience">Experience with cats:</label>
                <select id="experience" name="experience" class="input-field" required>
                    <option class="option" value="beginner">Beginner</option>
                    <option class="option" value="intermediate">Intermediate</option>
                    <option class="option" value="experienced">Experienced</option>
                </select>
            </div>
            <div class="input-box">
                <label for="homeType">Home Type:</label><br>
                <select id="homeType" name="house_type" class="input-field" required>
                    <option class="option" value="house">House</option>
                    <option class="option" value="apartment">Apartment</option>
                </select>
            </div>
            <div class="input-box">
                <label for="adoptionReason">Reasons for Adoption:</label>
                <select id="adoptionReason" name="reasons" class="input-field" required>
                    <option class="option" value="companionship">Companionship</option>
                    <option class="option" value="familyPet">Family Pet</option>
                    <option class="option" value="emotionalSupport">Emotional Support</option>
                    <option class="option" value="other">Other (Specify in comments)</option>
                </select>
            </div>
            <div class="input-box">
                <label for="additionalComments">Additional Comments:</label>
                <textarea id="additionalComments" name="comments" class="input-field" rows="4"></textarea>
            </div>
            <div class="input-submit">
                <button class="submit-btn" type="submit" name="submit">Submit</button>
            </div><br>
            <div class="message">
            <?php echo $message; ?>
            </div>
        </form>
    </div>
</div>
<script src="validation.js"></script>
<?php include 'footer.php' ?>