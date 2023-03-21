<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Update Event</title>
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

	<h1 class="admin-title">Update Event</h1>
	<div class="admin-form">
		<form method="POST" action="update_events.php">
			<label for="event-id">Event ID:</label>
			<input type="number" id="event-id" name="event-id" required><br>

			<label for="venue">Venue:</label>
			<input type="text" id="venue" name="venue" required><br>

			<label for="capacity">Capacity:</label>
			<input type="number" id="capacity" name="capacity" required><br>

			<label for="price">Price:</label>
			<input type="number" id="price" name="price" required><br>

			<input type="submit" value="Update">
		</form>
	</div>

	<footer>
		<ul class="info">
			<li style="text-align:center;">Event Planning System <br> ©2023</li>
		</ul>
	</footer>

</body>
</html>
