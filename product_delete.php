<?php
  session_start();
  include_once('connection.php');

  if(isset($_GET['id'])){
    $sql = "DELETE FROM product WHERE product_id = '".$_GET['id']."'";

    //use for MySQLi OOP
    if($conn->query($sql)){
      $_SESSION['success'] = 'Product deleted successfully';
    }
    
    else{
      $_SESSION['error'] = 'Something went wrong in deleting product';
    }
  }
  else{
    $_SESSION['error'] = 'Select product to delete first';
  }

  header('location: table_product.php');
?>