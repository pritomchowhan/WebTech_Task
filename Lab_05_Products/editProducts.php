<?php 

require_once 'controller/ProductsInfo.php';
$products = fetchProducts($_GET['id']);




 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Edit Your Product Informations </h3>
 <form action="controller/updateProducts.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $products['name'] ?>" type="text" id="name" name="name"><br>
  <label for="b_price">Buying Price:</label><br>
  <input value="<?php echo $products['buying_Price'] ?>" type="text" id="b_price" name="b_price"><br>
  <label for="s_price">Selling Price:</label><br>
  <input value="<?php echo $products['selling_Price'] ?>" type="text" id="s_price" name="s_price"><br>
  <label for="profit">Profit:</label><br>
  <input value="<?php echo $products['profit'] ?>" type="text" id="profit" name="profit"><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProducts" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

