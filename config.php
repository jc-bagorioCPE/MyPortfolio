<?php
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "letstalk_db";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    
    $sql = "INSERT INTO contacts (fname, lname, email, message) 
            VALUES ('$fname', '$lname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting me!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
