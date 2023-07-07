<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        body 
        {
            font-family: Aria;
            background-color: #f5f5f5;
            margin: 0;
            padding: 10px;
        }

        .container 
        {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .profile-info 
        {
            flex: 1;
            padding-right: 20px;
        }

        .profile-info h1 
        {
            margin-top: 0;
        }

        .profile-info p 
        {
            margin: 5px 0;
        }

        .profile-photo 
        {
            flex: 1;
            text-align: center;
        }

        .profile-photo img {
            width: 150px;
            height: auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-info">
            
        <h4>PROFILE</h4>
            <hr><br>
            <p><strong>Name           :</strong> John Doe</p> 
            <p><strong>Email          :</strong> john.doe@example.com</p>
            <p><strong>Gender         :</strong> Male</p>
            <p><strong>Date of Birth  :</strong> January 1, 1990</p><br>
        <a href="editprofile.php">EDIT PROFILE</a>
    </div>
        <div class="profile-photo">
            <img src="pic.jpg" alt="Profile Photo">
           <br> <a href="changephoto.php">CHANGE PICTURE</a>
        </div>
    </div>
    <div class="profile-photo">
        <a href="index.php">HOME</a>

    </div>
</body>
</html>

