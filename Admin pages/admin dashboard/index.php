<?php
session_start();
// require '../Functions/connect.php';
require "../../Functions/connect.php";

if (isset($_SESSION['user'])) {

    // echo $_SESSION['user'];
    $user_query = mysqli_query($conn, "select * from admin where email='{$_SESSION["user"]}'");
    $user_data = mysqli_fetch_assoc($user_query);


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title> WeCare</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="keywords"
            content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="Codedthemes" />
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- font-awesome-n -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- scrollbar.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="preloader-wrapper">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <div class="mobile-search waves-effect waves-light">
                                <div class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-prepend search-close"><i
                                                    class="ti-close input-group-text"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                            <span class="input-group-append search-btn"><i
                                                    class="ti-search input-group-text"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.html">
                                <h2 class="wecarelogo">WeCare</h2>
                            </a>
                            <a class="mobile-options waves-effect waves-light">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <a href="#!" class="waves-effect waves-light">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-red"></span>
                                    </a>
                                    <ul class="show-notification">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="user-profile header-notification">
                                    <a href="#!" class="waves-effect waves-light">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span> </span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li class="waves-effect waves-light">
                                            <a href="settings.php">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="profile.php">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="messages.php">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="auth-normal-sign-in.html">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="">
                                    <div class="main-menu-header">
                                        <img class="img-80 img-radius" src="assets/images/avatar-4.jpg"
                                            alt="User-Profile-Image">
                                        <div class="user-details">
                                            <span id="more-details">
                                                <?php echo $user_data['fullname'];
                                                ?>
                                                </p><i class="fa fa-caret-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="main-menu-content">
                                        <ul>
                                            <li class="more-details">
                                                <a href="profile.php"><i class="ti-user"></i>View Profile</a>
                                                <a href="settings.php"><i class="ti-settings"></i>Settings</a>
                                                <a href="auth-normal-sign-in.html"><i
                                                        class="ti-layout-sidebar-left"></i>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-15 p-b-0">
                                    <form class="form-material">
                                        <div class="form-group form-primary">
                                            <input type="text" name="footer-email" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label"><i class="fa fa-search m-r-10"></i>Search
                                                Dashboard</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="active">
                                        <a href="#!" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Information Page</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                            <span class="pcoded-mtext">Information Page</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="addarticle.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add Article</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="removearticle.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Remove Article</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="updatearticle.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Update Article</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="publishedarticles.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Published Articles</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="submittedarticles.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Submitted Articles</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="events.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Calender and Events</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">The WeCare Community</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="chats.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                            <span class="pcoded-mtext">Chats and Videos</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">User Feedback</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="support.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                            <span class="pcoded-mtext">Support & Feedback</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Chart And Stats</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="charts.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                            <span class="pcoded-mtext">Charts</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="traffic.php" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                            <span class="pcoded-mtext">Traffic Stats</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">User Pages</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Users</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="patient.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Patient</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="doctor.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Doctors</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="community.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i
                                                            class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                    <span class="pcoded-mtext">Community</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <!-- Page-header start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Dashboard</h5>
                                                <p class="m-b-0">Welcome
                                                    <?php echo $user_data['fullname'];
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page-header end -->
                            <div class="pcoded-inner-content">
                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page-body start -->
                                        <div class="page-body">
                                            <div class="row">
                                                <!-- Material statustic card start -->
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card mat-stat-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-center b-b-default">
                                                                <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i class="far fa-user text-c-purple f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>10K+</h5>
                                                                            <p class="text-muted m-b-0">Users</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i
                                                                                class="fas fa-volume-down text-c-green f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>100%</h5>
                                                                            <p class="text-muted m-b-0">Community</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i class="far fa-file-alt text-c-red f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>2000+</h5>
                                                                            <p class="text-muted m-b-0">Articles</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i
                                                                                class="far fa-envelope-open text-c-blue f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>100%</h5>
                                                                            <p class="text-muted m-b-0">Therapy</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card mat-stat-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-center b-b-default">
                                                                <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i
                                                                                class="fas fa-share-alt text-c-purple f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>1000+</h5>
                                                                            <p class="text-muted m-b-0">Shares</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i class="fas fa-sitemap text-c-green f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>100%</h5>
                                                                            <p class="text-muted m-b-0">Network</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i class="fas fa-signal text-c-red f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>Full</h5>
                                                                            <p class="text-muted m-b-0"> Community</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 p-b-20 p-t-20">
                                                                    <div class="row align-items-center text-center">
                                                                        <div class="col-4 p-r-0">
                                                                            <i class="fas fa-wifi text-c-blue f-24"></i>
                                                                        </div>
                                                                        <div class="col-8 p-l-0">
                                                                            <h5>100%</h5>
                                                                            <p class="text-muted m-b-0">Connections</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card mat-clr-stat-card text-white green ">
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-3 text-center bg-c-green">
                                                                    <i class="fas fa-star mat-icon f-24"></i>
                                                                </div>
                                                                <div class="col-9 cst-cont">
                                                                    <h5>4000+</h5>
                                                                    <p class="m-b-0">Ratings Received</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mat-clr-stat-card text-white blue">
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-3 text-center bg-c-blue">
                                                                    <i class="fas fa-trophy mat-icon f-24"></i>
                                                                </div>
                                                                <div class="col-9 cst-cont">
                                                                    <h5>17</h5>
                                                                    <p class="m-b-0">Achievements</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Material statustic card end -->
                                                <!--  sale analytics start -->
                                                <div class="col-xl-6 col-md-12">
                                                    <div class="card table-card">
                                                        <div class="card-header">

                                                            <h5>Upcoming Events</h5>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li><i class="fa fa fa-wrench open-card-option"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                                    <li><i class="fa fa-refresh reload-card"
                                                                            onclick="location.reload()"></i>
                                                                    </li>
                                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="table-responsive">
                                                                <?php
                                                                $conn = new mysqli("localhost", "lloyd", "1234", "wecare");
                                                                $stmt = $conn->prepare("SELECT * from event_table where event_datetime >= CURDATE() ORDER BY event_datetime ASC");
                                                                $stmt->execute();
                                                                $result = $stmt->get_result();
                                                                while ($row = $result->fetch_assoc()) {
                                                                    ?>
                                                                    <table class="table table-hover m-b-0 without-header">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="d-inline-block align-middle">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>
                                                                                                <?php echo $row['event_title']; ?>
                                                                                            </h6>
                                                                                            <p class="text-muted m-b-0">
                                                                                                <?php echo $row['event_description']; ?>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-right">
                                                                                    <h6 class="f-w-700">
                                                                                        <?php echo $row['event_datetime']; ?><i
                                                                                            class="fas fa-level-down-alt text-c-red m-l-10"></i>
                                                                                    </h6>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <?php
                                                                }
                                                                ?>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12">
                                                    <div class="row">

                                                        <!--  sale analytics end -->

                                                        <!-- Project statustic start -->
                                                        <div class="col-xl-12">
                                                            <div class="card proj-progress-card">
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <!-- <div class="col-xl-3 col-md-6"> -->
                                                                        <h5>WeCare is Proud Of You!</h5>
                                                                        <p>
                                                                            It is not how much you do but how much love you
                                                                            put into doing it that matters. Being able to be
                                                                            your
                                                                            true self with WeCare is very important to us.
                                                                            We are proud of you for being part of our
                                                                            community and
                                                                            serving others! Being your true self while doing
                                                                            that which matters to the community is your
                                                                            greatest strength.

                                                                        </p>
                                                                        <img src="./assets/images/comm7.jpeg" alt=""
                                                                            width="80%">
                                                                        <!-- </div> -->
                                                                        <!-- <div class="col-xl-3 col-md-6">
                                                                </div>
                                                                </div>
                                                           
                                                            <div class="col-xl-3 col-md-6">
                                                                 
                                                                </div>
                                                            </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Project statustic end -->
                                                </div>
                                            </div>
                                            <!-- Page-body end -->
                                        </div>
                                        <div id="styleSelector"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">
                <div class="copyright">
                    &copy; Copyright <strong><span>WeCare</span></strong>. All Rights Reserved
                </div>

            </footer><!-- End Footer -->

            <!-- Required Jquery -->
            <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
            <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
            <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
            <!-- waves js -->
            <script src="assets/pages/waves/js/waves.min.js"></script>
            <!-- jquery slimscroll js -->
            <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

            <!-- slimscroll js -->
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

            <!-- menu js -->
            <script src="assets/js/pcoded.min.js"></script>
            <script src="assets/js/vertical/vertical-layout.min.js "></script>

            <script type="text/javascript" src="assets/js/script.js "></script>
    </body>

    </html>
    <?php
} else {
    echo "<script>
                location.replace('../adminlogin.php');
            </script>";
}

?>