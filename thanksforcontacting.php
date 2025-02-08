<?php 
$title = 'Thank you for contacting us!';
include 'header.php'; ?>

<?php

if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];
    
    include 'db.php';

    // Retrieve user_id from the 'users' table based on the user's email
    $userEmail = mysqli_real_escape_string($conn, $email);
    $userQuery = "SELECT user_id FROM users WHERE user_email = '$email'";
    $userResult = $conn->query($userQuery);

    if ($userResult->num_rows > 0) {
        $row = $userResult->fetch_assoc();
        $userId = $row['user_id'];

        // Define an SQL query to insert data into the 'adopt-out-form' table
        $sql = "INSERT INTO Contact_form (user_id, fname, user_email, phone, inquiry)
        VALUES ('$userId','$fname', '$email', '$phone', '$inquiry');";



        // Execute the SQL query using the database connection
        if ($conn->query($sql) === TRUE) {
            // If the query was successful, set a success message
            $message = "Thank you for submitting the form. We will contact you shortly.";
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

<div class="thx-container">
    <!-- Banner image -->
        <div class="contact-banner-container">
            <img src="images/contact-cat.png" alt="banner" draggable="false">
        </div>


    <div class="thanks-article">
        <br>
            <div class="message">
                <?php echo $message; ?>
            </div>
    </div>

    <div class="tomainpage">
    <a href="home.php"><button> Get back to the main page </button></a>
    </div>
    <br>
</div>

<?php include 'footer.php'; ?>