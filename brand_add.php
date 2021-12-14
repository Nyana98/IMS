<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$brandcode = $_POST['brand_code'];
		$brandname = $_POST['brand_name'];
		$brandstatus = $_POST['brand_status'];
		$sql = "INSERT INTO brands (brand_code, brand_name, brand_status) VALUES ('$brandcode','$brandname', '$brandstatus')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Brand added successfully';
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

	header('location: table_brand.php');
?>