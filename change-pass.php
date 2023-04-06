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
$stmt = $db->prepare("SELECT customer_name, customer_email, customer_phone, password as password_hash FROM customers WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
  die("User not found");
}

$stmt->bind_result($name, $email, $phone, $password_hash);
$stmt->fetch();

$error_message = "";

// Handle password change form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verify user's current password
  $current_password = $_POST['current_password'];

  if (password_verify($current_password, $password_hash) || $current_password === $password_hash) {
    // User's current password is correct, so update their password
    $new_password = $_POST['new_password'];
    $stmt = $db->prepare("UPDATE customers SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $new_password, $username);
    if ($stmt->execute()) {
      // Password updated successfully, redirect to profile.php
      header("Location: profile.php");
      exit();
    } else {
      $error_message = "Error updating password: " . $stmt->error;
    }
  } else {
    // User's current password is incorrect, display error message
    $error_message = "Incorrect current password!";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Change Password</title>
  <link rel="stylesheet" href="change-pass.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

  <header>
    <nav>
      <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
      <ul>
        <li><a href="planning.php">Event Planning</a></li>
        <li><a href="login.php">Login/Register</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="about_us.php">About Us</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Change Password</h1>

    <?php if ($error_message !== "") : ?>
      <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="post">
      <label for="current_password">Current Password:</label>
      <input type="password" id="current_password" name="current_password" required>
      <br>
      <label for="new_password">New Password:</label>
      <input type="password" id="new_password" name="new_password" required>
      <br>
      <button type="submit">Save Changes</button>
    </form>
  </main>
  <footer>
    <ul class="info">
      <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
    </ul>
  </footer>

</body>

</html>