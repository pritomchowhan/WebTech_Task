
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<a href="../addProducts.php"> Add Products</a><br>
	<a href="../showAllProducts.php">Show all Products</a><br>
	<a href="../searchProducts.php">Search Products</a><br><br>

<table>
	<thead>
		<tr>
			<th>User_id</th>
			<th>User_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../showProducts.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['name'] ?></td>
				<td><a href="../editProducts.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="deleteProducts.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>