<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sherehe - Event Planning</title>
    <link rel="stylesheet" href="planning.css">
    <script src="planning.js"></script>
    <script src="get_events.js"></script>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="planning.php">Event Venues</a></li>
                <li><a href="login.php">Login/Register</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Venue Options</h1>
        <div class="card-container">

        </div>

        <form method="GET" action="check-out.php">
            <input type="hidden" name="venue" value="<?php echo $venue_name; ?>">
            <!-- other form fields -->
        </form>

    </main>
    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a>
            </li>
        </ul>
    </footer>
</body>

</html>