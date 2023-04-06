<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="about_us.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
<header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <?php 
                    // Check if the user is logged in
                    if(isset($_SESSION['username'])) { 
                ?>
                        <li><a href="planning.php">Event Venues</a></li>
                        <li><a href="profile.php">Profile</a></li>
                <?php 
                    } 
                    else {
                ?>
                        <li><a href="login.php">Login/Register</a></li>
                <?php 
                    }
                ?>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="header">
        <img src="images/about.jpg" alt="events">
        <div class="heading">
            <h1>ABOUT US</h1>
        </div>
    </div>
    <div class="image-section">
        <img src="images/event1.jpg" alt="events">
    </div>
    <div class="container">
        <div class="description">
            <h3>Event planning system</h3>
            <p><i>Welcome to our website..Our mission is to exceed your expectations and deliver exceptional value.</i></p>
            <p><i>We founded our system with a simple goal :to make a positive impact on our society.We strive to achieve this by prioritizing quality and sustainability so as to display wonderful events which are legit and lively .Our team is made up of passionate and hardworking individuals who try to make the system to function daily so as to provide services to our customers.We also try to provide high quality products and services to our customers.Thank you for joining us on this journey and choosing us.
                </i>
            </p>
        </div>
    </div>

    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>

</body>

</html>