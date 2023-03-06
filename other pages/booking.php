<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Booking - Event Planning Management System</title>
    <link rel="stylesheet" href="events.css" />
    <script src="script.js"></script>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="planning.php">Event Listings</a></li>
                <li><a href="contact_about.html">Contact Us/About Us</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>
    <div class="header1">
        <h1>Booking</h1>
    </div>
    <main>
        <div class="booking-container">
            <h2>Event Details</h2>
            <p id="event-name"></p>
            <p id="event-venue"></p>
            <p id="event-date"></p>
            <p id="event-time"></p>
            <p id="event-price"></p>
            <form id="booking-form">
                <label for="tickets">Number of tickets:</label>
                <button type="button" onclick="decrement()">-</button>
                <input type="number" id="tickets" name="tickets" min="1" max="10" value="1" />
                <button type="button" onclick="increment()">+</button>
                <br />
                <label for="mpesa-number">M-PESA number:</label>
                <input type="tel" id="mpesa-number" name="mpesa-number" required />
                <br />
                <button type="button" onclick="pay()">Pay</button>
            </form>
            <p id="booking-status"></p>
            <button id="download-btn" style="display: none">Download Ticket</button>
        </div>
    </main>
    <footer>
        <ul class="social-media">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </footer>
</body>

</html>