
<?php
$conn = new mysqli('localhost', 'root', '', 'inventori');
// echo '<pre>', print_r($_POST); exit;
$number = count($_POST["product_name"]);
if($number > 1)
{
	echo $number;
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["product_name"][$i]!= ''))
		{
			echo $_POST["product_name"][$i], $_POST["quantity"][$i];
			$sql = "INSERT INTO inrequest_details (product_name, quantity) VALUES('".$_POST['product_name'][$i]."',".$_POST['quantity'][$i].")";
			mysqli_query($conn, $sql);
		if ($conn->error) {
    		echo $sql, '<br>', $conn->error; exit;
}
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Inventory Name";
}