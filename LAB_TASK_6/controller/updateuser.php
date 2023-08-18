<?php  
require_once '../model/model.php';


if (isset($_POST['updateuser'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateUser($_POST['ID'], $data)) {
  	echo 'Successfully updated!!';
  
  	header('Location: showuserinfo.php?ID=' . $_POST["ID"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>
