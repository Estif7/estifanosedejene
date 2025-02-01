<?php

@include '../config/config.php';
@include '../controller/helper.php';

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$pagination = pagination();
$contacts = allContacts($page);
$showMessage = false;
if (isset($_GET['Num'])) {
  $showMessage = true;
}

// Logout functionality
if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: index.php");
  exit();
}
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
  <link rel="stylesheet" href="../assets/css/testimonial-style.css">
  

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<style>
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
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
/* General Table Styles */
.table-container {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 1em;
    font-family: Arial, sans-serif;
}

/* Header Styles */
.table-header-bg {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
}

.table-header-bg th {
    padding: 12px 15px; /* Padding for header cells */
    text-align: left; /* Left align text */
}

/* Body Styles */
.table-light {
    background-color: #f9f9f9; /* Light background for body */
}

.table-light tr:nth-child(even) {
    background-color: #f2f2f2; /* Zebra striping for even rows */
}

.table-light td, .table-light th {
    padding: 12px 15px; /* Padding for body cells */
}

/* Button Styles */
.view-btn {
    display: inline-block;
    padding: 8px 12px;
    background-color: #008CBA; /* Blue background */
    color: white; /* White text */
    text-decoration: none; /* Remove underline */
    border-radius: 4px; /* Rounded corners */
}

.view-btn:hover {
    background-color: #005f73; /* Darker blue on hover */
}

/* Status Badge Styles */
.badge {
    padding: 5px 10px;
    border-radius: 12px; /* Rounded badge corners */
}

.text-bg-success {
    background-color: #28a745; /* Green badge for 'Seen' */
}

.text-bg-danger {
    background-color: #dc3545; /* Red badge for 'Unseen' */
}
/* Pagination Container */
.pagination {
    display: flex;
    justify-content: center; /* Center the pagination */
    padding: 20px 0; /* Add padding around the pagination */
}

/* Individual Page Item Styles */
.page-item {
    margin: 0 5px; /* Space between pagination items */
}

/* Page Link Styles */
.page-link {
    display: inline-block;
    padding: 10px 15px; /* Padding for links */
    border: 1px solid #007bff; /* Border color */
    border-radius: 5px; /* Rounded corners */
    color: #007bff; /* Link text color */
    text-decoration: none; /* Remove underline */
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
}

/* Hover Effect for Links */
.page-link:hover {
    background-color: #007bff; /* Background color on hover */
    color: white; /* Text color on hover */
}

/* Disabled State Styles */
.page-item.disabled .page-link {
    color: #6c757d; /* Gray text for disabled links */
    background-color: #f8f9fa; /* Light background for disabled links */
    border-color: #dee2e6; /* Border color for disabled links */
    cursor: not-allowed; /* Change cursor to indicate disabled state */
}

</style>
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
      <?php if (!$showMessage) { ?>
      <div class="container py-5 text-center">
      <div class="header">
        <h2>Messages from Users</h2>        
        <!-- Logout Button -->
        <form method="POST">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>
    </div>
        <table class="table-container">
          <thead class="table-header-bg">
            <tr>
              <th scope="col">Row</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Message</th>
              <th scope="col">Condition</th>
            </tr>
          </thead>
          <tbody class="table-light">
            <?php foreach ($contacts as $contact) { ?>
              <tr>
                <th><?= $contact->id ?></th>
                <td><?= $contact->name ?></td>
                <td><?= $contact->email ?></td>
                <td><?= $contact->phone ?? '-'  ?></td>
                <td><a style="height: 35px;" href="<?= '?page=' . $page . '&Num=' . $contact->id ?>" class="view-btn view">ViewMessage</a></td>
                <td><span class="status badge rounded-pill <?= ($contact->status == 'read') ? "text-bg-success" : "text-bg-danger" ?>"><?= ($contact->status == 'read') ? "Seen" : "Unseen" ?></span></td>
              </tr>
          <?php } ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="<?= ($page == 1) ? "page-item disabled" : "page-item" ?>">
            <a class="page-link" href="<?= "contacts.php?page=" . ($page - 1) ?>">Previous</a>
          </li>
          <?php for ($pages = 1; $pages <= $pagination; $pages++) { ?>
            <li class="<?= ($page == $pages) ? "page-item disabled" : "page-item" ?>">
              <a class="page-link" href="<?= "contacts.php?page=$pages" ?>"><?= $pages ?></a>
            </li>
          <?php } ?>
          <li class="<?= ($pagination <= $page) ? "page-item disabled" : "page-item" ?>">
            <a class="page-link" href="<?= "contacts.php?page=" . ($page + 1) ?>">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  <?php } else {
    $idMessage = $_GET['Num'];
    $getMessage = contact($idMessage);
    $status = updateStatus($idMessage) ?>
    <div class="message">
      <div class="alert alert-info"><?= $getMessage->message ?></div>
      <td><a href="./contacts.php?page=<?= $page ?>" class="btn btn-danger close">close</a></td>
    </div>
  <?php } ?>

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
            <a href="../pages/contact-me/admin/index.php" class="admin-login">Admin Login</a>
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