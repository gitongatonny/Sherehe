<!DOCTYPE html>
<html>
<head>
	<title>Ticket History</title>
	<link rel="stylesheet" type="text/css" href="customer_dash.css">
	<link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
	<header>
        <nav>
            <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="planning.php">Event Listings</a></li>
                <li><a href="contact_about.html">Contact Us/About Us</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
	
	<section class="ticket-history">
	<div class="container">
		<h2>Ticket History</h2>
		<div class="customer-info">
			<h3>This ticket history is specific to:</h3>
			<?php
				// Create database connection
				$conn = mysqli_connect("localhost", "root", "", "sherehe");

				// Check if connection was successful
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Select data from the table
				$sql = "SELECT customer_name, customer_email, customer_phone FROM ticket_history WHERE customer_id = 1 LIMIT 1";
				$result = mysqli_query($conn, $sql);

				// Check if data was found
				if (mysqli_num_rows($result) > 0) {
					// Output customer info
					$row = mysqli_fetch_assoc($result);
					echo "<p>Name: " . $row["customer_name"] . "</p>";
					echo "<p>Email: " . $row["customer_email"] . "</p>";
					echo "<p>Phone: " . $row["customer_phone"] . "</p>";
				} else {
					// Output if no data was found
					echo "<p>No customer information found</p>";
				}

				// Close the MySQL connection
				mysqli_close($conn);
			?>
		</div>
		<table>
			<thead>
				<tr>
					<th>Event Name</th>
					<th>Event Date</th>
					<th>Ticket Price</th>
					<th>No. of Tickets</th>
				</tr>
			</thead>
			<tbody>
			<?php
				// Create database connection
				$conn = mysqli_connect("localhost", "root", "", "sherehe");

				// Check if connection was successful
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Select data from the table
				$sql = "SELECT * FROM ticket_history WHERE customer_id = 1";
				$result = mysqli_query($conn, $sql);

				// Check if data was found
				if (mysqli_num_rows($result) > 0) {
					// Output each row of data as a table row
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["event_name"] . "</td>";
						echo "<td>" . $row["event_date"] . "</td>";
						echo "<td>" . $row["ticket_price"] . "</td>";
						echo "<td>" . $row["no_of_tickets"] . "</td>";
						echo "</tr>";
					}
				} else {
					// Output if no data was found
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the MySQL connection
				mysqli_close($conn);
			?>
			</tbody>
		</table>
	</div>
</section>


    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>

</body>
</html>
