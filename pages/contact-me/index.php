<?php

@include 'config/config.php';
@include 'controller/helper.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>


<body>

<style>
.title {
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    margin-bottom: 20px; /* Space between title and cards */
    font-size: 24px; /* Title font size */
}
.card-container {
    display: flex;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    margin-left: 50px;
    gap: 30px; /* Space between cards */
}

.card {
    width: 300px;
    height: 300px;
    background-color:rgba(131, 86, 237, 0.52); /* Green background */
    color: white; /* White text */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline from links */
    border-radius: 30px; /* Rounded corners */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
}

.card:hover {
    background-color: #8356ED; /* Darker green on hover */
}

.icon {
    width: 250px; /* Icon width */
    height: 250px; /* Icon height */
}

</style>
    <div class="container">
        <span class="big-circle"></span>
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Choose an Option</h3>

                <div class="card-container">
                <a href="admin/contacts.php" class="card">
                    <img src="assets/images/contact-me.png" alt="Icon 1" class="icon">
                    <span>Contact Me</span>
                </a>
                <a href="testimonail-panel.php" class="card">
                    <img src="assets/images/testimonials.png" alt="Icon 2" class="icon">
                    <span>Testimonials</span>
                </a>
            </div>
        </div>
        
    </div><span class="right-circle"></span>
</body>
<script src="assets/js/app.js"></script>

</html>