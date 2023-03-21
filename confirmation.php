<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
</head>
<body>
    <div class="container">
        <h3>Success!</h3>
        <p>Your booking has been confirmed.</p>

        <!-- Generate invitation card here -->
        <button id="download-button" onclick="generateInvitationCard()">Download Invitation Card</button>

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
</body>
</html>
