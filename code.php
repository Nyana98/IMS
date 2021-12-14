<?php
session_start();

if(isset($_POST['save_asset_image']))
{


    $barcode = $_POST['asset_barcode'];
    $name = $_POST['asset_name'];
    $model = $_POST['model_asset'];
    $brand = $_POST['brand_name'];
    $category = $_POST['categories_name'];
    $quantity = $_POST['quantity'];
    $assetstatus = $_POST['asset_status'];
    $image = $_POST['asset_image'];
    

    $conn = mysqli_connect("localhost","root","","inventori");

  
    $filename = $_FILES["asset_image"]["name"];
    $tempname = $_FILES["asset_image"]["tmp_name"];
    $folder = "upload/".$filename;


        if(move_uploaded_file($tempname, $folder))
    {
        move_uploaded_file($_FILES["asset_image"]["tmp_name"], "upload/".$_FILES["asset_image"]["name"]);
        $_SESSION['status']= "image stored successfully ";
        header('Location: asset1.php');
    }
    else
    {
        $_SESSION['status']= "image not inserted.! ";
        header('Location: asset1.php');
    }

    

    $query = "INSERT INTO asset (asset_barcode, asset_name, model_asset, brand_name, categories_name, quantity, asset_status, asset_image) VALUE ('$barcode', '$name','$model','$brand', '$category', '$quantity', '$assetstatus', '$filename')";
    $query_run = mysqli_query($conn, $query);

    mysqli_close($conn);
    


}
else{
    echo "<a href=create.php> </a>";

}

?>