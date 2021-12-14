<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$supplierid = $_POST['id'];
		$suppliername = $_POST['supplier_name'];
		$supplieraddress = $_POST['supplier_address'];
		$suppliercontact = $_POST['supplier_contact'];
		$sql = "UPDATE supplier SET supplier_name ='$suppliername', supplier_address = '$supplieraddress', supplier_contact= '$suppliercontact' WHERE supplier_id = '$supplierid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating supplier';
		}
	}
	else{
		$_SESSION['error'] = 'Select supplier to edit first';
	}

	header('location: table_supplier.php');

?>