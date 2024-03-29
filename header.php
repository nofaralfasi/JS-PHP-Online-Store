<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?php
    if (isset($metaD) && !empty($metaD)) {
        echo $metaD;
    } else {
        echo "Some meta description";
    } ?>"/>

    <title><?php
        if (isset($title) && !empty($title)) {
            echo $title;
        } else {
            echo "Default title tag";
        } ?></title>
    <!-- <title>Home | Stickers Center</title> -->

    <script type="text/javascript" href="index.js"></script>
    <link rel="stylesheet" href="styles/style.css" media="all"/>

    <!-- ------------------ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>
<body>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>+972 526205429</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> my.stickers.center@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/madbekot.comp/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/stickers_center?lang=he"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/stickers_center_israel/"><i
                                            class="fa fa-instagram"></i></a></li>
                            <li><a href="https://plus.google.com/101066463055015880710"><i
                                            class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/home/logo4.png" alt=""/></a>
                    </div>
                    <div class="btn-group pull-left clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                IL
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Israel</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Shekels
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">EURO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="customer_login.php"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>

<!--                    <div class="shop-menu clearfix pull-right" style="margin-top: 20px;">-->
<!--                        --><?php //cart(); ?>
<!--                        --><?php
//                        if (isset($_SESSION['customer_email'])) {
//                            echo "Welcome:" . $_SESSION['customer_email'] . "Your";
//                        } else {
//                            echo "Welcome Guest:";
//                        }
//                        ?>
<!--                        Shopping Cart has --><?php //total_items(); ?><!-- Item(s) for --><?php //total_price(); ?>
<!--                        <a href="cart.php" style="color:#8D8D8D">Go to Cart</a>-->
<!--                        --><?php
//                        if (!isset($_SESSION['customer_email'])) {
//                            echo "<a href='checkout.php' style='color:#A3D0FF;'>Login</a>";
//                        } else {
//                            echo "<a href='logout.php' style='color:#8D8D8D;'>Logout</a>";
//                        }
//                        ?>

                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="all_products.php">Products</a></li>
                                    <li><a href="all_products.php">Product Details</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="customer_login.php">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="">Blog List</a></li>
                                    <li><a href="">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="">Best Sellers</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search a Product"/>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
