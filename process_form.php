<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = ""; // Change this to your MySQL password
$database = "contact_form";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $description = $conn->real_escape_string($_POST["description"]);

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, description) VALUES ('$name', '$email', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you! Your message has been received.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
