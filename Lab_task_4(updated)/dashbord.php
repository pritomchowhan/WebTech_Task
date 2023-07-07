<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        .boxcomm {
            width: 200px;
            height: 350px;
            
            border: 0.1ch solid #111;
            margin: 10px;
            display: inline-block;
            text-align: left;
            padding-top: 70px;
            
        }

        .box2 {
            width: 600px;
            height: 300px;
            
            border: 0ch solid #111;
            margin: 0.01px;
            display: inline-block;
            text-align: center;
            padding-top: 70px;
            
        }
        .home 
        {
            flex: 1;
            text-align: center;
        }

    </style>
   

</head>
<body>

<div class="boxcomm" >   
    <div class="container">
        
        <div class="menu">
            <ul>
                <li><a href="dashbord.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="changephoto.php">Change Profile Photo</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
           
    
   
</div>



<div class="box2"> <h2>Welcome, <?php echo $username; ?>!</h2> 
  </div>




<div class="home">
    <a href="index.php">HOME</a>

</div>
</body>
</html>


<?php include 'footer.php';   ?>