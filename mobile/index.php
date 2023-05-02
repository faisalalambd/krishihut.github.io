<?php include 'header.php';
include 'config.php' ?>

<!--Body Content-->
<div id="page-content">
    <!--Image Banners-->
    <div class="section imgBanners">
        <div class="imgBnrOuter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 pl-0 image-banner-1">
                        <!--Home slider-->
                        <div class="slideshow slideshow-wrapper pb-section">
                            <div class="home-slideshow">
                                <div class="slide">
                                    <div class="blur-up lazyload">
                                        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/slider_1.jpeg" src="assets/images/slideshow-banners/home8-jewelry-banner1.jpg" alt="Wedding bands" title="Wedding bands" />

                                    </div>
                                </div>
                                <!--<div class="slide">-->
                                <!--    <div class="blur-up lazyload">-->
                                <!--        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/2.jpg" src="assets/images/slideshow-banners/home8-jewelry-banner2.jpg" alt="Shop New Collection" title="Shop New Collection" />-->

                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <!--End Home slider-->

                    </div>
                    <div class="col-12 pr-0 image-banner-2" style="margin-top:-20px">

                        <div class="row">
                            <div class="col-6">
                                <div class="inner topleft">
                                    <a href="#">
                                        <img src="assets/images/collection/1.jpg" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />

                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="inner topleft">
                                    <a href="#">
                                        <img src="assets/images/collection/2.jpg" alt="200+ NEW ARRIVALS" title="200+ NEW ARRIVALS" class="blur-up lazyload" />

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Store Information-->
                    <div class="section store-information">
                        <div class="container-fluid" style="border-style: ridge; padding: 3rem 2rem; border: 1px solid #d9d9d9;">
                            <div class="row">
                                <ul class="display-table store-info">

                                    <li class="display-table-cell" style="display: flex;">
                                        <div style="display: flex;">
                                            <div>
                                                <i class="anm anm-truck-l" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <h5>Free Delivery</h5>
                                                <span class="sub-text">
                                                    For all orders over $99
                                                </span>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="display-table-cell">
                                        <div style="display: flex;">
                                            <div>
                                                <i class="anm anm-phone-l" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <h5>90 Days Return</h5>
                                                <span class="sub-text">
                                                    If goods have problems
                                                </span>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="display-table-cell">
                                        <div style="display: flex;">
                                            <div>
                                                <i class="anm anm-money-bill-ar" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <h5>Secure Payment</h5>
                                                <span class="sub-text">
                                                    100% secure payment
                                                </span>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="display-table-cell">
                                        <div style="display: flex;">
                                            <div>
                                                <i class="anm anm-gift-l" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <h5>24/7 Support</h5>
                                                <span class="sub-text">
                                                    Dedicated support
                                                </span>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="display-table-cell">
                                        <div style="display: flex;">
                                            <div>
                                                <i class="anm anm-gift-l" aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <h5>Gift Service</h5>
                                                <span class="sub-text">
                                                    Support gift service
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Store Information-->
                </div>
            </div>
        </div>
    </div>
    <!--End Image Banners-->

    <!--Custom Image Banner-->
    <!--<div class="section imgBanners">-->
    <!--   	<div class="container-fluid">-->
    <!--       	<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">-->
    <!--           	<a href="#">-->
    <!--               	<img src="assets/images/collection/image-banner-home15-5.jpg" alt="Save Big On Popular Designs" title="Save Big On Popular Designs" class="blur-up lazyload" />-->
    <!--               </a>-->
    <!--           </div>-->
    <!--       </div>-->
    <!--   </div>-->
    <!--Custom Image Banner-->



    <!--New Arrivals-->
    <div id="page-content">

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Deal of the Day</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">

                            <?php

                            $sql = "SELECT * FROM products order by id desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

                                    <div class="logo-bar__item">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End hover image -->
                                                    <!-- Variant Image-->
                                                    <img class="grid-view-item__image hover variantImg" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- Variant Image-->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->

                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="button-set">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="cart.php">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="wishlist-btn" style="margin: 0 1.5rem;">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.php" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                            <!--start product details -->
                                            <div class="product-details text-center">

                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color:green">BDT <?php echo $row['product_price'] ?></span>
                                                    <span class="old-price">$500.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!-- product name -->
                                                <div class="product-name"><a href="product_details.php"><?php echo $row['product_name'] ?></a>
                                                </div>
                                                <!-- End product name -->



                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                            <?php }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End New Arrivals-->




    <!--Home LookBook Section-->
    <div class="section home-lookbook">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 text-center mb-5">
                    <img src="assets/images/collection/3.jpg" alt="" title="" />
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 text-center mb-5">
                    <img src="assets/images/collection/4.jpg" alt="" title="" />
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 text-center mb-5">
                    <img src="assets/images/collection/5.jpg" alt="" title="" />
                </div>
            </div>
        </div>
    </div>
    <!--End Home LookBook Section-->



    <!--Featured Products-->
    <div id="page-content">

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Featured Products</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">

                            <?php

                            $sql = "SELECT * FROM products order by id desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

                                    <div class="logo-bar__item">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End hover image -->
                                                    <!-- Variant Image-->
                                                    <img class="grid-view-item__image hover variantImg" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- Variant Image-->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->

                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="button-set">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="cart.php">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="wishlist-btn" style="margin: 0 1.5rem;">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.php" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                            <!--start product details -->
                                            <div class="product-details text-center">

                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color:green">BDT <?php echo $row['product_price'] ?></span>
                                                    <span class="old-price">$500.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!-- product name -->
                                                <div class="product-name"><a href="product_details.php"><?php echo $row['product_name'] ?></a>
                                                </div>
                                                <!-- End product name -->



                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                            <?php }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End Featured Products-->




    <!--Home LookBook Section-->
    <div class="section home-lookbook">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center mb-5">
                    <img src="assets/images/collection/6.jpg" alt="" title="" width="1090px" heigh="245px" />
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                    <img src="assets/images/collection/9.jpg" alt="" title="" width="1090px" heigh="245px" />
                </div>
            </div>
        </div>
    </div>
    <!--End Home LookBook Section-->



    <!--Exclusive Products-->
    <div id="page-content">

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Exclusive Products</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">

                            <?php

                            $sql = "SELECT * FROM products order by id desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

                                    <div class="logo-bar__item">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End hover image -->
                                                    <!-- Variant Image-->
                                                    <img class="grid-view-item__image hover variantImg" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- Variant Image-->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->

                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="button-set">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="cart.php">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="wishlist-btn" style="margin: 0 1.5rem;">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.php" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                            <!--start product details -->
                                            <div class="product-details text-center">

                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color:green">BDT <?php echo $row['product_price'] ?></span>
                                                    <span class="old-price">$500.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!-- product name -->
                                                <div class="product-name"><a href="product_details.php"><?php echo $row['product_name'] ?></a>
                                                </div>
                                                <!-- End product name -->



                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                            <?php }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End Exclusive Products-->



    <!--Computer & Technologies-->
    <div id="page-content">

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Computer & Technologies</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">

                            <?php

                            $sql = "SELECT * FROM products order by id desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

                                    <div class="logo-bar__item">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End hover image -->
                                                    <!-- Variant Image-->
                                                    <img class="grid-view-item__image hover variantImg" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- Variant Image-->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->

                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="button-set">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="cart.php">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="wishlist-btn" style="margin: 0 1.5rem;">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.php" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                            <!--start product details -->
                                            <div class="product-details text-center">

                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color:green">BDT <?php echo $row['product_price'] ?></span>
                                                    <span class="old-price">$500.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!-- product name -->
                                                <div class="product-name"><a href="product_details.php"><?php echo $row['product_name'] ?></a>
                                                </div>
                                                <!-- End product name -->



                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                            <?php }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End Computer & Technologies-->




    <!--Home LookBook Section-->
    <div class="section home-lookbook">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 text-center mb-5">
                    <img src="assets/images/collection/6.jpg" alt="" title="" width="1090px" heigh="245px" />
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                    <img src="assets/images/collection/9.jpg" alt="" title="" width="1090px" heigh="245px" />
                </div>
            </div>
        </div>
    </div>
    <!--End Home LookBook Section-->



    <!--Networking-->
    <div id="page-content">

        <!--Logo Slider-->
        <div class="section logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Networking</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="logo-bar">

                            <?php

                            $sql = "SELECT * FROM products order by id desc";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {

                            ?>

                                    <div class="logo-bar__item">
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="product_details.php?id=<?php echo $row['id'] ?>" class="grid-view-item__link">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/<?php echo $row['product_image'] ?>" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- End hover image -->
                                                    <!-- Variant Image-->
                                                    <img class="grid-view-item__image hover variantImg" src="assets/images/products/<?php echo $row['product_image'] ?>" alt="image" title="product" width="150px" height="200px">
                                                    <!-- Variant Image-->
                                                </a>
                                                <!-- end product image -->

                                                <!-- Start product button -->

                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!-- Start product button -->
                                            <div class="button-set">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="cart.php">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="wishlist-btn" style="margin: 0 1.5rem;">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.php">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.php" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                            <!--start product details -->
                                            <div class="product-details text-center">

                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color:green">BDT <?php echo $row['product_price'] ?></span>
                                                    <span class="old-price">$500.00</span>
                                                </div>
                                                <!-- End product price -->
                                                <!-- product name -->
                                                <div class="product-name"><a href="product_details.php"><?php echo $row['product_name'] ?></a>
                                                </div>
                                                <!-- End product name -->



                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                            <?php }
                            } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End Networking-->


</div>
<!--End Body Content-->


<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>