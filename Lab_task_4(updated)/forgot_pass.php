<!DOCTYPE html>
<html>
<head>
    <title>Email Input</title>

    <style>
         .home 
        {
            flex: 1;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>From for forgot Password</h1>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required> <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email: " . $email;
        // Process further or save to a database
        // ...
    } else {
        echo "Invalid email address.";
    }
}
?>
<div class="home">
<a href="index.php">HOME</a>

</div>

<?php include 'footer.php';   ?>