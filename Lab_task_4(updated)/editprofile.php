<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>

<style>
    .home 
        {
            
            text-align: center;
        }
</style>
</head>
<body>
    <h2>EDIT PROFILE</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $data = array
        (
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob
        );

        $json_data = json_encode($data);

        $file_path = 'edit_profile.json';
        file_put_contents($file_path, $json_data);

        echo "Data saved successfully. "; 
        

    }
    ?>
    <br> <br> <br>
    <a href="dashbord.php">Dashboard</a>
    
    <div class="home">

    <a href="index.php">HOME</a>
    </div>
    
    
    
    
    
</body>
</html>
