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

  // Get form data
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO customers (customer_name, username, password, customer_email, customer_phone) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $name, $username, $password, $email, $phone);

  // Execute statement
  if ($stmt->execute()) {
    echo "Your personal account has been successfully created";
    header("Location: planning.php");
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
?>
