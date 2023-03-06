<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Plan an Event</title>
    <link rel="stylesheet" type="text/css" href="planning.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">

</head>

<body>

<header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="planning.php">Event Planning</a></li>
                <li><a href="login.php">Login/Register</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="about_us.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <h1>Event Planning </h1>

       
    <div class="search-form">
        <input type="text" placeholder="Search by venue or capacity">
        <button type="button">Search</button>
    </div>
   
    <table>
        <thead>
            <tr>
                <th>Venue</th>
                <th>Capacity</th>
                <th>Status</th>
                <th>Book</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>White Rhino</td>
                <td>100</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <tr>
                <td>Elland Safari</td>
                <td>150</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <tr>
                <td>Peak Meadows</td>
                <td>80</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <tr>
                <td>Bantu Africa</td>
                <td>200</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <tr>
                <td>Da Venue</td>
                <td>750</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <tr>
                <td>Ark Lodge</td>
                <td>60</td>
                <td>Available</td>
                <td><button type="button">Book</button></td>
            </tr>
            <!-- Add more rows here -->
        </tbody>
    </table>
    </main>

    <script src="planning.js"></script>

    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>

</html>