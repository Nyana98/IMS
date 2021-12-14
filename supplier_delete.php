<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM supplier WHERE supplier_id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier deleted successfully';
		}

		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting supplier';
		}
	}
	else{
		$_SESSION['error'] = 'Select supplier to delete first';
	}

	header('location: table_supplier.php');
?>