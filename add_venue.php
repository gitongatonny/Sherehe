<!DOCTYPE html>
<html>
<head>
	<title>Add Location</title>
	<link rel="stylesheet" type="text/css" href="add_venue.css">
</head>
<body>
	<header>
		<h1>Add Location</h1>
	</header>

	<div class="container">
		<form method="post" action="process.php" enctype="multipart/form-data">
			<label for="name">Name:</label>
			<input type="text" name="name" required>

			<label for="description">Description:</label>
			<textarea name="description" required></textarea>

			<label for="capacity">Capacity:</label>
			<input type="number" name="capacity" required>

			<label for="cost">Cost:</label>
			<input type="text" name="cost" required>

			<label for="image">Image:</label>
			<input type="file" name="image" required>

			<input type="submit" name="submit" value="Add Location">
		</form>
	</div>

</body>
</html>
