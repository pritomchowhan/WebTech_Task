<?php  
require_once './controller/ProductsInfo.php';




$products = fetchAllProducts(); 


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3>All Products List </h3>


<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	
	
	</thead>
	
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showProducts.php?id=<?php echo $product['ID'] ?>"><?php echo $product['name'] ?></a></td>
				<td><?php echo $product['buying_Price'] ?></td>
				<td><?php echo $product['selling_Price'] ?></td>
				<td><?php echo $product['profit'] ?></td>
		
				<td><a href="editProducts.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteProducts.php?id=<?php echo $product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>