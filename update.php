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
$sql = "UPDATE events SET status = ? WHERE venue = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("ss", $status, $venue);

// Set the parameters and execute
$status = "Booked";
$venue = "Hotel B";
$stmt->execute();

echo "Event updated successfully";

$stmt->close();
$conn->close();
?>
