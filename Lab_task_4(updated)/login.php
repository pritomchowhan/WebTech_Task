
 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // Your login validation logic
    if ($username === 'admin' && $password === 'admin') {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashbord.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>





<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<span>
		
		<?php
		if (isset($msg)) 
		{
			echo $msg;
		}

	 ?>	 	
	 </span>
	 <br>



	Username:
	<input type="text" name="uname">
	<br>
	Password:
	<input type="password" name="pass">
	<br>
	<br>

	<input type="submit" name="login" value="Login">
	

    <a href="forgot_pass.php"> forget password</a> <br><br>
	
<a href="index.php">HOME</a>
	
</form>

<?php include 'footer.php';   ?>