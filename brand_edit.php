<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$brandid = $_POST['id'];
		$brandcode = $_POST['brand_code'];
		$brandname = $_POST['brand_name'];
		$brandstatus = $_POST['brand_status'];
		$sql = "UPDATE brands SET brand_code ='$brandcode', brand_name = '$brandname', brand_status= '$brandstatus' WHERE brand_id = '$brandid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Brand updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating brand';
		}
	}
	else{
		$_SESSION['error'] = 'Select brand to edit first';
	}

	header('location: table_brand.php');

?>
