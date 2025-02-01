<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch only approved testimonials
$sql = "SELECT name, email, caption, message, rating, icon 
        FROM testimonials 
        WHERE status = 'approved' 
        ORDER BY created_at DESC";

$result = $conn->query($sql);

$testimonials = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
}

$conn->close();
?>
