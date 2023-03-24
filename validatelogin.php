<html>

<head>

    <meta charset="UTF-8">
    <title>You have successfully logged in</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">

</head>

</html>
<?php
// Start session
session_start();

// Check if form has been submitted with both fields filled out
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Set database credentials
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "sherehe";

    // Create connection to the database using the mysqli extension
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check if connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Store values submitted through the form in variables and sanitize them
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Create a SQL query that selects all rows from the "customers" table where the username and password match the values submitted through the form
    $sql = "SELECT * FROM customers WHERE Username='$username' AND Password='$password'";

    // Execute the SQL query and store the result in a variable
    $result = mysqli_query($conn, $sql);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
        // If the username and password match an existing user in the database, set session variables accordingly
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Check if the submitted username and password are 'admin' and 'admin123', respectively
        if ($username === 'admin' && $password === 'admin123') {
            // If so, redirect the user to the admin dashboard page
            header("Location: admin/admin_dash.php");
            exit(); // Exit the script to prevent further execution
        } else {
            // If not, redirect the user to the event listings page
            header("Location: planning.php");
            exit(); // Exit the script to prevent further execution
        }
    } else {
        // If no match is found, output an error message informing the user that the submitted username or password is invalid
        echo "Invalid username or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>