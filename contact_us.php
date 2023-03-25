<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact_us.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">

</head>

<body>

    <header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="planning.php">Event Planning</a></li>
                <li><a href="login.php">Login/Register</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="header">
        <div class="container">
            <div class="heading">
                <h1>Submit your Feedback</h1>
                <form action="feedback.php" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" id="name" name="name" required><br><br>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" id="email" name="email" required><br><br>
                    </div>
                    <div class="form-group">
                        <label>Topic:</label>
                        <input type="text" id="topic" name="topic" required><br><br>
                    </div>
                    <div class="form-group">
                        <label>Message:</label><br>
                        <textarea id="message" name="message" rows="5" required>
              </textarea><br><br>
                    </div>
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>

    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>

</body>

</html>