
<?php
  session_start();
  include_once('connection.php');

  if(isset($_POST['edit'])){
    extract($_POST);
    $productid = $_POST['id'];
    $image = $_FILE['product_image'];
    $productcode = $_POST['product_barcode'];
    $productname = $_POST['product_name'];
    $model = $_POST['model_type'];
    $brand = $_POST['brand_name'];
    $categories = $_POST['categories_name'];
    $quantity = $_POST['quantity'];
    $productstatus = $_POST['product_status'];
    $sql = "UPDATE product SET  image ='$product_image', product_barcode ='$productcode', product_name = '$productname', model_type = '$model', brand_name = '$brand',categories_name = '$categories', quantity = '$quantity', product_status= '$productstatus' WHERE product_id = '$productid'";

    //use for MySQLi OOP
    if($conn->query($sql)){
      $_SESSION['success'] = 'Inventory updated successfully';
    }

    
    else{
      $_SESSION['error'] = 'Something went wrong in updating inventory';
    }
  }
  else{
    $_SESSION['error'] = 'Select inventory to edit first';
  }

  // header('location: table_product.php');

?>