<!--HEADER-->
<?php 
       include('connection.php');
       include('header.php');
?>

<?php
      include ('bg.php');
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
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
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
                    <h2>Inventory Loan Application</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Home </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Inventory Loan Application</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

  <body>
    <div class="testbox">
      <form action="inventory_insert.php" method="POST">
        <div class="banner">
          <h1>Loan Application Form</h1>
        </div>
        <br>
        </br>
     
      <body>
      
      <div class="body">
        <form class="form-group">
         <div class="card-header">STAFF DETAILS</div>
       </br>
       </br>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
              <label for="staff_name">Staff Name:</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8">
              <div class="form-group">
                <input type="text" name="staff_name" class="form-control" placeholder="Enter staff name">
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
              <label for="staff_no">Staff No:</label>
          </div>
            <div class="col-lg-10 col-md-10 col-sm-6">
              <div class="form-group">
                <input type="text" name="staff_no" class="form-control" placeholder="Enter staff number">
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
              <label for="staff_dept">Department:</label>
          </div>
            <div class="col-lg-10 col-md-10 col-sm-8">
              <div class="form-group">
                <input type="text" name="staff_dept" class="form-control" placeholder="Enter department">
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
              <label for="order_date">Date:</label>
          </div>
            <div class="col-lg-10 col-md-10 col-sm-8">
              <div class="form-group">
                <input type="date" name="created_date" class="form-control" placeholder="Enter the date">
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-6 form-control-label">
              <label for="order_description">Purpose:</label>
          </div>
            <div class="col-lg-10 col-md-10 col-sm-8">
              <div class="form-group">
                <textarea rows="3" name="order_description" class="form-control" placeholder=""></textarea>
              </div>
            </div>
          </div>
        
          <center><button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
    
    </div>
  </div>
</div>




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

