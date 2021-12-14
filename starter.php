<!--HEADER-->
<?php include 'header.php';?>

<body class="theme-blush">

<!-- Page Loader -->
<? php include 'loader.php';?>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="starter.php?>"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Inventory </span></a>
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
            <li><a href="starter.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-blogger"></i><span>Brands</span></a>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-storage"></i><span>Category</span></a>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-truck"></i><span>Supplier</span></a>
            <li> <a href="product.php"><i class="zmdi zmdi-store"></i><span>Products</span></a>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="#">Borrow</a></li>
                    <li><a href="#">Return</a></li>               
                 </ul>
             <li> <a href="sign-in.php"><i class="zmdi zmdi-power"></i><span>Logout</span></a>  
    </div>
</aside>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>DASHBOARD</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home </a></li>
                        <li class="breadcrumb-item active">Pages</li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                        <div class="header">
                            <h2><strong>Dashboard</strong></h2>
                        </div>
                        <div class="body">
                            <h5></h5>
            <div class="body_scroll">
             <div class="block-header">
               <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon domains">
                    <div class="card">
                        <div class="body xl-green">
                        <h6>Total Products</h6>
                        <h2>20 <small class="info">of 1Tb</small></h2>
                        <small>2% higher than last month</small>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon sales">
                    <div class="card">
                        <div class="body xl-blue">
                        <h6>Borrow</h6>
                        <h2>12% <small class="info">of 100</small></h2>
                        <small>6% higher than last month</small>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card widget_2 big_icon traffic">
                    <div class="card">
                        <div class="body xl-purple">
                        <h6>Low Stock</h6>
                        <h2>39 <small class="info">of 100</small></h2>
                        <small>Total Registered email</small>
                        <div class="progress">
                            <div class="progress-bar l-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
</section>

<!-- Jquery Core Js --> 
<? php include 'footer.php';?>


</body>
</html>