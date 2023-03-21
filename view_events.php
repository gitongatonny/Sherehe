<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dash.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="admin_dash.php">Dash</a></li>
                <li><a href="users_details.php">Users' List</a></li>
                <li><a href="view_events.php">View Events</a></li>
                <li><a href="view_feedback.php">Users' Feedback</a></li>
            </ul>
        </nav>
    </header>
<?php
// Start session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'sherehe');

// Check if connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Construct SQL query to retrieve all events from the events table
$sql = "SELECT * FROM venues";

// Execute the SQL query and get the result set
$result = mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);

// Check if any events were found
if (mysqli_num_rows($result) > 0) {
    // Display the list of events
    
    echo '<h1>Available Events</h1>';
    echo '<table>';
    echo '<tr><th>ID</th><th>Venue</th><th>Capacity</th><th>Price</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['venue'] . '</td>';
        echo '<td>' . $row['capacity'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    // If no events were found, display a message
    echo '<h1>No events found</h1>';
}

?>

<footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>
</html>
