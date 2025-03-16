<?php
// Database connection
$DBConnect = mysqli_connect("localhost", "root", "", "my1stdatabase");

if ($DBConnect->connect_error) {
    die("Database connection failed: " . $DBConnect->connect_error);
}

// Handle form submission
if (isset($_POST["submit"])) {
    // Sanitize input
    $fname = $DBConnect->real_escape_string(trim($_POST['fname']));
    $lname = $DBConnect->real_escape_string(trim($_POST['lname']));
    $email = $DBConnect->real_escape_string(trim($_POST['email']));
    $message = $DBConnect->real_escape_string(trim($_POST['message']));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Insert into database
    $sql = "INSERT INTO contacts (fname, lname, email, message) VALUES ('$fname', '$lname', '$email', '$message')";
    
    if ($DBConnect->query($sql) === TRUE) {
        header("Location: act4thankyou.php"); // Redirect to the thank-you page
        exit();
    } else {
        die("Error saving to database: " . $DBConnect->error);
    }
}

// Close connection
$DBConnect->close();
?>
