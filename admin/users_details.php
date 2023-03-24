<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users' Feedback | Admin Dash</title>
    <link rel="stylesheet" href="view_feedback.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <a href="../index.php"><img src="../images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="admin_dash.php">Dash</a></li>
                <li><a href="insertion.php">Create Events</a></li>
                <li><a href="view_events.php">Edit Events</a></li>
                <li><a href="users_details.php">Users' List</a></li>
                <li><a href="view_feedback.php">Users' Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <caption>Users' Details</caption>
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sherehe";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Select all feedback from the "customer" table
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($conn, $sql);

                // Output each row of feedback as a table row
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["customer_name"] . "</td><td>" . $row["customer_email"] . "</td><td>" . $row["customer_phone"] . "</td></tr>";
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <ul class="info">
            <li>Event Planning System <br> ©2023</li>
        </ul>
    </footer>

</body>

</html>