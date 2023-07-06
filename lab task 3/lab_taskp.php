<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <div class="container">
    <h2>Login Form</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label>
      </div>
      <div class="form-group">
        <input type="submit" class="btn" value="Login">
        <input type="reset" class="btn btn-secondary" value="Forget Password">
      </div>
    </form>
  </div>

  <?php
  // Validate user inputs
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validation rules
    $usernamePattern = '/^[A-Za-z0-9._-]{2,}$/';
    $passwordPattern = '/^.*[@#$%].{7,}$/';

    $errors = [];

    // Validate username
    if (!preg_match($usernamePattern, $username)) {
      $errors["username"] = "User Name can contain alphanumeric characters, period, dash, or underscore only and must contain at least two (2) characters";
    }

    // Validate password
    if (strlen($password) < 8 || !preg_match($passwordPattern, $password)) 
    {
      $errors["password"] = "Password must not be less than eight (8) characters and must contain at least one of the special characters (@, #, $, %)";
    }

    // Display errors if any
    if (!empty($errors)) {
      echo '<div class="container">';
      echo '<h2>Error:</h2>';
      echo '<ul>';
      foreach ($errors as $error) {
        echo '<li class="error">' . $error . '</li>';
      }
      echo '</ul>';
      echo '</div>';
    } else {
      // Validation successful, perform login or change password actions here
      // Redirect to another page, save login information, etc.
      // Example: header("Location: welcome.php");
    }
  }
  ?>

</body>
</html>
