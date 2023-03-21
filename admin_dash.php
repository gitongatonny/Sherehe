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

    <main>
	<h1 class="admin-title">Admin Dashboard</h1>
	<div class="admin-buttons">
		<a class="admin-button" href="insertion.php">Create Events</a>
        <a class="admin-button" href="view_events.php">View Events</a>
        <a class="admin-button" href="update.php">Update Events</a>
        <a class="admin-button" href="deletion.php">Delete Events</a>
        <a class="admin-button" href="users_details.php">View List of Users</a>
		<a class="admin-button" href="view_feedback.php">View Users' Feedback</a>
	</div>
    </main>

    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>

</body>

</html>
