<!-- ############################## Header Section ############################## -->
<?php include 'header_product.php';
include 'config.php';
$id = $_GET['id'] ?>



<!--Body Content-->
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <div class="bredcrumbWrap">
            <div class="container-fluid breadcrumbs">
                <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">/</span><span>Product Layout Style3</span>
            </div>
        </div>
        <!--End Breadcrumb-->


        <div id="ProductSection-product-template" class="product-template__container prstyle3 container-fluid">
            <!--#ProductSection-product-template-->
            <div class="product-single product-single-1">
                <div class="left-content-product">
                    <div class="row">

                        <?php

                        $sql = "SELECT * FROM products where id=$id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-details-img product-single__photos bottom">
                                        <div class="zoompro-wrap product-zoom-right pl-20">
                                            <div class="zoompro-span">
                                                <img class="blur-up lazyload zoompro" data-zoom-image="assets/images/products/<?php echo $row['product_image'] ?>" alt="" src="assets/images/products/<?php echo $row['product_image'] ?>" />
                                            </div>

                                        </div>
                                        <!--<div class="product-thumb product-thumb-1">-->
                                        <!--    <div id="gallery" class="product-dec-slider-1 product-tab-left">-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big1.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big1.jpg" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible0.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big2.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big2.jpg" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big3.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big3.jpg" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible6.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible7-big.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible7-big.jpg" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible7.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big4.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big4.jpg" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible8.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big5.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big5.jpg" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible9.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big6.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big6.jpg" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible1.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big7.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big7.jpg" class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible2.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big8.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big8.jpg" class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible3.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big9.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big9.jpg" class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible4.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--        <a data-image="assets/images/product-detail-page/camelia-reversible-big10.jpg" data-zoom-image="assets/images/product-detail-page/camelia-reversible-big10.jpg" class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1">-->
                                        <!--            <img class="blur-up lazyload" src="assets/images/product-detail-page/camelia-reversible5.jpg" alt="" />-->
                                        <!--        </a>-->
                                        <!--    </div>-->
                                        <!--</div>-->


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title"><?php echo $row['product_name'] ?></h1>
                                        <div class="prInfoRow">

                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                        </div>
                                        <hr style="margin: 0 0 1rem 0;">
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden">Regular price</span>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">BDT <?php echo $row['product_price'] ?></span></span>
                                            </span>
                                            <s id="ComparePrice-product-template"><span class="money">$900.00</span></s>
                                        </p>
                                        <div class="product-single__description rte">
                                            <div class="product-info">
                                                <p class="product-type"><span class="lbl">Sold By:</span> <a href="#" title="Women's" style="font-size: 1.3rem; color: blue;"><?php echo $row['vendor_name'] ?></a></p>
                                            </div>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                                <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                                <li>Lorem Ipsum is not simply random text.</li>
                                            </ul>
                                        </div>
                                        <hr style="margin: 0 0 1rem 0;">
                                        <form method="post" action="checkout.php?id=<?php echo $row['id'] ?>">


                                            <!-- Product Action -->
                                            <div class="product-action clearfix">
                                                <div class="product-form__item--quantity">
                                                    <div class="wrapQtyBtn">
                                                        <div class="qtyField">
                                                            <p>Quantity</p>
                                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin: 2rem; display: flex;">
                                                    <!--<div class="product-form__item--submit" style="margin-right: 1rem;">-->
                                                    <!--    <button type="submit" name="add" class="btn product-form__cart-submit">-->
                                                    <!--        <span>Add to cart</span>-->
                                                    <!--    </button>-->
                                                    <!--</div>-->


                                                    <!--  <div class="qtyField">-->
                                                    <!--    <p>Quantity</p>-->
                                                    <!--    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>-->
                                                    <!--    <input type="text" id="Quantity" name="quantity" value="<?php echo $quantity ?>" class="product-form__input qty">-->
                                                    <!--    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>-->
                                                    <!--</div>-->
                                                    <div class="shopify-payment-button" data-shopify="payment-button">
                                                        <button type="submit" class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy it now</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Action -->
                                        </form>
                                        <div class="display-table shareRow">

                                        </div>
                                        <hr style="margin: 0 0 1rem 0;">
                                        <div class="product-info">
                                            <p class="product-type"><span class="lbl">SKU:</span> <a href="#" title="SW-132-A0">SW-132-A0</a></p>
                                            <p class="product-cat">
                                                <span class="lbl">Categories: </span>
                                                <a href="#" title="" style="color: blue;">Jewelry & Watch</a>,
                                                <a href="#" title="" style="color: blue;">Drive & Storages</a>,
                                                <a href="#" title="" style="color: blue;">Digital Cables</a>,
                                                <a href="#" title="" style="color: blue;">Books & Office</a>
                                            </p>
                                            <p class="product-cat">
                                                <span class="lbl">Tags: </span>
                                                <a href="#" title=""> Mobile</a>,
                                                <a href="#" title="">Iphone</a>,
                                                <a href="#" title="">Printer</a>
                                            </p>
                                            <!-- <div class="display-table-cell text-right">
                                        <div class="social-sharing">
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                            </a>
                                            <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                            </a>
                                            <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                            </a>
                                        </div>
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!--Product Tabs-->
                                <div class="tabs-listing mt-5">
                                    <ul class="product-tabs">
                                        <li rel="tab1"><a class="tablink">Description</a></li>
                                        <li rel="tab2"><a class="tablink">Reviews</a></li>
                                        <li rel="tab3"><a class="tablink">Vendor</a></li>
                                        <li rel="tab4"><a class="tablink">Questions and Answers</a></li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="tab1" class="tab-content">

                                            <?php echo $row['description'] ?>

                                        </div>

                                        <div id="tab2" class="tab-content">
                                            <div id="shopify-product-reviews">
                                                <div class="spr-container">
                                                    <div class="spr-header clearfix">
                                                        <div class="spr-summary">
                                                            <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                            <span class="spr-summary-actions">
                                                                <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="spr-content">
                                                        <div class="spr-form clearfix">
                                                            <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                                <h3 class="spr-form-title">Write a review</h3>
                                                                <fieldset class="spr-form-contact">
                                                                    <div class="spr-form-contact-name">
                                                                        <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                    </div>
                                                                    <div class="spr-form-contact-email">
                                                                        <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                                        <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-review">
                                                                    <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label">Rating</label>
                                                                        <div class="spr-form-input spr-starrating">
                                                                            <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="spr-form-review-title">
                                                                        <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                                        <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                    </div>

                                                                    <div class="spr-form-review-body">
                                                                        <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                        <div class="spr-form-input">
                                                                            <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                                <fieldset class="spr-form-actions">
                                                                    <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                        <div class="spr-reviews">
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                                    <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                                    <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                                </div>

                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body"><br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br><br>
                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                    <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                    <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                                    <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                                                </div>

                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                                        <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tab3" class="tab-content">


                                        </div>

                                        <div id="tab4" class="tab-content">
                                            <h4>Returns Policy</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                            <h4>Shipping</h4>
                                            <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                        </div>
                                    </div>
                                </div>


                        <?php }
                        } ?>

                        <!--End Product Tabs-->
                    </div>
                </div>
                <!--End-product-single-->
                <!--Product Sidebar-->
                <div class="prSidebar sidebar-product">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <style>
                            .prstyle3 .prFeatures img {
                                max-width: 1.5rem;
                                margin-left: 0.5rem;
                            }
                        </style>
                        <!--Product Feature-->
                        <div class="prFeatures" style="background-color: #f1f1f1; padding: 20px; margin-bottom: 30px;">
                            <div class="row">
                                <div class="feature">
                                    <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                    <div class="details">
                                        Pay with the world's most payment methods.
                                    </div>
                                </div>
                                <div class="feature">
                                    <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                                    <div class="details">
                                        Protection covers your purchase and personal data.
                                    </div>
                                </div>
                                <div class="feature">
                                    <img src="assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                    <div class="details">
                                        >FREE &amp; fast shipping to over 200+ countries &amp; regions.
                                    </div>
                                </div>
                                <div class="feature">
                                    <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                    <div class="details">
                                        Talk to help line for your question on 4141 456 789, 4125 666 888
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Feature-->
                        <!--Related Product-->
                        <div class="related-product grid-products">
                            <img src="assets/images/8.jpg" alt="">
                        </div>
                        <!--End Related Product-->
                    </div>
                </div>
                <!--Product Sidebar-->
            </div>
            <!--#ProductSection-product-template-->
        </div>
        <!--MainContent-->


        <!--Deal of the Day-->
        <div class="product-rows section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h2 class="h2">Deal of the Day</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="productSlider-fullwidth grid-products grid-products-hover-btn">

                    <?php

                    $sql = "SELECT * FROM products order by id desc";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

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

                                    <style>
                                        .custom_button {
                                            color: #fff !important;
                                            background-color: #0e6b50 !important;
                                        }

                                        .custom_button:hover {
                                            color: #fff !important;
                                            background-color: #e9445d !important;
                                        }
                                    </style>


                                    <!-- Start product button -->
                                    <div class="button-set">
                                        <!-- <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                       <i class="icon anm anm-search-plus-r"></i>
                                    </a> -->
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist custom_button" href="cart.php">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                        </div>
                                        <div class="wishlist-btn" style="margin: 0 1rem;">
                                            <a class="wishlist add-to-wishlist custom_button" href="wishlist.php">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare custom_button" href="compare.php" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
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
                    <?php }
                    } ?>



                </div>
            </div>
        </div>
        <!--End Deal of the Day-->

    </div>
    <!--End Body Content-->



    <!-- ############################## Footer Section ############################## -->
    <?php include 'footer.php' ?>