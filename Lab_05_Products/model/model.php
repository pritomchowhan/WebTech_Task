<?php 

require_once 'db_connect.php';
 

function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products_b` ';
    try{ 
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProducts($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products_b` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProducts($products_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products_b` WHERE Name LIKE '%$products_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProducts($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products_b (Name, buying_Price, selling_Price, profit)
VALUES (:name, :b_price, :s_price, :profit)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':b_price' => $data['buying_Price'],
        	':s_price' => $data['selling_Price'],
            ':profit' => $data['profit']
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
} 


function updateProducts($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products_b set Name = ?, buying_Price = ?, selling_Price = ? profit = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buying_Price'], $data['selling_Price'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProducts($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products_b` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}