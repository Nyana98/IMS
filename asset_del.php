<?php
       
       include('connection.php');
       
       
        ?>  

<body>
<?php
$asset_id = $_GET['id'];
								
			$query = 'DELETE FROM asset WHERE asset_id = ' . $asset_id;
			$result = mysqli_query($db, $query) or die(mysqli_error($db));

						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "asset.php";
			</script>			

</body>
</html>