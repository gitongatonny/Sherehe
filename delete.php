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
$sql = "DELETE FROM events WHERE venue = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("s", $venue);

// Set the parameter and execute
$venue = "Hotel B";
$stmt->execute();

echo "Event deleted successfull";

?>

