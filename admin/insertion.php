<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="insertion.css">
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

    <div class="admin-form">
        <h2>Create Event</h2>
        <form method="post" action="create_event.php">
            <label for="venue">Venue:</label>
            <input type="text" name="venue" id="venue" required>
            <br>
            <label for="rating">Rating:</label>
            <input type="decimal" name="rating" id="rating" required>
            <br>
            <br>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" required>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <br>
            <label for="amenities">Description:</label>
            <textarea name="amenities" id="description" oninput="autoSizeTextArea()" required></textarea>
            <br>
            <label for="image">Image Link:</label>
            <input type="text" name="image" id="image">
            <br>
            <input type="submit" name="add_event" value="Add Event">
        </form>

    </div>


    <footer>
        <ul class="info">
            <li style="text-align:center;">Event Planning System <br> ©2023</a></li>
        </ul>
    </footer>

    <script>
        function autoSizeTextArea() {
            const descriptionTextarea = document.getElementById("description");
            descriptionTextarea.style.height = "auto";
            descriptionTextarea.style.width = "auto";
            const width = Math.min(descriptionTextarea.scrollWidth, 500);
            descriptionTextarea.style.width = width + "px";
            descriptionTextarea.style.height = (descriptionTextarea.scrollHeight) + "px";
        }
    </script>

</body>

</html>