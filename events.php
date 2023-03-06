<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venues</title>
  <link rel="stylesheet" href="events.css">
</head>

<body>
  <header>
    <div class="container">
      <h1>Venue Locations in Nyeri, Kenya</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <?php
      // Connect to the database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "sherehe";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Get venues from the database
      $sql = "SELECT * FROM venues";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="venue">
            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
            <h2><?php echo $row['name']; ?></h2>
            <p><strong>Capacity:</strong> <?php echo $row['capacity']; ?></p>
            <p><strong>Price per day:</strong> KSH <?php echo $row['price']; ?></p>
            <p><strong>Rating:</strong> <?php echo $row['rating']; ?> stars</p>
            <a href="booking.php?id=<?php echo $row['id']; ?>">Book Now</a>
          </div>
        <?php
        }
      } else {
        echo "No venues found";
      }

      mysqli_close($conn);
      ?>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2023 Venue Locations in Nyeri, Kenya. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>
