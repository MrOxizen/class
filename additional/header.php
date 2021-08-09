<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Twitter -->
        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Starlight">
        <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

        <!-- Facebook -->
        <meta property="og:url" content="http://themepixels.me/starlight">
        <meta property="og:title" content="Starlight">
        <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

        <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">

        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">

        <title>Starlight Responsive Bootstrap 4 Admin Template</title>

        <!-- vendor css -->
        <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">

        <!-- Starlight CSS -->
        <link rel="stylesheet" href="../css/starlight.css">
    </head>

    <body>

        <!-- ########## START: LEFT PANEL ########## -->
        <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>


        <div class="sl-sideleft">
            <div class="input-group input-group-search">
                <input type="search" name="search" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn"><i class="fa fa-search"></i></button>
                </span><!-- input-group-btn -->
            </div><!-- input-group -->

            <label class="sidebar-label">Navigation</label>
            <div class="sl-sideleft-menu">
                <a href="index.php" class="sl-menu-link active">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                        <span class="menu-item-label">Dashboard</span>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <a href="../files/table.php" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                        <span class="menu-item-label">Table</span>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <a href="../files/input.php" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                        <span class="menu-item-label">Input </span>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->

            </div><!-- sl-sideleft-menu -->

            <br>
        </div>


        <div class="sl-header">
            <div class="sl-header-left">
                <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
                <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
            </div><!-- sl-header-left -->
            <div class="sl-header-right">
                <nav class="nav">
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
                            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                                <li><a href="../function/sign-out.php"><i class="icon ion-power"></i> Sign Out</a></li>
                            </ul>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                </nav>
                <div class="navicon-right">
                    <a id="btnRightMenu" href="" class="pos-relative">
                        <i class="icon ion-ios-bell-outline"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger"></span>
                        <!-- end: if statement -->
                    </a>
                </div><!-- navicon-right -->
            </div><!-- sl-header-right -->
        </div><!-- sl-header -->