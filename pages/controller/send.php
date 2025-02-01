<?php
@include 'helper.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400); // Bad request
        echo "Please fill out all required fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format.";
        exit;
    }

    try {
        // Save message to the database
        $saveMessage = seveMessage($name, $phone, $email, $message);

        if ($saveMessage == 1) {
            http_response_code(200);
            echo "success";
        } else {
            http_response_code(500);
            echo "Failed to save your message to the database.";
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo "Database error: " . $e->getMessage();
    }
} else {
    http_response_code(405); // Method not allowed
    echo "Invalid request method.";
}
?>
