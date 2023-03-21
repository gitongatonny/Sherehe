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
  
    <div class="admin-form">
        <h2>Create Event</h2>
        <form method="post" target="_blank" action="create_event.php">
            <label for="venue">Venue:</label>
            <input type="text" name="venue" id="venue" required>
            <br>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" required>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <br>
            <input type="submit" name="add_event" value="Add Event">
        </form>
    </div>
    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>
</html>
