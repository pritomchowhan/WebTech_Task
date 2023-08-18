<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="../addProducts.php"> Add Products</a><br>
	<a href="../showAllProducts.php">Show all Products</a><br>
	<a href="../searchProducts.php">Search Products</a><br><br>



<h3>
<?php  

require_once '../model/model.php';


if (isset($_POST['createProducts'])) {
	
	
	$data['name'] = $_POST['name'];
	$data['buying_Price'] = $_POST['b_price'];
	$data['selling_Price'] = $_POST['s_price'];
	$data['profit'] = $_POST['profit'];

  if (addProducts($data)) {
  	echo ' <br> Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>

</h3>
</body>
</html>