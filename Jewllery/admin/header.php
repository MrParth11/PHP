<?php 
session_start();
include_once('session.php');
include_once("../connection.php");
// $em = $_SESSION['admin_name'];
// $q2 = "select * from admin where email ='$em'";
// $res = mysqli_query($con, $q2);
// $r = mysqli_fetch_array($res);
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- <title>Zit Admin 2 - Dashboard</title> -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                    <div class="sidebar-brand-text mx-3">Admin</div>
                </a>
                <hr class="sidebar-divider">

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "dashboard.php") { echo "active"; } ?>">
                    <a class="nav-link" href="dashboard.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_slider.php") {
                    echo "active";
                } ?>">
                    <a class="nav-link" href="manage_slider.php">
                        <i class="fas fa-home"></i>
                        <span>Home Slider</span>
                    </a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_user.php") { echo "active"; } ?>">
                    <a class="nav-link" href="manage_user.php">
                        <i class="fas fa-users"></i>
                        <span>Users</span></a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_about.php") { echo "active"; } ?>">
                    <a class="nav-link" href="manage_about.php">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <span>About</span>
                    </a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_products.php") { echo "active"; } ?>">
                    <a class="nav-link" href="manage_products.php">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        <span>Products</span>
                    </a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_categories.php") {
                    echo "active";
                } ?>">
                    <a class="nav-link" href="manage_categories.php">
                        <i class="fas fa-clipboard-list" aria-hidden="true"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li class="nav-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_services.php" || basename($_SERVER['PHP_SELF']) == "manage_reviews.php" || basename($_SERVER['PHP_SELF']) == "manage_contact.php" || basename($_SERVER['PHP_SELF']) == "manage_inquires.php") {
                    echo "active";
                }?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa fa-cogs"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"
                        style="background-color: white;">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Manage Pages</h6>
                            <a class="collapse-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_services.php") {
                                echo "active";
                            } ?>" href="manage_services.php">Services</a>
                            <a class="collapse-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_reviews.php") {
                                echo "active";
                            } ?>" href="manage_reviews.php">Reviews</a>
                            <a class="collapse-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_contact.php") {
                                echo "active";
                            } ?>" href="manage_contact.php">Contact</a>
                            <a class="collapse-item <?php if (basename($_SERVER['PHP_SELF']) == "manage_inquires.php") {
                                echo "active";
                            } ?>" href="manage_inquires.php">Inquires</a>
                        </div>
                    </div>
                </li>

                <!-- <hr class="sidebar-divider d-none d-md-block"> -->
<br>
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"
                        style="border:2px solid transparent;"></button>
                </div>
            </ul>

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/default-profile.png" class="img-profile rounded-circle">
                                    <!-- <i class="fa fa-cog" aria-hidden="true" style="color:black"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="change_profile.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Change Profile
                                    </a>
                                    <a class="dropdown-item" href="change_password.php">
                                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Change Password
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                       Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>