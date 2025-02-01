<?php
// Debugging: Print the $_POST and $_FILES arrays
echo "<pre>";
echo "POST data:\n";
print_r($_POST);
echo "FILES data:\n";
print_r($_FILES);
echo "</pre>";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Image Upload Handling
    $image_path = null;
    if (isset($_FILES['testimonial_image']) && $_FILES['testimonial_image']['error'] == 0) {
        // Debugging: Print file information
        echo "<pre>";
        print_r($_FILES['testimonial_image']);
        echo "</pre>";

        // Validate file type and size
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $max_file_size = 5 * 1024 * 1024; // 5MB

        if (
            in_array($_FILES['testimonial_image']['type'], $allowed_types) &&
            $_FILES['testimonial_image']['size'] <= $max_file_size
        ) {
            // Create upload directory if it doesn't exist
            $upload_dir = 'uploads/testimonials/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // Generate a unique filename
            $file_extension = pathinfo($_FILES['testimonial_image']['name'], PATHINFO_EXTENSION);
            $unique_filename = uniqid() . '.' . $file_extension;
            $destination = $upload_dir . $unique_filename;

            // Move the uploaded file to the destination directory
            if (move_uploaded_file($_FILES['testimonial_image']['tmp_name'], $destination)) {
                $image_path = $destination; // Store the relative path
            } else {
                echo "Error: Failed to move uploaded file.<br>";
                exit;
            }
        } else {
            echo "Error: Invalid file type or file size too large.<br>";
            exit;
        }
    } else {
        echo "Error: No file uploaded or file upload error.<br>";
        if (isset($_FILES['testimonial_image'])) {
            echo "Error code: " . $_FILES['testimonial_image']['error'] . "<br>";
        } else {
            echo "File input field 'testimonial_image' is missing or not set.<br>";
        }
        exit;
    }

    // Database connection and insertion logic
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testimonials_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement with image path
    $stmt = $conn->prepare("INSERT INTO testimonials (name, email, caption, message, rating, status, image_path) VALUES (?, ?, ?, ?, ?, 'pending', ?)");

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $caption = $_POST['caption'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    // Bind parameters
    $stmt->bind_param("ssssss", $name, $email, $caption, $message, $rating, $image_path);

    // Debugging: Print the bound parameters
    echo "Bound parameters:<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Caption: $caption<br>";
    echo "Message: $message<br>";
    echo "Rating: $rating<br>";
    echo "Image path: $image_path<br>";

    // Execute the statement
    if ($stmt->execute()) {
        echo "Testimonial submitted successfully. Awaiting admin approval.";
        header("Location: thank_you.html"); // Redirect to a thank you page
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Error: Form not submitted.";
}
?>