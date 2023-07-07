<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'hader.php';   ?>
    <a href="index.php">HOME</a><br>
    <a href="login.php">LOGIN</a> <br>
    <a href="regristration.php">REGISTRATION</a><br>


   
   
</body>
</html>
<?php include 'footer.php';   ?>