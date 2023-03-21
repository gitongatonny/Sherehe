<?php
// Start session
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the event ID to delete
    $eventId = $_POST['event-id'];

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'sherehe');

    // Check if connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Construct SQL query to delete event from the events table
    $sql = "DELETE FROM venues WHERE id = $eventId";

    // Execute the SQL query
    mysqli_query($conn, $sql);

    // Check if any rows were affected by the query
    if (mysqli_affected_rows($conn) > 0) {
        // If deletion was successful, set a session variable with a success message
        $_SESSION['success'] = 'Event was successfully deleted';
    } else {
        // If deletion failed, set a session variable with an error message
        $_SESSION['error'] = 'Event deletion failed. Please try again';
    }
    
    // Close the database connection
    mysqli_close($conn);
} 

// Redirect back to the admin dashboard with a message if one exists
if (isset($_SESSION['success'])) {
    echo "<script>alert('{$_SESSION['success']}'); window.location.href = 'admin_dash.php';</script>";
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
    echo "<script>alert('{$_SESSION['error']}'); window.location.href = 'admin_dash.php';</script>";
    unset($_SESSION['error']);
} else {
    // If form was not submitted, redirect back to the admin dashboard
    header('Location: admin_dash.php');
    exit;
}
?>