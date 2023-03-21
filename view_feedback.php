<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users' Feedback</title>
    <link rel="stylesheet" href="view_feedback.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="admin_dash.php">Dash</a></li>
                <li><a href="users_details">Users' List</a></li>
                <li><a href="#">View Events</a></li>
                <li><a href="view_feedback.php">Users' Feedback</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <caption>Users' Feedback</caption>
            <thead>
                <tr>
                    <th>Feedback ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
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

                // Select all feedback from the "feedback" table
                $sql = "SELECT * FROM feedback";
                $result = mysqli_query($conn, $sql);

                // Output each row of feedback as a table row
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["Feedback_ID"] . "</td><td>" . $row["date"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
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
   
