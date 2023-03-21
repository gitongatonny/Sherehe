<?php
// Start session
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the event details to update
    $eventId = $_POST['event-id'];
    $venue = $_POST['venue'];
    $capacity = $_POST['capacity'];
    $price = $_POST['price'];

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'sherehe');

    // Check if connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Construct SQL query to update event details in the events table
    $sql = "UPDATE venues SET venue = '$venue', capacity = '$capacity', price = '$price' WHERE id = $eventId";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_affected_rows($conn) > 0) {
        // If update was successful and affected rows > 0, set a session variable with a success message
        $_SESSION['success'] = 'Event details were successfully updated';
        echo "<script>alert('{$_SESSION['success']}'); window.location.href = 'view_events.php';</script>";
    } else {
        // If update failed or affected rows = 0, set a session variable with an error message
        $_SESSION['error'] = 'Event update failed. Please try again';
        echo "<script>alert('{$_SESSION['error']}'); window.location.href = 'admin_dash.php';</script>";
    }
    
    // Close the database connection
    mysqli_close($conn);
    
} else {
    // If form was not submitted, redirect back to the admin dashboard
    header('Location: admin_dash.php');
    exit;
}
