<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testimonials_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Handle Testimonial Actions
if (isset($_POST['approve'])) {
    $stmt = $conn->prepare("UPDATE testimonials SET status = 'approved' WHERE id = ?");
    $stmt->bind_param("i", $_POST['testimonial_id']);
    $stmt->execute();
}

if (isset($_POST['reject'])) {
    $stmt = $conn->prepare("UPDATE testimonials SET status = 'rejected' WHERE id = ?");
    $stmt->bind_param("i", $_POST['testimonial_id']);
    $stmt->execute();
}

if (isset($_POST['delete'])) {
    $stmt = $conn->prepare("DELETE FROM testimonials WHERE id = ?");
    $stmt->bind_param("i", $_POST['testimonial_id']);
    $stmt->execute();
}

// Logout functionality
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: admin/index.php");
    exit();
}

// Fetch Testimonials, ordering by ID in descending order
$result = $conn->query("SELECT * FROM testimonials ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin1</title>

  <!--
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon"> -->

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/testimonial-style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <!-- <nav class="navbar">

        <ul class="navbar-list">

          <a href="../index.php">
            <button class="navbar-link">HOME</button>
          </a>        

          <li class="navbar-item">
            <button class="navbar-link active" data-nav-link>PORTFOLIO</button>
          </li>
          
          <a href="../pages/about-me.php">
            <button class="navbar-link" data-nav-link>ABOUT</button>
          </a>

          <a href="../pages/contact-me.php">
            <button class="navbar-link">CONTACT</button>
          </a>
        </ul>

      </nav> -->





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">
      <style>
        body {
            position: relative;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white; /* Set default text color to white */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        h2 {
            margin: 0;
            color:rgb(255, 255, 255);
        }
        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #d32f2f;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .user-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #fff;
        }
        .img-thumbnail {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Admin Dashboard - Testimonials</h2>        
        <!-- Logout Button -->
        <form method="POST">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Caption</th>
                <th>Message</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Approve</th>
                <th>Reject</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td>
                        <?php if (!empty($row['image_path'])): ?>
                            <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="Image" class="img-thumbnail">
                        <?php else: ?>
                            <div class="user-icon">&#x1F464;</div>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['caption']) ?></td>
                    <td><?= htmlspecialchars($row['message']) ?></td>
                    <td><?= htmlspecialchars($row['rating']) ?></td>
                    <td><?= htmlspecialchars($row['status']) ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="testimonial_id" value="<?= $row['id'] ?>">
                            <button type="submit" name="approve" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px;">Approve</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="testimonial_id" value="<?= $row['id'] ?>">
                            <button type="submit" name="reject" style="background-color: red; color: white; padding: 10px 20px; border-radius: 5px;">Reject</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="testimonial_id" value="<?= $row['id'] ?>">
                            <button type="submit" name="delete" style="background-color: red; color: white; padding: 10px 20px; border-radius: 5px;">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

      



      </article>

      <footer class="footer">
        <div class="footer-content">
            <div class="social-icons">
                <a href="#" class="social-link" aria-label="Facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="social-link" aria-label="Telegram">
                    <ion-icon name="paper-plane-outline"></ion-icon>
                </a>
                <a href="#" class="social-link" aria-label="Instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </div>
        </div>
    
        <hr class="thin-line">
    
        <p class="footer-text">©2024 Estif Creation. All Rights Reserved.</p>
    </footer>
    
    

    </div>

  </main>

  <!--
    - custom js link
  -->

  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>