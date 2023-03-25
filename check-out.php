<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Check Out</title>
    <link rel="stylesheet" href="check-out.css">
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

    <main>
        <div class="container">
            <?php
            // Retrieve venue information
            if (isset($_GET['venue']) && !empty($_GET['venue'])) {
                $venue = $_GET['venue'];
            } else {
                $venue = "";
            }

            if (isset($_GET['capacity']) && !empty($_GET['capacity'])) {
                $capacity = $_GET['capacity'];
            } else {
                $capacity = "";
            }

            if (isset($_GET['price']) && !empty($_GET['price'])) {
                $price = $_GET['price'];
            } else {
                $price = "";
            }



            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Retrieve form data
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                $period = $_POST['period'];

                // Update event availability in planning.php
                $fp = fopen('planning.php', 'r');
                $data = fread($fp, filesize('planning.php'));
                fclose($fp);

                $data = str_replace($venue . '-available', $venue . '-unavailable', $data);

                $fp = fopen('planning.php', 'w');
                fwrite($fp, $data);
                fclose($fp);

                // Calculate final price based on period
                $final_price = floatval($price) * floatval($period);

                // Save checkout information to database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sherehe";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Create table if it does not exist
                $sql = "CREATE TABLE IF NOT EXISTS checkout (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            phone VARCHAR(15) NOT NULL,
            email VARCHAR(50) NOT NULL,
            date DATE NOT NULL,
            period INT(2) NOT NULL,
            price FLOAT NOT NULL
        )";

                if ($conn->query($sql) === FALSE) {
                    echo "Error creating table: " . $conn->error;
                }

                // Insert data into table
                $sql = "INSERT INTO checkout (name, phone, email, date, period, price)
        VALUES ('$name', '$phone', '$email', '$date', $period, $final_price)";

                if ($conn->query($sql) === FALSE) {
                    echo "Error inserting data: " . $conn->error;
                }

                $conn->close();
            }
            ?>

            <h1>Check Out</h1>
            <h2><?php echo $venue; ?></h2>
            <p>Capacity: <?php echo $capacity; ?> guests</p>
            <p>Price: KSHS <?php echo $price; ?></p>

            <?php
            session_start();

            if (!isset($_SESSION['username'])) {
                echo "Please login to access this page";
                header("Location: login.php");
                exit();
            }

            // retrieve customer data from database
            $db_host = 'localhost';
            $db_user = 'root';
            $db_pass = '';
            $db_name = 'sherehe';

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if (!$conn) {
                die('Connection failed: ' . mysqli_connect_error());
            }

            $username = $_SESSION['username'];

            $query = "SELECT customer_name, customer_email, customer_phone FROM customers WHERE username='$username'";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['customer_name'];
                $email = $row['customer_email'];
                $phone = $row['customer_phone'];
            } else {
                echo "No data found for the logged in user";
                exit();
            }

            mysqli_close($conn);
            ?>
            <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
                <form method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name ?>" required><br>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $phone ?>" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email ?>" required><br>

                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required><br>

                    <label for="period">Period:</label>
                    <select id="period" name="period" required><br>
                        <option value="1">1 day (default)</option>
                        <option value="2">2 days</option>
                        <option value="3">3 days</option>
                        <option value="4">4 days</option>
                        <option value="5">5 days</option>
                        <option value="6">6 days</option>
                        <option value="7">7 days</option>
                    </select>

                    <button type="submit">Book Now</button><br>
                </form>

            <?php } else { ?>
                <h3>Booking Summary</h3>
                <table class="booking-summary">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Period</th>
                        <th>Final Price</th>
                    </tr>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $period; ?> day(s)</td>
                        <td>KSHS <?php echo $final_price; ?></td>
                    </tr>
                </table>

                <h3>Payment Method</h3>
                <p>Pay using MPESA</p>
                <a href="confirmation.php"><button id="pay-button">PAY</button></a>

            <?php } ?>
        </div>

    </main>


    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a>
            </li>
        </ul>
    </footer>


    <script src="check-out.js"></script>
</body>