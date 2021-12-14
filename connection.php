<?php
	
	$conn = new mysqli('localhost', 'root', '', 'inventori');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>

<?php
 $db = mysqli_connect('localhost', 'root', '', 'inventori') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'inventori' ) or die(mysqli_error($db));
?>


