<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>


<div class="section">

    <div class="container">

        <div class="row" style="margin: 2rem 0 3rem 0;">
            <div class="col-12 text-center">

                <h1 style="font-size: 3rem; font-weight: revert;">Blog</h1>


                <!--Breadcrumb-->
                <div class="bredcrumbWrap" style="background: none; border-top: none;">
                    <div class="container-fluid breadcrumbs">
                        <a href="index.php" title="Back to the home page">Home</a><span aria-hidden="true">/</span><span>Blog</span>
                    </div>
                </div>
                <!--End Breadcrumb-->

            </div>

        </div>

    </div>

</div>



<style>
    .blog_tags li a {
        text-decoration: none;
        color: black;
    }

    .blog_title {
        margin: 2rem 0;
    }

    .blog_title a {
        text-decoration: none;
        color: #0e6b50;
    }

    .blog_tags li a:hover,
    .blog_title a:hover {
        color: #ef2b43;
    }
</style>



<!--Body Content-->
<div id="page-content">

    <div class="container">

        <div class="row">

            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">

                <div class="blog--list-view blog--grid-load-more">

                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="article">

                                <!-- Article Image -->
                                <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-1.jpg" src="assets/images/blog/blog-post-1.jpg" alt="It's all about how you wear"></a>

                                <ul class="publish-detail blog_tags">

                                    <li><a href="#">Ecommerce</a></li>

                                    <li><a href="#">Commercial</a></li>

                                </ul>

                                <h2 class="blog_title"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>

                                <ul class="publish-detail">
                                    <time datetime="2017-05-02">May 02, 2017</time>
                                    by
                                    User
                                </ul>

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                            <div class="article">

                                <!-- Article Image -->
                                <a class="article_featured-image" href="#"><img class="blur-up" data-src="assets/images/blog/blog-post-2.jpg" src="assets/images/blog/blog-post-2.jpg" width="400" height="400" alt="27 Days of Spring Fashion Recap"></a>

                                <ul class="publish-detail blog_tags">

                                    <li> <a href="#">Ecommerce</a></li>

                                    <li><a href="#">Commercial</a></li>

                                </ul>

                                <h2 class="blog_title"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>

                                <ul class="publish-detail">
                                    <time datetime="2017-05-02">May 02, 2017</time>
                                    by
                                    User
                                </ul>

                            </div>

                        </div>


                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                            <div class="article">

                                <!-- Article Image -->
                                <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="assets/images/blog/blog-post-3.jpg" src="assets/images/blog/blog-post-3.jpg" width="400" height="400" alt="How to Wear The Folds Trend Four Ways"></a>

                                <ul class="publish-detail blog_tags">

                                    <li> <a href="#">Ecommerce</a></li>

                                    <li><a href="#">Commercial</a></li>

                                </ul>

                                <h2 class="blog_title"><a href="blog-left-sidebar.html">It's all about how you wear</a></h2>

                                <ul class="publish-detail">
                                    <time datetime="2017-05-02">May 02, 2017</time>
                                    by
                                    User
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!--End Main Content-->


            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">

                <div class="custom-search">
                    <form action="http://annimexweb.com/search" method="get" class="input-group search-header search" role="search" style="position: relative;">
                        <input class="search-header__input search__input input-group__field" type="search" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                        <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                    </form>
                </div>


                <div class="sidebar_tags">

                    <div class="sidebar_widget categories mt-5">
                        <div class="widget-title">
                            <h2>Category</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="sidebar_categories">
                                <li class="lvl-1 "><a href="http://annimexweb.com/" class="site-nav lvl-1">Beauty</a></li>
                                <li class="lvl-1  active"><a href="#" class="site-nav lvl-1">fashion</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">summer</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">trend</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">winter</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="sidebar_widget mt-5">
                        <div class="widget-title">
                            <h2>Recent Posts</h2>
                        </div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link" href="#">
                                                    <img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-1.jpg" src="assets/images/blog/blog-post-sml-1.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">It's all about how you wear</a>
                                                <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-2.jpg" src="assets/images/blog/blog-post-sml-2.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">27 Days of Spring Fashion Recap</a>
                                                <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-3.jpg" src="assets/images/blog/blog-post-sml-3.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">How to Wear The Folds Trend Four Ways</a>
                                                <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2017</time> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-4.jpg" src="assets/images/blog/blog-post-sml-4.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Accusantium doloremque</a>
                                                <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2017</time> </span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar_widget tags-clouds mt-5">
                        <div class="widget-title">
                            <h2>Tags Cloud</h2>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothes</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Sun Glasses</a></li>
                                <li><a href="#">Winter</a></li>
                                <li><a href="#">Autoparts</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <!--End Sidebar-->

        </div>

    </div>

</div>
<!--End Body Content-->


<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>