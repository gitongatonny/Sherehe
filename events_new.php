<!DOCTYPE html>
<html>
<head>
	<title>Venue Locations in Nyeri</title>
	<link rel="stylesheet" type="text/css" href="events1.css">
</head>
<body>
	<div class="header">
		<h1>Venue Locations in Nyeri</h1>
	</div>
	<div class="container">
		<?php
			// connect to the database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "sherehe";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// retrieve venue locations from the database
			$sql = "SELECT * FROM venues";
			$result = mysqli_query($conn, $sql);

			// display venue locations in 2 columns
			echo "<div class='row'>";
			$i = 0;
			while ($row = mysqli_fetch_assoc($result)) {
				if ($i % 2 == 0) {
					echo "</div><div class='row'>";
				}
				echo "<div class='column'>";
				echo "<div class='card'>";
				echo "<img src='data:image/jpeg;base64,".base64_encode($row['image'])."' class='venue-image'>";
				echo "<div class='venue-info'>";
				echo "<h2>".$row['name']."</h2>";
				echo "<p>Capacity: ".$row['capacity']."</p>";
				echo "<p>Cost: ".$row['price']."</p>";
				echo "<p>Rating: ".$row['rating']."</p>";
				echo "<button class='book-button'>Book Now</button>";
				echo "</div></div></div>";
				$i++;
			}
			echo "</div>";

			// close connection
			mysqli_close($conn);
		?>
	</div>
</body>
</html>
