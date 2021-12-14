<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$categoriesid = $_POST['id'];
		$categoriescode = $_POST['categories_code'];
		$categoriesname = $_POST['categories_name'];
		$categoriesstatus = $_POST['categories_status'];
		$sql = "UPDATE categories SET categories_code ='$categoriescode', categories_name = '$categoriesname', categories_status= '$categoriesstatus' WHERE categories_id = '$categoriesid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Categories updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating categories';
		}
	}
	else{
		$_SESSION['error'] = 'Select categories to edit first';
	}

	header('location: table_category.php');

?>