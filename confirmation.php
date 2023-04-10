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

        <?php
        // Check if user is logged in
        session_start();
        if (isset($_SESSION['username'])) {
            // Connect to database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sherehe";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve event and date from checkout table
            $sql = "SELECT events, date FROM checkout";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data of the first row
                $row = mysqli_fetch_assoc($result);

                // Generate invitation card
                echo '<button id="download-button" onclick="generateInvitationCard(\'' . $_SESSION['username'] . '\', \'' . $row['events'] . '\', \'' . $row['date'] . '\')">Download Invitation Card</button>';
            } else {
                echo "0 results";
            }

            //Retrieve venue that was booked from venues table using the bookVenue(${event.id}) of the Book button

            mysqli_close($conn);
        } else {
            // User not logged in, display error message
            echo '<p>You must be logged in to download the invitation card.</p>';
        }
        ?>


        <br>
        <br>
        <button id="profile-button"><a href="profile.php">Go To Your Profile</a></button>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script>
            function generateInvitationCard(username, events, date) {
                // Create new jsPDF object
                var pdf = new jsPDF();

                // Set font
                pdf.setFont('helvetica', 'bold');
                pdf.setFontSize(16);

                // Set styles
                const cardWidth = 180;
                const cardHeight = 120;
                const borderRadius = 10;
                const backgroundColor = '#f2f2f2';
                const borderColor = '#333';
                const padding = 10;

                // Draw card background
                pdf.setFillColor(backgroundColor);
                pdf.setDrawColor(borderColor);
                pdf.roundedRect(15, 20, cardWidth, cardHeight, borderRadius, borderRadius, 'FD');

                // Write invitation text
                pdf.setTextColor('#333');
                pdf.text(`Dear ${username},\n\nYou are cordially invited to host the following event:\n\n- ${events}\n\n- Date: ${date}\n\nPlease RSVP by responding to this email(admin@sherehe.com)\n\n or contacting the event organizer directly.\n\nWe look forward to seeing you there!`, 25, 40);

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