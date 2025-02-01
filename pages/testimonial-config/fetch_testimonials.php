<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "testimonials_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch testimonials
$sql = "SELECT icon, name, caption, message, rating FROM testimonials ORDER BY created_at DESC";
$result = $conn->query($sql);

$testimonials = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
}
$conn->close();
?>
