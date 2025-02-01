<?php
session_start();
// Ensure admin is logged in
if (!isset($_SESSION['admin_id'])) {
    die("Unauthorized access");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Approve testimonial
if (isset($_POST['approve'])) {
    $testimonial_id = $_POST['testimonial_id'];
    $stmt = $conn->prepare("UPDATE testimonials SET status = 'approved' WHERE id = ?");
    $stmt->bind_param("i", $testimonial_id);
    $stmt->execute();
}

// Reject testimonial
if (isset($_POST['reject'])) {
    $testimonial_id = $_POST['testimonial_id'];
    $stmt = $conn->prepare("UPDATE testimonials SET status = 'rejected' WHERE id = ?");
    $stmt->bind_param("i", $testimonial_id);
    $stmt->execute();
}

// Fetch pending testimonials
$pending_sql = "SELECT * FROM testimonials WHERE status = 'pending'";
$pending_result = $conn->query($pending_sql);
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Pending Testimonials</h2>
    <?php while ($row = $pending_result->fetch_assoc()): ?>
        <div>
            <p>Name: <?= htmlspecialchars($row['name']) ?></p>
            <p>Message: <?= htmlspecialchars($row['message']) ?></p>
            <form method="POST">
                <input type="hidden" name="testimonial_id" value="<?= $row['id'] ?>">
                <button type="submit" name="approve">Approve</button>
                <button type="submit" name="reject">Reject</button>
            </form>
        </div>
    <?php endwhile; ?>
</body>
</html>
