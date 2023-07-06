<?php
// Start a session
session_start();


// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    // Verify the login credentials (dummy example)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your login verification logic here
    // For example, you could check against a database of users

    // Dummy example: set the user as logged in
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Redirect the user to the logged-in page
    header('Location: loggedin.php');
    exit;
}

// Check if the logout action was triggered
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    // Clear the session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect the user to the home page
    header('Location: index.php');
    exit;
}

// Set a cookie to remember the user's visit
if (!isset($_COOKIE['visited'])) {
    setcookie('visited', '1', time() + 86400 * 30, '/');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h2>Welcome to Xcompany </h2>
    
   

    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="loggedin.php">Go to Logged-in Page</a></p>
        <p><a href="index.php?action=logout">Logout</a></p>
    <?php else : ?>
        <p><a href="login.php">Login</a></p>
        <p><a href="registration.php">Registration</a></p>
    <?php endif; ?>
</body>
</html>
