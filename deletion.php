<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Event</title>
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
    
    <h1>Delete Event</h1>
    <form action="delete_event.php" method="POST">
        <label for="event-id">Enter the ID of the event to be deleted:</label>
        <input type="text" name="event-id" id="event-id" required>
        <input type="submit" value="Delete Event">
    </form>
</body>
</html>
