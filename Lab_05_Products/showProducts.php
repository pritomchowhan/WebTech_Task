<?php  
require_once 'controller/ProductsInfo.php';

$student = fetchProducts($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Selected Product</h3>

<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
		<th>Profit</th>
		
	</tr>
	<tr>
		<td><?php echo $student['name'] ?></a></td>
		<td><?php echo $student['buying_Price'] ?></td>
		<td><?php echo $student['selling_Price'] ?></td>
		<td><?php echo $student['profit'] ?></td>

		
		
	</tr>

</table>


</body>
</html>