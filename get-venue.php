<?php

// Connect to the database
$db = new mysqli("localhost", "root", "", "sherehe");

// Check for errors
if ($db->connect_errno) {
    die("Failed to connect to MySQL: " . $db->connect_error);
}

// Check that a venue ID was provided
if (!isset($_GET["id"])) {
    die("Venue ID not provided");
}

// Retrieve the venue information from the database
$id = $_GET["id"];
$result = $db->query("SELECT * FROM venues WHERE id = $id");

// Check for errors
if (!$result) {
    die("Error retrieving venue information: " . $db->error);
}

// Check that a venue was found
if ($result->num_rows == 0) {
    die("Venue not found");
}

// Retrieve the venue information as an associative array
$venue = $result->fetch_assoc();

// Return the venue information as a JSON object
header("Content-type: application/json");
echo json_encode($venue);

// Close the database connection
$db->close();

?>
