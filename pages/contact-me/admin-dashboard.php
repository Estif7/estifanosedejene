<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Dashboard</title>
</head>
<body>
<style>
body, html {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.title {
    margin-bottom: 20px; /* Space between title and cards */
    font-size: 24px; /* Title font size */
}

.card-container {
    display: flex;
    gap: 20px; /* Space between cards */
}

.card {
    width: 100px;
    height: 100px;
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline from links */
    border-radius: 10px; /* Rounded corners */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
}

.card:hover {
    background-color: #45a049; /* Darker green on hover */
}

.icon {
    width: 40px; /* Icon width */
    height: 40px; /* Icon height */
    background-color:rgb(63, 83, 200); /* Green background */
}

</style>
    <h1 class="title">Choose an Option</h1>
    <div class="card-container">
        <a href="contact-me/admin/index.php" class="card">
            <img src="assets/images/contact-me.png" alt="Icon 1" class="icon">
            <span>Card 1</span>
        </a>
        <a href="testimonail-panel.php" class="card">
            <img src="assets/images/testimonials.png" alt="Icon 2" class="icon">
            <span>Card 2</span>
        </a>
    </div>
</body>
</html>