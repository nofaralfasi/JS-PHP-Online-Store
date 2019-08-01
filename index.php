<?php
session_start();
include("functions/functions.php");
$page = "home";
$title = "Homepage";
$metaD = "Stickers Center Homepage";
include("header.php");
?>

<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>Wall Stickers & Wallpapers</h2>
                                <p>Design your house as you wish with our wide range of products.</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/themes/bedroom-wall-design-for-mint-green3.jpg" class="girl img-responsive" alt="" />
                                <!-- <img src="../images/home/pricing.png"  class="pricing" alt="" /> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Design your house as you wish with our wide range of products. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/themes/livingroom-wall-design-classic-blue.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Design your house as you wish with our wide range of products. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/themes/children-sailboat-wallpaper-bedroom-boys-room-blue.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->

<!--Main Container starts here-->
<section>
    <div class="container">
        <div class="row">
            <?php
            include("left_menu.php");
            ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <div class="col-sm-4">
                        <div id="products_box">
                            <?php getPro(); ?>
                            <?php getCatPro(); ?>
                            <?php getBrandPro(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="recommended_items">
                <!--recommended_items-->
                <h2 class="title text-center">
                recommended items
                </h2>
                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wallpaper-bedroom-pink-classic-min.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p>Modern Wallpaper With Textured Linear Stripes </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wallpaper-livingroom-blue-classic.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wallpaper-kids-room-pink-lines.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wall-sticker-kids-room-boys-teens-with-sports-basketball-orange.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wall-sticker-bedroom-with-stars-colorful1.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommended/wall-sticker-3d-kids-with-minion-colorful.jpg" class="size200" alt="" />
                                            <h2>$56</h2>
                                            <p></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>
        </div>
        <!--/recommended_items-->

    </div>
</section>
<?php
include "footer.php";
?>