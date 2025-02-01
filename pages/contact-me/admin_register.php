<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['username'];
    $admin_email = $_POST['email'];
    $admin_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Optional: Add a registration key for security
    $registration_key = $_POST['registration_key'];
    
    if ($registration_key !== 'ADMIN_SECRET_KEY_2025') {
        die("Invalid registration key");
    }

    $stmt = $conn->prepare("INSERT INTO admin_users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $admin_username, $admin_email, $admin_password);
    
    if ($stmt->execute()) {
        echo "Admin registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="Admin Username" required>
        <input type="email" name="email" placeholder="Admin Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="registration_key" placeholder="Registration Key" required>
        <button type="submit">Register Admin</button>
    </form>
</body>
</html>
