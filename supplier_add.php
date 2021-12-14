<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$suppliername = $_POST['supplier_name'];
		$supplieraddress = $_POST['supplier_address'];
		$suppliercontact = $_POST['supplier_contact'];
		$sql = "INSERT INTO supplier (supplier_name, supplier_address, supplier_contact) VALUES ('$suppliername','$supplieraddress', '$suppliercontact')";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier added successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: table_supplier.php');
?>