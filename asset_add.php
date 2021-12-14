<!--HEADER-->
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>

<head>
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<? php include 'loader.php';?>


<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.php"?><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Inventory </span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/admin.png" alt="User"></a>
                    <div class="detail">
                        <h4>Admin</h4>
                        <small>Technician</small>                        
                    </div>
                </div>
            </li>
            <li><a href="index.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li> <a href="table_brand.php"><i class="zmdi zmdi-blogger"></i><span>Brands</span></a>
            <li> <a href="table_category.php"><i class="zmdi zmdi-storage"></i><span>Category</span></a>
            <li> <a href="table_supplier.php"><i class="zmdi zmdi-truck"></i><span>Supplier</span></a>
            <li> <a href="asset.php"><i class="zmdi zmdi-mall"></i><span>Assets</span></a>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-store"></i><span>Products</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Add Product</a></li>
                    <li><a href="table_product.php">Manage Product</a></li>               
                 </ul>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Borrow</a></li>
                    <li><a href="#">Return</a></li>               
                 </ul>
             <li> <a href="sign-in.php"><i class="zmdi zmdi-power"></i><span>Logout</span></a>  
    </div>
</aside>


<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!--Main content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add New Asset</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Home </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Assets</a></li>
                        <li class="breadcrumb-item active">Add New Asset</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
            <div class="body_scroll">
             <div class="block-header">
               <div class="container-fluid">

  <?php

  if(isset($_POST['add'])){

  extract($_POST);

    // give new file name
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    // original file location
    $file_loc = $_FILES['file']['tmp_name'];
    // size of the file
    $file_size = $_FILES['file']['size'];
    // type of the file
    $file_type = $_FILES['file']['type'];
    // folder to move the file
    $folder="upload/";
    
    // new file size in KB
    $new_size = $file_size/1024;  
    // new file size in KB
    
    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case
    
    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
      
    
    $sql = "INSERT INTO asset (asset_id, asset_image, asset_barcode, asset_name, model_asset, brand_name, categories_name, quantity, asset_status) VALUES (NULL,'$final_file','$asset_barcode', '$asset_name', '$model_asset','$brand_name', '$categories_name', '$quantity', '$asset_status')";
    echo $sql;

    //use for MySQLi OOP
    if($conn->query($sql)){
      $_SESSION['success'] = 'Asset added successfully';
    }
    
    else{
      $_SESSION['error'] = 'Something went wrong while adding';
    } 
    }
  
  }
  else{
    $_SESSION['error'] = 'Fill up add form first';
  }

?>

                  <h2>Add New Asset</h2>
              </br>
                      <div class="col-lg-8">

                        <form role="form" method="post" action="asset_transac.php?action=add" enctype="multipart/form-data">
                            
                            <div class="form-group">
                              <label class="control-label modal-label">Image:</label>
                              <input type="file" placeholder="Image" class="form-control" name="asset_image" >
                            </div>
                            <div class="form-group">
                              <label class="control-label modal-label">Asset Name:</label>
                              <input class="form-control" placeholder="Name" name="asset_name" >
                            </div> 
                            <div class="form-group">
                              <label class="control-label modal-label">Serial No:</label>
                              <input class="form-control" placeholder="Serial No" name="asset_barcode" >
                            </div> 
                            <div class="form-group">
                              <label class="control-label modal-label">Model:</label>
                              <input class="form-control" placeholder="Model" name="model_asset" >
                            </div> 
                            <div class="form-group">
                              <label class="control-label modal-label">Brand Name:</label>
                        <select class="form-control show-tick" name="brand_name">
                        <?php
                         include "connection.php";   
                         $records = mysqli_query($db, "SELECT brand_name From brands"); 

                         while($data = mysqli_fetch_array($records))
                         {
                            echo "<option value='". $data['brand_name'] ."'>" .$data['brand_name'] ."</option>";  
                         } 
                        ?>    
                        </select>
                    </div>
                             
                            <div class="form-group">
                              <label class="control-label modal-label">Category Name:</label>
                        <select class="form-control show-tick" name="brand_name">
                        <?php
                         include "connection.php";   
                         $records = mysqli_query($db, "SELECT categories_name From categories"); 

                         while($data = mysqli_fetch_array($records))
                         {
                            echo "<option value='". $data['categories_name'] ."'>" .$data['categories_name'] ."</option>";  
                         } 
                        ?>    
                        </select>
                    </div>
                            <div class="form-group">
                              <label class="control-label modal-label">Quantity:</label>
                              <input class="form-control" placeholder="Quantity" name="quantity" >
                            </div>
                            <div class="form-group">
                              <label class="control-label modal-label">Status:</label>
                            </div>
                              <input type="radio" name="asset_status" 
                                <?php if (isset($asset_status) && $asset_status=="Available") echo "checked"; ?>
                                value="Available">&nbsp Available &nbsp &nbsp
                                <input type="radio" name="asset_status" 
                                <?php if (isset($asset_status) && $asset_status=="Not Available") echo "checked"; ?>
                                value="Not Available">&nbsp Not Available
                            </div>
                            </br>
                            &nbsp <button type="submit" new="add" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>
  
                      </form>  
                    </div>
                </div>                
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/tables/jquery-datatable.js"></script>

</body>

</html>

