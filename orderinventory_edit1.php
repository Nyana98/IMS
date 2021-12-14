<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
			$zz = $_POST['id'];
		    $a = $_POST['product_name'];
			$b = $_POST['product_barcode'];
			$c = $_POST['model_type'];
			$f = $_POST['quantity'];

			
	   include('connection.php');
		
	 			$query = 'UPDATE inventory_request set 
					product_name ="'.$a.'", product_barcode="'.$b.'",
					model_type="'.$c.'", quantity ="'.$f.'" WHERE
					reqin_id='.$zz;
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "borrow_form.php";
		</script>
 </body>
</html>