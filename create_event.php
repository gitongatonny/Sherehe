<?php
// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'sherehe');

// check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// check if form submitted and form values are set
if (isset($_POST['add_event']) && isset($_POST['venue']) && isset($_POST['capacity']) && isset($_POST['price'])) {
    // get form values
    $venue = $_POST['venue'];
    $capacity = $_POST['capacity'];
    $price = $_POST['price'];

    // prepare SQL statement
    $stmt = $mysqli->prepare("INSERT INTO venues (venue, capacity, price) VALUES (?, ?, ?)");

    // bind parameters
    $stmt->bind_param("sii", $venue, $capacity, $price);

    // execute statement
    if ($stmt->execute()) {
        // redirect back to admin dashboard
        header("Location: view_events.php");
        exit();
    } else {
        // display error message
        echo "Error: " . $stmt->error;
    }

    // close statement
    $stmt->close();
}

// close database connection
$mysqli->close();
