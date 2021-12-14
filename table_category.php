<!--HEADER-->
<?php include 'header.php';?>

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
                    <h2>Category List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Home </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                        <li class="breadcrumb-item active">Category Lists</li>
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
                            <h5></h5>
            <div class="body_scroll">
             <div class="block-header">
               <div class="container-fluid">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
              &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Category</a>
			</div>
			<div class="height10">
			</div>
			<div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
					<thead>
						<tr>
						<th>&nbsp &nbsp &nbsp ID</th>
                        <th>&nbsp &nbsp &nbsp &nbsp &nbsp  Category Code</th>
						<th>&nbsp &nbsp &nbsp &nbsp &nbsp  Category Name</th>
						<th>&nbsp &nbsp &nbsp &nbsp &nbsp  Category Status</th>
						<th>&nbsp &nbsp &nbsp &nbsp &nbsp  Action</th>
					</tr>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM categories";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['categories_id']."</td>
                                    <td>".$row['categories_code']."</td>
									<td>".$row['categories_name']."</td>
									<td>".$row['categories_status']."</td>
									<td>
										&nbsp <a href='#edit_".$row['categories_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span>Edit</a>
										<a href='#delete_".$row['categories_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('categories_edit_delete_modal.php');
							}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('categories_add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>

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