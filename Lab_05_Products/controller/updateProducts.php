<?php  
require_once '../model/model.php';


if (isset($_POST['updateProducts'])) {
	$data['name'] = $_POST['name'];
	$data['buying_Price'] = $_POST['b_price'];
	$data['selling_Price'] = $_POST['s_price'];$data['profit'] = $_POST['profit'];
	
  	header('Location: ../showProducts.php?id=' . $_POST["id"]);
  }
 else {
	echo 'You are not allowed to access this page.';
}


?>