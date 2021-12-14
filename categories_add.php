<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$categoriescode = $_POST['categories_code'];
		$categoriesname = $_POST['categories_name'];
		$categoriesstatus = $_POST['categories_status'];
		$sql = "INSERT INTO categories (categories_code, categories_name, categories_status) VALUES ('$categoriescode','$categoriesname', '$categoriesstatus')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Categories added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: table_categorY.php');
?>