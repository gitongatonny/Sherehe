<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sherehe - Event Planning</title>
    <link rel="stylesheet" href="planning.css">
  </head>
  <body>
<form method="post" action="planning.php">
    <label for="image">Event Image:</label>
    <input type="image" name="image" id="image" required>
    <br>
    <label for="venue">Venue:</label>
    <input type="text" name="venue" id="venue" required>
    <br>
    <label for="capacity">Capacity:</label>
    <input type="number" name="capacity" id="capacity" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" required>
    <br>
    <input type="submit" name="add_event" value="Add Event">
    <input type="submit" name="delete_event" value="Delete Event">
</form>

</body>
</html>