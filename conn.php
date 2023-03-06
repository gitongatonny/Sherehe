<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherehe";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
