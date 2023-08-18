

<?php

require_once '../model/model.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h3>Searched Result</h3>
</body>
</html>

<?php
if (isset($_POST['findProducts'])) {



    try {
    	
    	$allSearchedUsers = searchProducts($_POST['productsname']);
    	require_once '../showSearchedproducts.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
?>