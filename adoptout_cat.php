
<?php 
$title = 'Adopt';
include 'header.php'; ?>




<?php
$message = ""; 
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $catname = $_POST['catname'];      
    $fname = $_POST['fname'];            
    $email = $_POST['email'];            
    $phone = $_POST['phone'];            
    $age = $_POST['age'];                
    $reasons = $_POST['catadoptionReason'];        
    $comments = $_POST['additionalComments'];     

    // Include the database connection file
    include 'db.php';

    // Retrieve user_id from the 'users' table based on the user's email
    $userEmail = mysqli_real_escape_string($conn, $email);
    $userQuery = "SELECT user_id FROM users WHERE user_email = '$email'";
    $userResult = $conn->query($userQuery);

    if ($userResult->num_rows > 0) {
        $row = $userResult->fetch_assoc();
        $userId = $row['user_id'];

        // Define an SQL query to insert data into the 'adopt-out-form' table
        $sql = "INSERT INTO `adopt-out-form` (user_id, cat_name, fname, user_email, phone, age, reasons, comments)
        VALUES ('$userId', '$catname', '$fname', '$email', '$phone', '$age', '$reasons', '$comments');";

        $sql .= "INSERT INTO `available_cats` (cat_name, adoption_status, owner)
        VALUES ('$catname', 'Available', '$email');";

        // Execute the SQL query using the database connection
        if ($conn->multi_query($sql) === TRUE) {
            // If the query was successful, set a success message
            $message = "Form submitted successfully";
        } else {
            // If there was an error in the query, set an error message
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // If the user with the specified email is not found, display an error message
        $message = "User not found with email: $email, please register first.";
    }

    // Close the database connection
    $conn->close();
}
?>


<div class="login-container">
    <div class="center">
    <div class="cat-header">
    <img src="images/paw.webp">
    <h1>Find a Loving Home for Your Furry Friend!</h1>
    <img src="images/paw.webp">
        </div>
    </div>
</div>


<div class="adoption-container">
        <div class="center-2">
                <form action="" method="post" class="adoption-form">
                <h4>ADOPT OUT</h4>
                <div class="input-box">
                    <input type="text" class="input-field" id="catname" name="catname" placeholder="Cat Name" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" class="input-field" placeholder="Email" required><br>
                    <span id="emailError" class="error"></span>
                </div>
                <div class="input-box">
                    <input type="phone" class="input-field" id="phone" name="phone" placeholder="Phone" required><br>
                    <span id="phoneError" class="error"></span>
                </div>
                <div class="input-box">
                    <input type="number" class="input-field" id="age" name="age" placeholder="Age" required>
                </div>
                <div class="input-box">
                    <label for="catadoptionReason">Reasons for your decision:</label>
                    <select id="catadoptionReason" name="catadoptionReason" class="input-field" required>
                        <option class ="option" value="allergy">Allergy</option>
                        <option class ="option" value="Healthissues">Health Issues</option>
                        <option class ="option" value="finances">Financial Constraints</option>
                        <option class ="option" value="behavior">Behavioral Issues</option>
                        <option class ="option" value="personal">Personal Issues</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="additionalComments">Additional Comments:</label>
                    <textarea id="additionalComments" name="additionalComments" class="input-field" rows="4"></textarea>
                </div>
                <div class="input-submit">
                    <button type="submit" class="submit-btn" name="submit">SUBMIT</button>
                </div><br>
                <div class="message">
                <?php echo $message; ?>
                </div>
            </form>
        </div>
    </div>
<script src="validation.js"></script>
<?php include 'footer.php'; ?>