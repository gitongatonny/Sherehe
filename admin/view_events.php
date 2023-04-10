<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>View & Edit Events | Admin Dash</title>
    <link rel="stylesheet" href="view_events.css">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
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
    <?php
    // Start session
    session_start();

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'sherehe');

    // Check if connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Check if delete action was requested
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        // Get record ID from POST data
        $id = $_POST['id'];

        // Construct SQL query to delete record from database
        $sql = "DELETE FROM venues WHERE id=$id";

        // Execute the SQL query and check if it was successful
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
            exit;
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
            exit;
        }
    }

    // Check if update action was requested
    if (isset($_POST['action']) && $_POST['action'] == 'update') {
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
            echo "Record updated successfully";
            exit;
        } else {
            echo "Error updating record: " . mysqli_error($conn);
            exit;
        }
    }

    // Construct SQL query to retrieve all venues from the venues table 
    $sql = "SELECT * FROM venues";

    // Execute the SQL query and get the result set 
    $result = mysqli_query($conn, $sql);

    // Close the database connection 
    mysqli_close($conn);

    // Check if any venues were found 
    if (mysqli_num_rows($result) > 0) {
        // Display the list of venues
        echo '<h1>Edit Venues</h1>';
        echo '<table>';
        echo '<tr><th>ID</th><th>Venue</th><th>Capacity</th><th>Price</th><th>Rating</th><th>Description</th><th>Type</th><th>Image</th><th></th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['venue'] . '</td>';
            echo '<td>' . $row['capacity'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['rating'] . '</td>';
            echo '<td>' . $row['amenities'] . '</td>';
            echo '<td>' . $row['type'] . '</td>';
            echo '<td>' . $row['image'] . '</td>';

            // Add edit button with popup form for editing values and AJAX request for updating record in database 
            echo "<td><a href='edit_venue.php?id=" . $row['id'] . "'>Edit</a></td>";


            // Add delete button with AJAX request for deleting record from database 
            echo "<td><button onclick=\"deleteRecord(" . $row['id'] . ")\">Delete</button></td>";
            echo '</tr>';
        }
        echo '</table>';
    } else { // If no events were found, display a message  
        echo '<h1>No events found</h1>';
    }

    ?>


    <!--JS code for handling delete and edit actions-->
    <script>
        function deleteRecord(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    alert('Event deletion is successful!');
                    location.reload();
                };
                xhr.send('action=delete&id=' + id);
            }
        }

        
    </script>
    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>
</body>

</html>