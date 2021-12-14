<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['save_asset_image'])){
		$database = new Connection();
		$db = $database->open();
		try{
			
			$stmt = $db->prepare("INSERT INTO asset (asset_image, asset_barcode, asset_name, model_asset, brand_name, categories_name, quantity, asset_status) VALUES (:barcode, :name, :model, :brand, :category, :quantity, :assetstatus, :asset_image)");
		
			$_SESSION['message'] = ( $stmt->execute(array(':asset_image' => $_POST['asset_image'] ,':asset_barcode' => $_POST['asset_barcode'] , ':asset_name' => $_POST['asset_name'] , ':model_asset' => $_POST['model'] , ':brand_name' => $_POST['brand'] , ':categories_name' => $_POST['category'], ':quantity' => $_POST['quantity'] , ':asset_status' => $_POST['assetstatus'] , )) ) ? 'Asset added successfully' : 'Something went wrong. Cannot add asset';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: asset1.php');
	
?>