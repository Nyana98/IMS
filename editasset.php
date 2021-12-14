<?php
  session_start();
  include_once('connection.php');

  if(isset($_POST['editasset'])){
    $database = new Connection();
    $db = $database->open();
    try{
	    $id = $_GET['asset_id'];
	    $barcode = $_POST['asset_barcode'];
	    $name = $_POST['asset_name'];
	    $model = $_POST['model_asset'];
	    $brand = $_POST['brand_name'];
	    $category = $_POST['categories_name'];
	    $quantity = $_POST['quantity'];
	    $assetstatus = $_POST['asset_status'];
	    $image = $_POST['asset_image'];

      $sql = "UPDATE asset SET id='$asset_id', barcode='$asset_barcode', name='$asset_name', model='$model_asset', brand='$brand_name', category='$categories_name', quantity='$quantity', assetstatus='$asset_status'WHERE id='$asset_id'";
      //if-else statement in executing our query
      $_SESSION['message'] = ( $db->exec($sql) ) ? 'Room updated successfully' : 'Something went wrong. Cannot update asset';

    }
    catch(PDOException $e){
      $_SESSION['message'] = $e->getMessage();
    }

    //close connection
    $database->close();
  }
  else{
    $_SESSION['message'] = 'Fill up edit form first';
  }

  header('location: asset1.php');

?>