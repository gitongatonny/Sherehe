<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log/Registration</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
  <header>
    <nav>
      <a href="index.php"><img src="images/logo.png" alt="Sherehe logo"></a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="planning.php">Event Planning</a></li>
        <li><a href="login.php">Login/Register</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="about_us.php">About Us</a></li>
      </ul>
    </nav>
  </header>

  <!-- partial:index.partial.html -->
  <div class="login-page">
    <div class="form">
      <form class="register-form" method="post" action="register.php">
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <input type="text" name="email" placeholder="email address"/>
        <input type="text" name="phone" placeholder="phone number"/>
        <button type="submit" name="submit">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" action="validatelogin.php" method="post">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>

  <footer>
    <ul class="info">
      <li style="text-align:center;">Event Planning System<br> ©2023</a></li>
    </ul>
  </footer>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="login.js"></script>

</body>
</html>
