<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
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

    <div class="container">
        <h3>Success!</h3>
        <p>Your booking has been confirmed.</p>

        <!-- Generate invitation card here -->
        <button id="download-button" onclick="generateInvitationCard()">Download Invitation Card</button>
        <br>
        <button id="download-button"><a href="profile.php">Go To Your Profile</a></button>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script>
            function generateInvitationCard() {
                // Create new jsPDF object
                var pdf = new jsPDF();

                // Set font
                pdf.setFont('helvetica', 'bold');
                pdf.setFontSize(20);

                // Write invitation text
                pdf.text('You are cordially invited to our party!', 15, 20);

                // Save PDF file
                pdf.save('invitation_card.pdf');
            }
        </script>
    </div>

    <footer>
        <ul class="info">
            <li>Event Planning System <br> ©2023</li>
        </ul>
    </footer>
</body>

</html>