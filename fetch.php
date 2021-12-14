<?php
//fetch.php

if(isset($_POST['action']))
{
	include('database_connection.php');

	$output = '';

	if($_POST["action"] == 'brand_name')
	{
		$query = "
		SELECT product_name FROM product 
		WHERE brand_name = :brand_name 
		GROUP BY product_name
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':brand_name'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		$output .= '<option value="">Select State</option>';
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["brand_name"].'">'.$row["brand_name"].'</option>';
		}
	}
	if($_POST["action"] == 'brand_name')
	{
		$query = "
		SELECT categories_name FROM product
		WHERE brand_name = :brand_name
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':brand_name'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["product_name"].'">'.$row["product_name"].'</option>';
		}


	}
	echo $output;
}

?>