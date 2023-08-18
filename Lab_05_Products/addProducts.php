<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
<h3>Ading Product</h3><hr>

 <form action="controller/createProducts.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="b_price">Buying Price:</label><br>
  <input type="text" id="b_price" name="b_price"><br>
  <label for="s_price">Selling Price:</label><br>
  <input type="text" id="s_price" name="s_price"><br>
  <label for="profit">Profit:</label><br>
  <input type="text" id="profit" name="profit"><br><br>
  <input type="radio" id="display" name="Display">
  <label for="display">Display</label>

  <br><br>
  <input type="submit" name = "createProducts" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

