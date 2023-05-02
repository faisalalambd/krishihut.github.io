<?php
include 'config.php';
include('session.php');
if (!isset($_SESSION['login_user'])) {
    //header("location: index.php"); // Redirecting To Home Page
    $login = "Login";
    $login_link = "login";
    $register = "Register";
    $register_link = "register";
} else {



    $sql = "SELECT * FROM register where username='$login_session' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $user_name = $row['full_name'];
            $address = $row['address'];
            $phone = $row['phone'];
        }
    }

    $login = $user_name;
    $login_link = "#";
    $register = "Logout";
    $register_link = "logout.php";
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Krishi Hut</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon1.jpeg" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="template-index home15-funiture-template belle">
    <!--<div id="pre-loader">-->
    <!--    <img src="assets/images/loader.gif" alt="Loading..." />-->
    <!--</div>-->
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->

        <div style="border: 5px solid #ef2b43; background: #0e6b50;">
            <!--Header-->
            <div class="header-wrap animated d-flex home8-jewellery-header">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>

                        <!--Desktop Logo-->
                        <div class="logo col-4 col-sm-3 col-md-3 col-lg-2 d-none d-lg-block">
                            <a href="index.php">
                                <img src="assets/images/logo.jpeg" alt="Krishi Hut" title="Krishi Hut" />
                            </a>
                        </div>
                        <!--End SDesktop Logo-->


                        <style>
                            input.search_header {
                                width: 70%;
                                margin-left: 5rem;
                            }
                        </style>
                        <!--Search Icon-->
                        <div class="col-5 col-sm-6 col-md-6 col-lg-7 text-center">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="search" class="input-group__field newsletter__input search_header" name="Search" value="" placeholder="I'm shopping for..." required="">
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit" name="commit" id="Search" style="height: 40px;"><span class="newsletter__submit-text--large">Search</span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!--End Search Icon-->


                        <div class="col-4 col-sm-3 col-md-3 col-lg-2 text-center" style="display: flex;">

                            <div class="site-cart">
                                <a href="compare.php" title="Compare">
                                    <i class="fa-solid fa-square-poll-vertical" style="font-size: 2rem;"></i>
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
                                </a>
                            </div>


                            <div class="site-cart" style="margin: 0 2rem;">
                                <a href="wishlist.php" title="Wishlist">
                                    <i class="fa-solid fa-heart" style="font-size: 2rem;"></i>
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
                                </a>
                            </div>


                            <div class="site-cart">
                                <a href="#;" class="site-header__cart" title="Cart">
                                    <i class="fa-solid fa-bag-shopping" style="font-size: 2rem;"></i>
                                    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                                </a>
                                <!--Minicart Popup-->
                                <div id="header-cart" class="block block-cart">
                                    <ul class="mini-products-list">
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.php">Sleeve Kimono Dress</a>
                                                <div class="variant-cart">Black / XL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                    <div class="product-price">
                                                        <span class="money">$59.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.php">Elastic Waist Dress</a>
                                                <div class="variant-cart">Gray / XXL</div>
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <span class="label">Qty:</span>
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="priceRow">
                                                    <div class="product-price">
                                                        <span class="money">$99.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total">
                                        <div class="total-in">
                                            <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                        </div>
                                        <div class="buttonSet text-center">
                                            <a href="cart.php" class="btn btn-secondary btn--small">View Cart</a>
                                            <a href="checkout.php" class="btn btn-secondary btn--small">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Minicart Popup-->
                            </div>



                        </div>


                        <div class="col-4 col-sm-3 col-md-3 col-lg-1 text-center">

                            <div class="site-cart" style="display: flex;">

                                <i class="fa-solid fa-user" style="font-size: 2rem;"></i>

                                <div class="user_only" style="margin-left: 0.5rem;">
                                    <a href="signin.php"><?php echo $login ?></a>
                                    <a href="signup.php"><?php echo $register ?></a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!--Top Header-->
            <div class="container-fluid">

                <hr style="margin: 0; border-color: black;">

                <div class="row">

                    <div class="col-3">
                        <!--Desktop Menu-->
                        <nav class="belowlogo" id="AccessibleNav">

                            <ul id="siteNav" class="site-nav medium left hidearrow">

                                <li class="lvl1 parent dropdown"><a href="#"><i class="fa-solid fa-align-justify"></i> <strong>Shop by Department</strong> <i class="anm anm-angle-down-l"></i></a>

                                    <ul class="dropdown">

                                        <li><a href="#" class="site-nav"><i class="fa-solid fa-lemon"></i> শাক ও সবজি <i class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>সবজি</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">লেবু</a></li>
                                                        <li><a href="#" class="site-nav">ক্যাপসিকাম</a></li>
                                                        <li><a href="#" class="site-nav">শশা</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav">শাক</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i><i class="fa-solid fa-mortar-pestle"></i> মসলা </a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav">হলুদ</a></li>
                                                <li><a href="#" class="site-nav">শুকনা মরিচ</a></li>
                                                <li><a href="#" class="site-nav">রসুন</a></li>
                                                <li><a href="#" class="site-nav">সরিষার তেল</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i><i class="fa-solid fa-apple-whole"></i> ফল </a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>আম</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">গুটি আম</a></li>
                                                        <li><a href="#" class="site-nav">লেংড়া আম</a></li>
                                                        <li><a href="#" class="site-nav">ফজলি আম</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav">স্ট্রবেরি</a></li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>ড্রাগন</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">ড্রাগন সাদা</a></li>
                                                        <li><a href="#" class="site-nav">ড্রাগন গোলাপী</a></li>
                                                        <li><a href="#" class="site-nav">ড্রাগন লাল</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>পেয়ারা</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">বারি ২</a></li>
                                                        <li><a href="#" class="site-nav">থাই পেয়ারা</a></li>
                                                        <li><a href="#" class="site-nav">কাজী পেয়ারা</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>আপেল</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">আপেল কাস্মেরি</a></li>

                                                    </ul>
                                                </li>

                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>আনারস</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">জল ডুদ্দি</a></li>
                                                        <li><a href="#" class="site-nav">মধুপুরের আনারস</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>বেদানা</a> </li>

                                            </ul>
                                        </li>

                                        <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i><i class="fa-solid fa-fish-fins"></i> মাছ</a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>বড় মাছ</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">রুপচাদা শুটকি</a></li>
                                                        <li><a href="#" class="site-nav">পাঙ্গাস মাছ</a></li>
                                                        <li><a href="#" class="site-nav">ইলিশ মাছ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>ছোট মাছ</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">তেলাপিয়া</a></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                        <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i><i class="fa-solid fa-user-tie"></i> ম্যান ফ্যাশন</a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>পাঞ্জাবি</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">কটন</a></li>
                                                        <li><a href="#" class="site-nav">খাদি</a></li>
                                                        <li><a href="#" class="site-nav">সিল্ক</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>শার্ট</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">খাদি</a></li>
                                                        <li><a href="#" class="site-nav">কটন</a></li>
                                                        <li><a href="#" class="site-nav">ক্যাজুয়াল</a></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                        <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i><i class="fa-solid fa-crown"></i> Womens Fashion</a>
                                            <ul class="dropdown">
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>Salowar Kamiz</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">কটন</a></li>
                                                        <li><a href="#" class="site-nav">খাদি</a></li>
                                                        <li><a href="#" class="site-nav">সিল্ক</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="site-nav"><i class="anm anm-angle-right-l"></i>শার্ট</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#" class="site-nav">খাদি</a></li>
                                                        <li><a href="#" class="site-nav">কটন</a></li>
                                                        <li><a href="#" class="site-nav">ক্যাজুয়াল</a></li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </nav>
                        <!--End Desktop Menu-->
                    </div>


                    <div class="col-5" style="padding: 0;">

                        <!--Desktop Menu-->
                        <nav class="belowlogo" id="AccessibleNav">

                            <ul id="siteNav" class="site-nav medium left hidearrow">

                                <li class="lvl1"><a href="#">Home <i class="anm anm-angle-down-l"></i></a></li>


                                <li class="lvl1 parent dropdown"><a href="#">Pages <i class="fa-solid fa-angle-down"></i> <i class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="about_us.php" class="site-nav">About Us</a></li>
                                        <li><a href="terms_of_use.php" class="site-nav">Terms of Use</a></li>
                                        <li><a href="terms_and_conditions.php" class="site-nav">Terms & Conditions</a></li>
                                        <li><a href="refund_policy.php" class="site-nav">Refund Policy</a></li>
                                        <li><a href="coming_soon.html" class="site-nav">Coming Soon</a></li>
                                    </ul>
                                </li>


                                <li class="lvl1 parent dropdown"><a href="#">Shop <i class="fa-solid fa-angle-down"></i> <i class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="products.php" class="site-nav">All Products</a></li>
                                        <li><a href="#" class="site-nav">Products of Category</a></li>
                                        <li><a href="#" class="site-nav">Product Single</a></li>
                                    </ul>
                                </li>


                                <li class="lvl1"><a href="stores.php">Stores <i class="anm anm-angle-down-l"></i></a></li>


                                <li class="lvl1"><a href="blog.php">Blog <i class="anm anm-angle-down-l"></i></a></li>


                                <li class="lvl1"><a href="faqs.php">FAQs <i class="anm anm-angle-down-l"></i></a></li>


                                <li class="lvl1"><a href="contact_us.php">Contact <i class="anm anm-angle-down-l"></i></a></li>

                            </ul>

                        </nav>
                        <!--End Desktop Menu-->
                    </div>


                    <div class="col-4" style="padding: 0;">

                        <!--Desktop Menu-->
                        <nav class="belowlogo" id="AccessibleNav">

                            <ul id="siteNav" class="site-nav medium left hidearrow navbar_3">

                                <li class="lvl1"><a href="#" style="font-size: 11px;">Sell on Krishi Hut <i class="anm anm-angle-down-l"></i></a></li>


                                |


                                <li class="lvl1"><a href="#" style="font-size: 11px;">Track your order <i class="anm anm-angle-down-l"></i></a></li>


                                |


                                <li class="lvl1 parent dropdown"><a href="#" style="font-size: 11px;">USD <i class="fa-solid fa-angle-down"></i> <i class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="site-nav">EUR</a></li>
                                        <li><a href="#" class="site-nav">VND</a></li>
                                    </ul>
                                </li>


                                |


                                <li class="lvl1 parent dropdown"><a href="#" style="font-size: 11px;">English <i class="fa-solid fa-angle-down"></i> <i class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="site-nav">Tiếng Việt</a></li>
                                    </ul>
                                </li>

                            </ul>

                        </nav>
                        <!--End Desktop Menu-->
                    </div>

                </div>

            </div>
            <!--End Top Header-->

            <!--End Header-->
        </div>