<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sherehe</title>
    <link rel="stylesheet" href="index.css">
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
    <main>
        <h1>Welcome to Sherehe</h1>
        <p>Find the perfect event suited for you.</p>
        <div class="btn-container">
            <?php 
                // Check if the user is logged in
                if(isset($_SESSION['username'])) { 
            ?>
                    <a href="planning.php" id="btn">Event Venues</a>
            <?php 
                } 
                else {
            ?>
                    <a href="login.php" id="btn">Signup/Login</a>
            <?php 
                }
            ?>
        </div>
    </main>
    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>
</html>
