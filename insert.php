<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherehe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO events (venue, capacity, status) VALUES (?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("sis", $venue, $capacity, $status);

// Set the parameters and execute
$venue = "Hotel D";
$capacity = 200;
$status = "Available";
$stmt->execute();

echo "New event created successfully";

$stmt->close();
$conn->close();
?>
