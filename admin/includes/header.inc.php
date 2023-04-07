<?php
session_start();
if(!isset($_SESSION['admin_logged_in']))
    header("location:login.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/paper-dashboard.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>


<body class="">
    <!-- <div class="wrapper "> -->
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="img/logo-small.png">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">Dashboard</a>
        </div>
        <div class="sidebar-wrapper">

            <ul class="nav">
                <li <?php if (basename($_SERVER['PHP_SELF']) === "dashboard.php") echo "class='active'" ?>>
                    <a href="dashboard.php">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if (basename($_SERVER['PHP_SELF']) === "accounts.php") echo "class='active'" ?>>
                    <a href="accounts.php">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                <li <?php if (basename($_SERVER['PHP_SELF']) === "products.php") echo "class='active'" ?>>
                    <a href="./products.php">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li <?php if (basename($_SERVER['PHP_SELF']) === "orders.php") echo "class='active'" ?>>
                    <a href="orders.php">
                        <i class="nc-icon nc-chart-pie-36"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li <?php if (basename($_SERVER['PHP_SELF']) === "reviews.php") echo "class='active'" ?>>
                    <a href="reviews.php">
                        <i class="nc-icon nc-chart-bar-32"></i>
                        <p>Reviews</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Hello Admin</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-settings-gear-65"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->