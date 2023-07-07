
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <style>
    .error {
      color: red;
    }
    .home 
        {
            flex: 1;
            text-align: center;
        }
  </style>
</head>
<body>
  <h3>CHANGR PASSWORD</h3>
  <form method="POST" action="changepassword.php">
    <label for="currentPassword">Current Password     :</label>
    <input type="password" id="currentPassword" name="currentPassword" required>
    <br>
    <label for="newPassword">New Password       :</label>
    <input type="password" id="newPassword" name="newPassword" required>
    <br>
    <label for="Retype New Password">Retype New Password: </label>
    <input type="password" id="newPassword" name="Retype New Password" required>
    <br>
    <input type="submit" value="Change Password">
  </form>
</body>
</html>
<div class="error">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $currentPassword = test_input($_POST["currentPassword"]);
  $newPassword = test_input($_POST["newPassword"]);

  if (strlen($currentPassword) < 8 || !preg_match('/[@#$%]/', $currentPassword)) {
    $currentPasswordErr = "Current password must be at least eight characters long and contain at least one of the special characters (@, #, $, %)";
  }

  if (strlen($newPassword) < 8 || !preg_match('/[@#$%]/', $newPassword)) {
    $newPasswordErr = "New password must be at least eight characters long and contain at least one of the special characters (@, #, $, %)";
  }

  if (empty($currentPasswordErr) && empty($newPasswordErr)) {
    header("Location: passwordchanged.json");
    exit();
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</div>

<div class="home">
<a href="index.php">HOME</a><br>
<a href="dashbord.php">Dashbord</a>
</div>



<?php include 'footer.php';   ?>