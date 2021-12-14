<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){

	extract($_POST);

    // give new file name
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    // original file location
    $file_loc = $_FILES['file']['tmp_name'];
    // size of the file
    $file_size = $_FILES['file']['size'];
    // type of the file
    $file_type = $_FILES['file']['type'];
    // folder to move the file
    $folder="upload/";
    
    // new file size in KB
    $new_size = $file_size/1024;  
    // new file size in KB
    
    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case
    
    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
      
		
		$sql = "INSERT INTO product (product_id,product_image, product_barcode, product_name, model_type, brand_name, categories_name, quantity, product_status) VALUES (NULL,'$final_file','$product_barcode', '$product_name', '$model_type','$brand_name', '$categories_name', '$quantity', '$product_status')";
		echo $sql;

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		} 
    }


		
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: table_product.php');
?>