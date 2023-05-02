<?php
include('session.php');
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title>Otika - Admin Dashboard Template</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />


</head>



<body>




    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Otika</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">
                       
                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                         <li class="dropdown">
                              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="briefcase"></i><span>Slider</span></a>
                              <ul class="dropdown-menu">
                                <li><a class="nav-link" href="add_slider.php">Add Slider</a></li>
                                <li><a class="nav-link" href="slider.php?key=1">Active Slider</a></li>
                                <li><a class="nav-link" href="slider.php?key=2">Requested Slider</a></li>
                                <li><a class="nav-link" href="slider.php?key=3">Old Slider</a></li>
                              </ul>
                        </li>
                        
                        <li class="dropdown">
                              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="briefcase"></i><span>Half Banner</span></a>
                              <ul class="dropdown-menu">
                                <li><a class="nav-link" href="add_halfbanner.php">Add Half Banner</a></li>
                                <li><a class="nav-link" href="half_banner.php?key=1">Active Half Banner</a></li>
                                <li><a class="nav-link" href="half_banner.php?key=2">Requested Half Banner</a></li>
                                <li><a class="nav-link" href="half_banner.php?key=3">Old Half Banner</a></li>
                              </ul>
                        </li>
                        
                         <li class="dropdown">
                              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="briefcase"></i><span>Small Banner</span></a>
                              <ul class="dropdown-menu">
                                <li><a class="nav-link" href="add_small_banner.php">Add Small Banner</a></li>
                                <li><a class="nav-link" href="small_banner.php?key=1">Active Small Banner</a></li>
                                <li><a class="nav-link" href="widget-data.html">Requested Small Banner</a></li>
                                <li><a class="nav-link" href="widget-data.html">Old Small Banner</a></li>
                              </ul>
                        </li>
                       
                        <li>
                            <a class="nav-link" href="products.php">
                                <i class="far fa-file-alt"></i>
                                <span>Products</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="offered_products.php">
                                <i class="far fa-file-alt"></i>
                                <span>Running Offered Products</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Orders</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Deliveried Product</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Returned Product List</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Terms And Conditions</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Registered Vendor</span>
                            </a>
                        </li>
                        
                         <li>
                            <a class="nav-link" href="delivered_orders.php">
                                <i class="far fa-file-alt"></i>
                                <span>Registered Customer</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="logout.php">
                                <i class="far fa-file-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>




                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">