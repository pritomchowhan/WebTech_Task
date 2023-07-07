<!DOCTYPE html>
<html>
  <head>
    <style>
       .home 
        {
            flex: 1;
            text-align: center;
        }
    </style>
  </head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


<br>
<div class="home">
<a href="index.php">HOME</a><br>
<a href="dashbord.php">Dashbord</a>
</div>

</body>
</html>


<?php include 'footer.php';   ?>







