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
$sql = "SELECT * FROM events";

// Execute the query and get the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Venue: " . $row["venue"] . " - Capacity: " . $row["capacity"] . " - Status: " . $row["status"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
