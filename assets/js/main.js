!function(e){"use strict";e("#load").fadeOut(),e("#pre-loader").delay(0).fadeOut("slow"),e(".closeHeader").on("click",function(){return e(".promotion-header").slideUp(),Cookies.set("promotion","true",{expires:1}),!1}),e(".selected-currency").on("click",function(){e("#currencies").slideToggle()}),e("#currencies li").on("click",function(){e(this).parent().slideUp()}),e(".language-dd").on("click",function(){e("#language").slideToggle()}),e("#language li").on("click",function(){e(this).parent().slideUp()}),e(".top-header .user-menu").on("click",function(){e(window).width()<990&&(e(this).next().slideToggle(300),e(this).parent().toggleClass("active"))}),e(".site-header__cart").on("click",function(s){s.preventDefault(),e("#header-cart").slideToggle()}),e("body").on("click",function(s){var i=e(s.target);i.parents().is(".site-cart")||i.is(".site-cart")||e("body").find("#header-cart").slideUp()}),window.onscroll=function(){e(window).width()>1199&&(e(window).scrollTop()>145?e(".header-wrap").addClass("stickyNav animated fadeInDown"):e(".header-wrap").removeClass("stickyNav fadeInDown"))},e(".search-trigger").on("click",function(){const s=e(".search");s.is(".search--opened")?s.removeClass("search--opened"):(s.addClass("search--opened"),e(".search__input")[0].focus())}),e(document).on("click",function(s){e(s.target).closest(".search, .search-trigger").length||e(".search").removeClass("search--opened")});var s,i="body",o=".js-mobile-nav-toggle",t=".mobile-nav-wrapper",l="#MobileNav .anm",n=".closemobileMenu";e("#siteNav .lvl1 > a").each(function(){e(this).attr("href")==window.location.pathname&&e(this).addClass("active")}),e(o).on("click",function(){e(t).toggleClass("active"),e(i).toggleClass("menuOn"),e(o).toggleClass("mobile-nav--open mobile-nav--close")}),e(n).on("click",function(){e(t).toggleClass("active"),e(i).toggleClass("menuOn"),e(o).toggleClass("mobile-nav--open mobile-nav--close")}),e("body").on("click",function(s){var l=e(s.target);l.parents().is(t)||l.parents().is(o)||l.is(o)||(e(t).removeClass("active"),e(i).removeClass("menuOn"),e(o).removeClass("mobile-nav--close").addClass("mobile-nav--open"))}),e(l).on("click",function(s){s.preventDefault(),e(this).toggleClass("anm-plus-l anm-minus-l"),e(this).parent().next().slideToggle()}),e(".home-slideshow").slick({dots:!1,infinite:!0,slidesToShow:1,slidesToScroll:1,fade:!0,arrows:!0,autoplay:!0,autoplaySpeed:4e3,lazyLoad:"ondemand"}),e(window).resize(function(){var s=e(this).height()-20;e(".sliderFull .bg-size").height(s)}).resize(),e(".productSlider").slick({dots:!1,infinite:!0,slidesToShow:4,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".productSlider-style1").slick({dots:!1,infinite:!0,slidesToShow:3,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".productSlider-style2").slick({dots:!1,infinite:!0,slidesToShow:5,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".productSlider-fullwidth").slick({dots:!1,infinite:!0,slidesToShow:6,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".productPageSlider").slick({dots:!1,infinite:!0,slidesToShow:5,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:680,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:380,settings:{slidesToShow:1,slidesToScroll:1}}]}),e(".collection-grid").slick({dots:!1,infinite:!0,slidesToShow:5,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),e(".collection-grid-4item").slick({dots:!1,infinite:!0,slidesToShow:4,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),e(".logo-bar").slick({dots:!1,infinite:!0,slidesToShow:6,slidesToScroll:1,arrows:!0,responsive:[{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),e(".quotes-slider").slick({dots:!1,infinite:!0,slidesToShow:1,slidesToScroll:1,arrows:!0}),e(".tab_content").hide(),e(".tab_content:first").show(),e("ul.tabs li").on("click",function(){e(".tab_content").hide();var s=e(this).attr("rel");e("#"+s).fadeIn(),e("ul.tabs li").removeClass("active"),e(this).addClass("active"),e(".tab_drawer_heading").removeClass("d_active"),e(".tab_drawer_heading[rel^='"+s+"']").addClass("d_active"),e(".productSlider").slick("refresh")}),e(".tab_drawer_heading").on("click",function(){e(".tab_content").hide();var s=e(this).attr("rel");e("#"+s).fadeIn(),e(".tab_drawer_heading").removeClass("d_active"),e(this).addClass("d_active"),e("ul.tabs li").removeClass("active"),e("ul.tabs li[rel^='"+s+"']").addClass("active"),e(".productSlider").slick("refresh")}),e("ul.tabs li").last().addClass("tab_last"),e(".sidebar_categories .sub-level a").on("click",function(){e(this).toggleClass("active"),e(this).next(".sublinks").slideToggle("slow")}),e(".filter-widget .widget-title").on("click",function(){e(this).next().slideToggle("300"),e(this).toggleClass("active")}),e("#slider-range").slider({range:!0,min:12,max:200,values:[0,100],slide:function(s,i){e("#amount").val("$"+i.values[0]+" - $"+i.values[1])}}),e("#amount").val("$"+e("#slider-range").slider("values",0)+" - $"+e("#slider-range").slider("values",1)),e.each(e(".swacth-list"),function(){var s=e(".swacth-btn");s.on("click",function(){e(this).parent().find(s).removeClass("checked"),e(this).addClass("checked")})}),e(".footer-links .h4").on("click",function(){e(window).width()<766&&(e(this).next().slideToggle(),e(this).toggleClass("active"))}),e(window).resize(function(i){clearTimeout(s),s=setTimeout(function(){e(window).trigger("delayed-resize",i)},250)}),e(window).on("load resize",function(s){e(window).width()>766?e(".footer-links ul").show():e(".footer-links ul").hide()}),e(window).width()<771&&e(".wow").removeClass("wow"),new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!1,live:!0,callback:function(e){},scrollContainer:null}).init(),e(".product-tags li").eq(10).nextAll().hide(),e(".btnview").on("click",function(){e(".product-tags li").not(".filter--active").show(),e(this).hide()}),e(".btn-filter").on("click",function(){e(".filterbar").toggleClass("active")}),e(".closeFilter").on("click",function(){e(".filterbar").removeClass("active")}),e("body").on("click",function(s){var i=e(s.target);i.parents().is(".filterbar")||i.is(".btn-filter")||e(".filterbar").removeClass("active")}),e("[data-countdown]").each(function(){var s=e(this),i=e(this).data("countdown");s.countdown(i,function(e){s.html(e.strftime('<span class="ht-count days"><span class="count-inner"><span class="time-count">%-D</span> <span>Days</span></span></span> <span class="ht-count hour"><span class="count-inner"><span class="time-count">%-H</span> <span>HR</span></span></span> <span class="ht-count minutes"><span class="count-inner"><span class="time-count">%M</span> <span>Min</span></span></span> <span class="ht-count second"><span class="count-inner"><span class="time-count">%S</span> <span>Sc</span></span></span>'))})}),e("#site-scroll").on("click",function(){return e("html, body").animate({scrollTop:0},1e3),!1}),e(window).scroll(function(){e(this).scrollTop()>300?e("#site-scroll").fadeIn():e("#site-scroll").fadeOut()}),e(".product-dec-slider-2").slick({infinite:!0,slidesToShow:5,vertical:!0,slidesToScroll:1,centerPadding:"60px"}),e(".product-dec-slider-1").slick({infinite:!0,slidesToShow:6,stageMargin:5,slidesToScroll:1}),e(".zoompro").elevateZoom({gallery:"gallery",galleryActiveClass:"active",zoomWindowWidth:300,zoomWindowHeight:100,scrollZoom:!1,zoomType:"inner",cursor:"crosshair"}),e(".popup-video").length&&e(".popup-video").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),e(".sizelink").magnificPopup({type:"inline",midClick:!0}),e(".emaillink").magnificPopup({type:"inline",midClick:!0}),e(".qtyBtn").on("click",function(){var s=e(this).parent(".qtyField"),i=e(s).find(".qty").val(),o=1;e(this).is(".plus")?o=parseInt(i)+1:i>1&&(o=parseInt(i)-1),e(s).find(".qty").val(o)});var a=e(".userViewMsg").attr("data-user"),r=e(".userViewMsg").attr("data-time");e(".uersView").text(Math.floor(Math.random()*a)),setInterval(function(){e(".uersView").text(Math.floor(Math.random()*a))},r),e(".tab-content").hide(),e(".tab-content:first").show(),e(".product-tabs li").on("click",function(){e(".tab-content").hide();var s=e(this).attr("rel");if(e("#"+s).fadeIn(),e(".product-tabs li").removeClass("active"),e(this).addClass("active"),e(this).fadeIn(),e(window).width()<767){var i=e(this).offset();e("html, body").animate({scrollTop:i.top},700)}}),e(".product-tabs li:first-child").addClass("active"),e(".tab-container h3:first-child + .tab-content").show(),e(".acor-ttl").on("click",function(){e(".tab-content").hide();var s=e(this).attr("rel");e("#"+s).fadeIn(),e(".acor-ttl").removeClass("active"),e(this).addClass("active")}),e(".reviewLink").on("click",function(s){s.preventDefault(),e(".product-tabs li").removeClass("active"),e(".reviewtab").addClass("active");var i=e(this).attr("href");e(".tab-content").not(i).css("display","none"),e(i).fadeIn();var o=e("#tab2").offset();e(window).width()<767?e("html, body").animate({scrollTop:o.top-50},700):e("html, body").animate({scrollTop:o.top-80},700)}),"true"!=Cookies.get("promotion")&&e(".notification-bar").show(),e(".close-announcement").on("click",function(){return e(".notification-bar").slideUp(),Cookies.set("promotion","true",{expires:1}),!1}),e(".bg-top").parent().addClass("b-top"),e(".bg-bottom").parent().addClass("b-bottom"),e(".bg-center").parent().addClass("b-center"),e(".bg-left").parent().addClass("b-left"),e(".bg-right").parent().addClass("b-right"),e(".bg_size_content").parent().addClass("b_size_content"),e(".bg-img").parent().addClass("bg-size"),e(".bg-img.blur-up").parent().addClass(""),jQuery(".bg-img").each(function(){var s=e(this),i=s.attr("src");s.parent().css({"background-image":"url("+i+")","background-size":"cover","background-position":"center","background-repeat":"no-repeat"}),s.hide()}),e(".related-product .productSlider").slick({dots:!1,infinite:!0,item:5,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToScroll:1}},{breakpoint:767,settings:{slidesToScroll:1}}]}),e(".product-load-more .item").slice(0,16).show(),e(".loadMore").on("click",function(s){s.preventDefault(),e(".product-load-more .item:hidden").slice(0,4).slideDown(),0==e(".product-load-more .item:hidden").length&&e(".infinitpagin").html('<div class="btn loadMore">no more products</div>')}),e(".blog--grid-load-more .article").slice(0,3).show(),e(".loadMorepost").on("click",function(s){s.preventDefault(),e(".blog--grid-load-more .article:hidden").slice(0,1).slideDown(),0==e(".blog--grid-load-more .article:hidden").length&&e(".loadmore-post").html('<div class="btn loadMorepost">No more Blog Post</div>')})}(jQuery);