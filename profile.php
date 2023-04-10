<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Connect to database
$db = new mysqli('localhost', 'root', '', 'sherehe');
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Retrieve user information from customer table
$username = $_SESSION['username'];
$sql = "SELECT customer_name, customer_email, customer_phone FROM customers WHERE username = '$username'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$name = $row['customer_name'];
$email = $row['customer_email'];
$phone = $row['customer_phone'];

// Retrieve booking history from checkout table
$sql = "SELECT date, period, events, price, Timestamp FROM checkout WHERE email = '$email'";
$result = $db->query($sql);
$booking_history = array();
while ($row = $result->fetch_assoc()) {
  $booking_history[] = $row;
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
<header>
    <nav>
      <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
      <ul>
        <li><a href="planning.php">Event Venues</a></li>
        <li><a href="login.php">Login/Register</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="about_us.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <main>
  <h1>Welcome, <?php echo $name; ?></h1>
  
  <h2>Account Information</h2>
  <p><strong>Name:</strong> <?php echo $name; ?></p>
  <p><strong>Email:</strong> <?php echo $email; ?></p>
  <p><strong>Phone:</strong> <?php echo $phone; ?></p>
  <form action="change-pass.php">
    <button type="submit">Change Password</button>
  </form>
  
  <h2>Booking History</h2>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>No. of Days</th>
        <th>Price</th>
        <th>Event Type</th>
        <th>Date and Time of Order</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($booking_history as $booking): ?>
        <tr>
          <td><?php echo $booking['date']; ?></td>
          <td><?php echo $booking['period']; ?></td>
          <td><?php echo $booking['price']; ?></td>
          <td><?php echo $booking['events']; ?></td>
          <td><?php echo $booking['Timestamp']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <form action="logout.php">
    <button type="submit">Logout</button>
  </form>
  </main>

  <footer>
    <ul class="info">
      <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
    </ul>
  </footer>


</body>
</html>
