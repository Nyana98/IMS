<?php
       
       include('connection.php');
       
       
        ?>  

<body>
<?php
$reqin_id = $_GET['id'];
								
			$query = 'DELETE FROM inventory_request WHERE reqin_id = ' . $reqin_id;
			$result = mysqli_query($db, $query) or die(mysqli_error($db));

						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "borrow_form.php";
			</script>			

</body>
</html>