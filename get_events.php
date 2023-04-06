<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherehe";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events data
$sql = "SELECT * FROM venues";
$result = $conn->query($sql);

$events = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $event = array(
            'id' => $row['id'],
            'venue' => $row['venue'],
            'rating' => $row['rating'],
            'capacity' => $row['capacity'],
            'amenities' => $row['amenities'],
            'price' => $row['price'],
            'image' => $row['image'] // Add image URL to the event object
        );
        array_push($events, $event);
    }
}

// Return events data as JSON
header('Content-Type: application/json');
echo json_encode($events);

// Close database connection
$conn->close();
