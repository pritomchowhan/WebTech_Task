<?php
session_start();
require_once '../model/db_connect.php';



 $massage = "Invalid username or Password ";


 
// Process the form submission
if (isset($_POST["submit"])) 

{
    $username = $_POST["username"];

    $password = $_POST["password"];
    $select = mysqli_query($username , "SELECT * FROM 'user_info' WHERE username = '$username' AND password = '$password'");

     header("location : view/dashboard.php");

    $row = mysqli_fetch_array($select);

    if (is_array($row)) 
    {
        $_SESSION ["username"] = $row["username"];
        $_SESSION ["password"] = $row["password"];
    } else
    {
        echo ' this is invalide ';
    }
    
    if (isset($_SESSION["username"])) {
       
        
    }

   
}
else{
    echo 'Error';
}


?>

