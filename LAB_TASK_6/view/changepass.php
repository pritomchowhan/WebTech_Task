<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form action="change_password.php" method="post">
        <label for="old_password">Old Password:</label>
        <input type="password" name="old_password" required><br><br>
        
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br><br>
        
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Change Password">
    </form>
</body>
</html>
