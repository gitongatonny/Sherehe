<html>
    <head>

        <meta charset="UTF-8">
        <title>Thank You for your Feeback</title>
        <link rel="icon" href="images/logo.png" type="image/x-icon">

    </head>
</html>

<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherehe";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO feedback (name, email, topic, message, date) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param("ssss", $name, $email, $topic, $message);
if ($stmt->execute()) {
    echo "Feedback submitted successfully";

} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
header("Location: index.php");

?>
