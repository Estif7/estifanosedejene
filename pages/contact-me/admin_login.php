<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $admin_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($admin_password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            header("Location: admin_dashboard.php");
            exit();
        }
    }

    $error = "Invalid credentials";
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <input type="text" name="username" required>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
