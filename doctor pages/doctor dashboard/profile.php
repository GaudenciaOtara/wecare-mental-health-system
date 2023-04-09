
<?php
session_start();
// require '../Functions/connect.php';
Require "../../Functions/connect.php";

// $connection=mysqli_query($stmt,$conn);


if (isset($_SESSION['user'])){

    $user_query = mysqli_query($conn,"select * from admin where email='{$_SESSION["user"]}'");
    $user_data = mysqli_fetch_assoc($user_query);
    
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>WeCare</title>
 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/notification/notification.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css/css/animate.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
                    

            .card-image {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            }

            .card-image img {
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            .card-image .icon {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            .card-image .icon i {
            color: #007bff;
            }

            .card-info {
            padding: 20px;
            text-align: center;
            }

            .card-info h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
            }

    </style>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
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
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <!-- <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /> -->
                            <h2>WECARE</h2>

                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
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
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $user_data['fullname'];
                                            ?></span>
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
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details"><?php echo $user_data['fullname'];
                                            ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="profile.php"><i class="ti-user"></i>View Profile</a>
                                            <a href="settings.php"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Dashboard</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php" class="waves-effect waves-dark">
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
                                                <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
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
                                            <h5 class="m-b-10">Profile</h5>
                                            <p class="m-b-0">Update your Profile Details</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Profile</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>User</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="sub-title">Your Profile</div>
                                                                
                                                            

                                                                
                                                                <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 id="message">View / Edit Profile Information</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" method= "POST" 
                                                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                                                        enctype="multipart/form-data"
                                                        id="update-profile"
                                                        >
                                                        <div class="card">
                                                            
                                                            <div class="card-image">
                                                                <img src="<?php echo "../image/".$user_data['image'] ?>"
                                                                 alt="Profile Image" id="profile-image">
                                                                 
                                                                <div class="icon"id="file-upload">                                                            
                                                                    <i class="fa fa-camera" id="upload-icon"></i>
                                                                </div>
                                                                <script>
                                                                        // Create a file input element with a name attribute
                                                                        var fileInput = document.createElement("input");
                                                                        fileInput.type = "file";
                                                                        fileInput.id = "image";
                                                                        fileInput.style.display = "none";
                                                                        fileInput.name = "image"; // Set the name attribute to "file"
                                                                        
                                                                        // Append the file input element to the div element
                                                                        document.getElementById("file-upload").appendChild(fileInput);
                                                                        
                                                                        // Attach the onclick event to the icon
                                                                        document.getElementById("upload-icon").onclick = function() {
                                                                            fileInput.click(); // Show the file input window
                                                                        };
                                                                </script>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="fullname" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><?php echo "Name : ".$user_data['fullname'];?></label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><?php echo "Email :".$user_data['email'];?></label>
                                                            </div>
                                                            
                                                            <div class="form-group form-default">
                                                                <input type="number" name="phone" class="form-control" >
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><?php echo "phone : ".$user_data['phonenumber'];?></label>
                                                            <div class="form-group form-default">
                                                                <input type="number" name="nationalid" class="form-control">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label"><?php echo "id : ".$user_data['nationalid'];?></label>
                                                            </div>
                                                        <br>
                                                            
                                                        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated fadeIn" 
                                                            style="margin-left:25%; margin-top:0px;" 
                                                            data-animation-out="animated fadeOut" name="update-profile">Update Profile</button>
                                                        </form>
                                                            
                                                        <!-- <script>
                                                            document.querySelector('#update-profile').addEventListener('submit', function(event) {
                                                                // Perform form validation
                                                                var nameField = document.querySelector('#fullname');
                                                                var emailField = document.querySelector('#email');
                                                                var phoneField = document.querySelector('#phone');
                                                                var imageField = document.querySelector('#image');
                                                                var nationalidField = document.querySelector('#nationalid');
                                                                if ( nameField.value === '' &&
                                                                     emailField.value ==='' &&
                                                                     imageField.value ==='' &&
                                                                     phoneField.value ===''&&
                                                                     nationalidField ===''
                                                                     ) {
                                                                    // Display error message and stop form submission
                                                                    alert('you havent updated anything mahn!!!');
                                                                    
                                                                    event.preventDefault(); // Stops form submission
                                                                    return false; // Stops form submission
                                                                }
                                                                console.log("prevented");
                                                                // Allow form submission if validation succeeds
                                                                // return true;
                                                            });
                                                        </script> -->
                                                        <?php
                                                        

                                                            // if(isset($_POST["update-profile"]) &&
                                                            //  $_POST['fullname'] == '' &&
                                                            //  $_POST['email'] == '' &&
                                                            //  $_POST['phone'] == '' &&                                                            
                                                            //  $_POST['nationalid'] == '' 
                                                            //  ){   
                                                                
                                                            //     echo "
                                                            //     <script>
                                                            //     var label = document.getElementById('message');
                                                            //     label.style.color = 'red';
                                                            //     label.style.fontSize = '24px';
                                                            //     label.textContent = 'Nothing has been updated 😂';                                                        
                                                            
                                                            //     var form = document.querySelector('#update-profile');
                                                            //         form.addEventListener('submit', function(event) {
                                                            //         event.preventDefault(); });
                                                            //     </script>                                                                
                                                            //     ";                                                       
                                                            // }
                                                            if (isset($_POST["update-profile"]) ) {
                                                                
                                                                if ($_POST['fullname'] == '') {
                                                                    $name = $user_data['fullname'];
                                                                }else if(isset($_POST['update-profile']) && $_POST['fullname'] != '' ){
                                                                    $name = $_POST['fullname'];
                                                                }
                                                                if($_POST['email']){
                                                                    $email = $user_data['email'];
                                                                }else {
                                                                    $email = $_POST['email'] ;      }
                                                                if($_POST['nationalid']==''){
                                                                    $id = $user_data['nationalid'];
                                                                }else {
                                                                    $id = $_POST['nationalid'];
                                                                }
                                                                if($_POST['phone']==''){
                                                                    $phone = $user_data['phonenumber'];
                                                                }else {
                                                                    $phone = $_POST['phone'];
                                                                }
                                                                $filename = $_FILES["image"]["name"];
                                                                $tempname = $_FILES["image"]["tmp_name"];                                                          
                                                                $folder = "../image/".$filename;
                                                            // upload with image
                                                            echo "poasted";
                                                                if (move_uploaded_file($tempname, $folder)) {
                                                                    $statement="                                                                
                                                                        UPDATE admin SET email='$email',
                                                                                    fullname='$name',
                                                                                    nationalid='$id'
                                                                                    phonenumber='$phone',
                                                                                    image='$folder',
                                                                                    where email='{$_SESSION["user"]}'
                                                                    ";
                                                                    $user_query = mysqli_query($conn,$statement);
                                                                    if ($user_query) {
                                                                        echo "
                                                                            <script>
                                                                                var label = document.getElementById('message');
                                                                                label.style.color = 'green';
                                                                                label.style.fontSize = '24px';
                                                                                label.textContent = 'Successfully updated😎';                                                        
                                                                            
                                                                                var form = document.querySelector('#update-profile');
                                                                                    form.addEventListener('submit', function(event) {
                                                                                    event.preventDefault(); });
                                                                            </script>                                                                
                                                                            ";                                                       
                                                                }else {
                                                                    $statement="                                                                
                                                                        UPDATE admin SET email='$email',
                                                                                    fullname='$name',
                                                                                    nationalid='$id'
                                                                                    phonenumber='$phone',                                                                                    
                                                                                    where email='{$_SESSION["user"]}'
                                                                    ";
                                                                    $user_query = mysqli_query($conn,$statement);
                                                                    if (mysqli_query_num_rows($user_query) > 0) {
                                                                        echo "
                                                                            <script>
                                                                                var label = document.getElementById('message');
                                                                                label.style.color = 'green';
                                                                                label.style.fontSize = '24px';
                                                                                label.textContent = 'Successfully updated😎';                                                        
                                                                            
                                                                                var form = document.querySelector('#update-profile');
                                                                                    form.addEventListener('submit', function(event) {
                                                                                    event.preventDefault(); });
                                                                            </script>                                                                
                                                                            ";                                                       
                                                                    }

                                                                }
                                                            }  
                                                                
                                                            }

                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                

                                                                 
                                                    </div>
                                                </div>
                                                <!-- Notification card end -->
                                            </div>
                                            <!-- Bootstrap modal end -->
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main-body end -->

                    <div id="styleSelector">

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
    <!-- notification js -->
    <script type="text/javascript" src="assets/js/bootstrap-growl.min.js"></script>
    <!-- <script type="text/javascript" src="assets/pages/notification/notification.js"></script> -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
