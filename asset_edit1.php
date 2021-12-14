<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$file = $_FILES['file']['name'];
		    $a = $_POST['asset_name'];
			$b = $_POST['asset_barcode'];
			$c = $_POST['model_asset'];
			$d = $_POST['brand_name'];
			$e = $_POST['categories_name'];
			$f = $_POST['quantity'];
			$g = $_POST['asset_status'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE asset set asset_image ="'.$file.'",
					asset_name ="'.$a.'", asset_barcode="'.$b.'",
					model_asset="'.$c.'",brand_name="'.$d.'", 
					categories_name="'.$e.'", quantity ="'.$f.'", asset_status ="'.$g.'" WHERE
					asset_id='.$zz;
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "asset.php";
		</script>
 </body>
</html>