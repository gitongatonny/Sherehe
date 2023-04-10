<?php
// Start session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'sherehe');

// Check if connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get record ID and new values from POST data
    $id = $_POST['id'];
    $newVenue = $_POST['newVenue'];
    $newCapacity = $_POST['newCapacity'];
    $newPrice = $_POST['newPrice'];
    $newRating = $_POST['newRating'];
    $newDescription = $_POST['newDescription'];
    $newType = $_POST['newType'];
    $newImage = $_POST['newImage'];

    // Construct SQL query to update record in database
    $sql = "UPDATE venues SET venue='$newVenue', capacity=$newCapacity, price=$newPrice, rating=$newRating, amenities='$newDescription', type='$newType', image='$newImage' WHERE id=$id";

    // Execute the SQL query and check if it was successful
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = 'Record updated successfully';
        header('Location: view_events.php');
        exit;
    } else {
        $_SESSION['error'] = 'Error updating record: ' . mysqli_error($conn);
        header('Location: view_events.php');
        exit;
    }
}

// Check if record ID was provided in URL parameter
if (!isset($_GET['id'])) {
    $_SESSION['error'] = 'Record not found';
    header('Location: view_events.php');
    exit;
}

// Get record ID from URL parameter
$id = $_GET['id'];

// Construct SQL query to retrieve record from database
$sql = "SELECT * FROM venues WHERE id=$id";

// Execute the SQL query and get the result set
$result = mysqli_query($conn, $sql);

// Check if record was found
if (mysqli_num_rows($result) == 0) {
    $_SESSION['error'] = 'Record not found';
    header('Location: view_events.php');
    exit;
}

// Get record data from result set
$row = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Venue</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="edit_venue.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
</head>
</head>
<body>
<header>
        <nav>
            <a href="./admin_dash.php"><img src="../images/logo.png" alt="Sherehe logo"></a>
            <ul>
                <li><a href="admin_dash.php">Dash</a></li>
                <li><a href="insertion.php">Create Events</a></li>
                <li><a href="view_events.php">Edit Events</a></li>
                <li><a href="users_details.php">Users' List</a></li>
                <li><a href="view_feedback.php">Users' Feedback</a></li>
            </ul>
        </nav>
    </header>

    <h1>Edit Venue</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <div><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="newVenue">Venue Name:</label>
        <input type="text" name="newVenue" value="<?php echo $row['venue']; ?>"><br>
        <label for="newCapacity">Capacity:</label>
        <input type="number" name="newCapacity" value="<?php echo $row['capacity']; ?>"><br>
        <label for="newPrice">Price:</label>
        <input type="number" name="newPrice" value="<?php echo $row['price']; ?>"><br>
        <label for="newRating">Rating:</label>
        <input type="number" name="newRating" value="<?php echo $row['rating']; ?>"><br>
        <label for="newDescription">Description:</label>
        <input type="text" name="newDescription" value="<?php echo $row['amenities']; ?>"><br>
        <label for="newType">Type:</label>
        <input type="text" name="newType" value="<?php echo $row['type']; ?>"><br>
        <label for="newImage">Image:</label>
        <input type="text" name="newImage" value="<?php echo $row['image']; ?>"><br>
        <input type="submit" value="Update">
    </form>

    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>

</html>
