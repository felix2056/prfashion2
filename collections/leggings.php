<?php include_once('includes/header.php'); ?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div class="gf-menu-device-wrapper">
        <div class="close-menu">x</div>
        <div class="gf-menu-device-container"></div>
    </div>
</nav>

<div class="wrapper-container">

    <?php include_once('includes/nav.php'); ?>

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <h1>Leggings</h1>
        <a href="/" title="Back to the frontpage">Home</a>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>

        <span>Leggings</span>
    </nav>

</div>

<div class="dt-sc-hr-invisible-large"></div>

<main class="main-content ">



    <div class="wrapper">

        <div class="grid__item">







            <div class="grid__item">
                <div class="collection-products">

                    <div class="grid__item sidebar-hidden">
                        <div class="collection-list">
                            <div class="grid-uniform grid-link__container col-main">


                                <header class="section-header section-header--large">
                                    <div class="toolbar">

                                        <div
                                            class="view-mode grid__item wide--one-third post-large--two-tenths large--two-tenths">

                                            <div class="tags-filter">
                                                <button id="showTagsFilter" class="btn tag-fillter">Filter <i
                                                        class="fa fa-angle-up"></i></button>
                                            </div>

                                            <a class="grid btn active" href="grid" title="Grid view"><span
                                                    class="fa fa-th-large" aria-hidden="true"></span></a>
                                            <a class="list btn" href="list" title="List view"><span
                                                    class="fa fa-th-list" aria-hidden="true"></span></a>
                                        </div>

                                        <div
                                            class="grid__item wide--five-tenths post-large--eight-tenths large--eight-tenths right">

                                            <div
                                                class="filter-sortby grid__item  wide--six-tenths post-large--six-tenths large--six-tenths  ">
                                                <label for="sort-by">Sort by</label>
                                                <input type="text" id="sort-by">
                                                <div class="sorting-section">
                                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-exchange"></i>
                                                        <span>Featured</span>
                                                        <i class="icon-chevron-down"></i>
                                                    </button>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="active"><a href="manual">Featured</a></li>
                                                        <li><a href="price-ascending">Price, low to high</a></li>
                                                        <li><a href="price-descending">Price, high to low</a></li>
                                                        <li><a href="title-ascending"> A-Z</a></li>
                                                        <li><a href="title-descending">Z-A</a></li>
                                                        <li><a href="created-ascending">Date, old to new</a></li>
                                                        <li><a href="created-descending">Date, new to old</a></li>
                                                        <li><a href="best-selling">Best Selling</a></li>
                                                    </ul>
                                                </div>
                                            </div>



                                            <div
                                                class="filter-show grid__item wide--four-tenths post-large--four-tenths large--four-tenths">
                                                <label>Show</label>
                                                <div class="pages_list">
                                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-exchange"></i>

                                                        <span>12</span>

                                                        <i class="icon-chevron-down"></i>
                                                    </button>

                                                    <ul class="dropdown-menu" role="menu">



                                                        <li><a href="8">8</a></li>
                                                        <li class="active"><a href="12">12</a></li>
                                                        <li><a href="24">24</a></li>
                                                        <li><a href="36">36</a></li>
                                                        <li><a href="all">All</a></li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </header>

                                <!-- /snippets/collection-sidebar.liquid -->

                                <script type="text/javascript">
                                $(window).ready(function($) {
                                    var tagsbutton = document.getElementById('showTagsFilter'),
                                        tagscontent = document.getElementById('tags-filter-content');
                                    if (window.innerWidth >= 768) {
                                        if (tagsbutton != null) {
                                            tagsbutton.onclick = function() {
                                                classie.toggle(this, 'closed');
                                                classie.toggle(tagscontent, 'tags-closed');
                                                if (classie.has(this, 'closed'))
                                                    $('#showTagsFilter').html(
                                                        "Filter <i class='fa fa-angle-down'></i>");
                                                else $('#showTagsFilter').html(
                                                    "Filter <i class='fa fa-angle-up'></i>");
                                            };
                                        }
                                    }
                                    classie.toggle(tagscontent, 'tags-closed');
                                });
                                </script>


                                <div id="tags-filter-content" class="tags-closed">


                                    <div class="collection_sidebar">



                                        <div class="refined-widgets">
                                            <a href="javascript:void(0)" class="clear-all" style="display:none">
                                                Clear All
                                            </a>
                                        </div>
                                        <div class="sidebar-block">
                                            <div id="shopify-section-sidebar-colors" class="shopify-section">


                                                <aside class="sidebar-tag color filter tags">
                                                    <div class="widget">
                                                        <h4>
                                                            <span>Shop By Color</span>
                                                            <a href="javascript:void(0)" class="clear"
                                                                style="display:none">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul>





                                                            <li class="red">

                                                                <input type="checkbox" value="red">
                                                                <a href="javascript:void(0)" title="Red">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Red">
                                                                    <span>Red</span>
                                                                </a>
                                                            </li>







                                                            <li class="yellow">

                                                                <input type="checkbox" value="yellow">
                                                                <a href="javascript:void(0)" title="Yellow">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Yellow">
                                                                    <span>Yellow</span>
                                                                </a>
                                                            </li>







                                                            <li class="orange">

                                                                <input type="checkbox" value="orange">
                                                                <a href="javascript:void(0)" title="Orange">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Orange">
                                                                    <span>Orange</span>
                                                                </a>
                                                            </li>







                                                            <li class="black">

                                                                <input type="checkbox" value="black">
                                                                <a href="javascript:void(0)" title="Black">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Black">
                                                                    <span>Black</span>
                                                                </a>
                                                            </li>







                                                            <li class="pink">

                                                                <input type="checkbox" value="pink">
                                                                <a href="javascript:void(0)" title="Pink">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Pink">
                                                                    <span>Pink</span>
                                                                </a>
                                                            </li>







                                                            <li class="brown">

                                                                <input type="checkbox" value="brown">
                                                                <a href="javascript:void(0)" title="Brown">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Brown">
                                                                    <span>Brown</span>
                                                                </a>
                                                            </li>







                                                            <li class="cyan">

                                                                <input type="checkbox" value="cyan">
                                                                <a href="javascript:void(0)" title="Cyan">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Cyan">
                                                                    <span>Cyan</span>
                                                                </a>
                                                            </li>







                                                            <li class="gold">

                                                                <input type="checkbox" value="gold">
                                                                <a href="javascript:void(0)" title="Gold">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Gold">
                                                                    <span>Gold</span>
                                                                </a>
                                                            </li>







                                                            <li class="blue">

                                                                <input type="checkbox" value="blue">
                                                                <a href="javascript:void(0)" title="Blue">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Blue">
                                                                    <span>Blue</span>
                                                                </a>
                                                            </li>







                                                            <li class="sandal">

                                                                <input type="checkbox" value="sandal">
                                                                <a href="javascript:void(0)" title="Sandal">
                                                                    <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                        alt="Sandal">
                                                                    <span>Sandal</span>
                                                                </a>
                                                            </li>





                                                        </ul>
                                                    </div>
                                                </aside>









                                            </div>
                                            <div id="shopify-section-sidebar-tag-filters" class="shopify-section">



                                                <aside class="sidebar-tag filter tags shop by size 1">

                                                    <div class="widget">
                                                        <h4>
                                                            <span>Shop By Size </span>
                                                            <a href="javascript:void(0)" class="clear"
                                                                style="display:none">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul>





                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="s">
                                                                <label>S</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="m">
                                                                <label>M</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="l">
                                                                <label>L</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="xl">
                                                                <label>XL</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="xxl">
                                                                <label>XXL</label>
                                                            </li>




                                                        </ul>
                                                    </div>
                                                </aside>





                                                <aside class="sidebar-tag filter tags shop by brand 2">

                                                    <div class="widget">
                                                        <h4>
                                                            <span>Shop By Brand </span>
                                                            <a href="javascript:void(0)" class="clear"
                                                                style="display:none">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul>





                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="oneill">
                                                                <label>O'Neill</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="rip-curl">
                                                                <label>Rip Curl</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="romwe">
                                                                <label>Romwe</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="forever">
                                                                <label>Forever</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="zaful">
                                                                <label>Zaful</label>
                                                            </li>




                                                        </ul>
                                                    </div>
                                                </aside>





                                                <aside class="sidebar-tag filter tags shop by price 3">

                                                    <div class="widget">
                                                        <h4>
                                                            <span>Shop By Price </span>
                                                            <a href="javascript:void(0)" class="clear"
                                                                style="display:none">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul>





                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="100-200">
                                                                <label>$100 - $200</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="200-300">
                                                                <label>$200 - $300</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="300-400">
                                                                <label>$300 - $400</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="500-700">
                                                                <label>$500 - $700</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="700-1000">
                                                                <label>$700 - $1000</label>
                                                            </li>




                                                        </ul>
                                                    </div>
                                                </aside>





                                                <aside class="sidebar-tag filter tags shop by material 4">

                                                    <div class="widget">
                                                        <h4>
                                                            <span>Shop By Material </span>
                                                            <a href="javascript:void(0)" class="clear"
                                                                style="display:none">
                                                                <i class="zmdi zmdi-close"></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div class="widget-content">
                                                        <ul>





                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="synthetic">
                                                                <label>Synthetic</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="leather">
                                                                <label>Leather</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="denim">
                                                                <label>Denim</label>
                                                            </li>






                                                            <li>
                                                                <i></i>
                                                                <input type="checkbox" value="jute-fabrics">
                                                                <label>jute fabrics</label>
                                                            </li>




                                                        </ul>
                                                    </div>
                                                </aside>





                                            </div>
                                        </div>


                                    </div>

                                </div>






                                <div class="products-grid-view">

                                    <ul>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420447666276">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1003516_grande.jpg?v=1581075798"
                                                                    class="featured-image"
                                                                    alt="Women Ladies Plus Size Fitness Pants High Waist Stretch Leggings Gym Yoga Running Trousers Sportswear">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1003516_26925914_grande.jpg?v=1581075798"
                                                                class="hidden-feature_img"
                                                                alt="Women Ladies Plus Size Fitness Pants High Waist Stretch Leggings Gym Yoga Running Trousers Sportswear">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1003516-women-ladies-plus-size-fitness-pants-high-waist-stretch-leggings-gym-yoga-running-trousers-sportswear"
                                                        class="grid-link__title">Women Ladies Plus Size Fitness Pants
                                                        High Waist Stretch Leggings Gym Yoga Running Trousers
                                                        Sportswear</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $15.58
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420447666276"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420447666276">
                                                                <input type="hidden" name="id" value="31481284952164">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420447404132">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1032835_grande.jpg?v=1581075776"
                                                                    class="featured-image"
                                                                    alt="Women Fitness Yoga Workout Leisure Elastic False Two-piece Ninth Pants Leggings Sportswear">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1032835_26925905_grande.jpg?v=1581075776"
                                                                class="hidden-feature_img"
                                                                alt="Women Fitness Yoga Workout Leisure Elastic False Two-piece Ninth Pants Leggings Sportswear">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1032835-women-fitness-yoga-workout-leisure-elastic-false-two-piece-ninth-pants-leggings-sportswear"
                                                        class="grid-link__title">Women Fitness Yoga Workout Leisure
                                                        Elastic False Two-piece Ninth Pants Leggings Sportswear</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $34.67
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420447404132"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420447404132">
                                                                <input type="hidden" name="id" value="31481282986084">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420447305828">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041397_grande.jpg?v=1581075768"
                                                                    class="featured-image"
                                                                    alt="Women Plus Size AB Faces Color Block High Elastic Hips Up Work Out Yoga Leggings Pants">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041397_26925891_grande.jpg?v=1581075768"
                                                                class="hidden-feature_img"
                                                                alt="Women Plus Size AB Faces Color Block High Elastic Hips Up Work Out Yoga Leggings Pants">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1041397-women-plus-size-ab-faces-color-block-high-elastic-hips-up-work-out-yoga-leggings-pants"
                                                        class="grid-link__title">Women Plus Size AB Faces Color Block
                                                        High Elastic Hips Up Work Out Yoga Leggings Pants</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $18.91
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420447305828"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420447305828">
                                                                <input type="hidden" name="id" value="31481282560100">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420447141988">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041398_grande.jpg?v=1581075754"
                                                                    class="featured-image"
                                                                    alt="Women Multi Pattern Printed Sports Yoga Stretch Leggings">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041398_26925881_grande.jpg?v=1581075754"
                                                                class="hidden-feature_img"
                                                                alt="Women Multi Pattern Printed Sports Yoga Stretch Leggings">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1041398-women-multi-pattern-printed-sports-yoga-stretch-leggings"
                                                        class="grid-link__title">Women Multi Pattern Printed Sports Yoga
                                                        Stretch Leggings</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $22.01
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420447141988"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420447141988">
                                                                <input type="hidden" name="id" value="31481280790628">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420447010916">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041455_grande.jpg?v=1581075745"
                                                                    class="featured-image"
                                                                    alt="Women Plus Size Slim Quick-dry Print Stretched Gym Running Ninth Yoga Pants">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1041455_26925870_grande.jpg?v=1581075745"
                                                                class="hidden-feature_img"
                                                                alt="Women Plus Size Slim Quick-dry Print Stretched Gym Running Ninth Yoga Pants">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1041455-women-plus-size-slim-quick-dry-print-stretched-gym-running-ninth-yoga-pants"
                                                        class="grid-link__title">Women Plus Size Slim Quick-dry Print
                                                        Stretched Gym Running Ninth Yoga Pants</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $27.60
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420447010916"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420447010916">
                                                                <input type="hidden" name="id" value="31481280168036">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420446912612">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1045128_grande.jpg?v=1581075737"
                                                                    class="featured-image"
                                                                    alt="Women Elastic Leg Cross Quick Drying Tight Running Yoga WorkouT-pants Leggings">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1045128_26925861_grande.jpg?v=1581075737"
                                                                class="hidden-feature_img"
                                                                alt="Women Elastic Leg Cross Quick Drying Tight Running Yoga WorkouT-pants Leggings">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1045128-women-elastic-leg-cross-quick-drying-tight-running-yoga-workout-pants-leggings"
                                                        class="grid-link__title">Women Elastic Leg Cross Quick Drying
                                                        Tight Running Yoga WorkouT-pants Leggings</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $38.83
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420446912612"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420446912612">
                                                                <input type="hidden" name="id" value="31481278529636">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420446584932">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1048008-women-elastic-side-pocket-yoga-running-leggings"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1048008_grande.jpg?v=1581075716"
                                                                    class="featured-image"
                                                                    alt="Women Elastic  Side Pocket Yoga Running Leggings">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1048008_26925853_grande.jpg?v=1581075717"
                                                                class="hidden-feature_img"
                                                                alt="Women Elastic  Side Pocket Yoga Running Leggings">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1048008-women-elastic-side-pocket-yoga-running-leggings">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1048008-women-elastic-side-pocket-yoga-running-leggings"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1048008-women-elastic-side-pocket-yoga-running-leggings loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1048008-women-elastic-side-pocket-yoga-running-leggings"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1048008-women-elastic-side-pocket-yoga-running-leggings loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1048008-women-elastic-side-pocket-yoga-running-leggings"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1048008-women-elastic-side-pocket-yoga-running-leggings loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1048008-women-elastic-side-pocket-yoga-running-leggings"
                                                        class="grid-link__title">Women Elastic Side Pocket Yoga Running
                                                        Leggings</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $20.39
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420446584932"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420446584932">
                                                                <input type="hidden" name="id" value="31481277612132">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420446453860">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1066404_grande.jpg?v=1581075707"
                                                                    class="featured-image"
                                                                    alt="Women High Elastic Shaping Nine Pants Quick-dry Sport Leggings">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1066404_26925834_grande.jpg?v=1581075707"
                                                                class="hidden-feature_img"
                                                                alt="Women High Elastic Shaping Nine Pants Quick-dry Sport Leggings">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1066404-women-high-elastic-shaping-nine-pants-quick-dry-sport-leggings"
                                                        class="grid-link__title">Women High Elastic Shaping Nine Pants
                                                        Quick-dry Sport Leggings</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $24.45
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420446453860"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420446453860">
                                                                <input type="hidden" name="id" value="31481276891236">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420446322788">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1076716_grande.jpg?v=1581075696"
                                                                    class="featured-image"
                                                                    alt="Women Sports Ninth Leggings Patchwork Quick Dry Running Yoga Fitness Pants Legging">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1076716_26925824_grande.jpg?v=1581075696"
                                                                class="hidden-feature_img"
                                                                alt="Women Sports Ninth Leggings Patchwork Quick Dry Running Yoga Fitness Pants Legging">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1076716-women-sports-ninth-leggings-patchwork-quick-dry-running-yoga-fitness-pants-legging"
                                                        class="grid-link__title">Women Sports Ninth Leggings Patchwork
                                                        Quick Dry Running Yoga Fitness Pants Legging</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $19.09
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420446322788"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420446322788">
                                                                <input type="hidden" name="id" value="31481275875428">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420446224484">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1090489_grande.jpg?v=1581075688"
                                                                    class="featured-image"
                                                                    alt="Plus Size Elastic High Waist Printing Abdomen Panties Seamless Postnatal Shapewear Pants For Women">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1090489_26925795_grande.jpg?v=1581075688"
                                                                class="hidden-feature_img"
                                                                alt="Plus Size Elastic High Waist Printing Abdomen Panties Seamless Postnatal Shapewear Pants For Women">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1090489-plus-size-elastic-high-waist-printing-abdomen-panties-seamless-postnatal-shapewear-pants-for-women"
                                                        class="grid-link__title">Plus Size Elastic High Waist Printing
                                                        Abdomen Panties Seamless Postnatal Shapewear Pants For Women</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $22.40
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420446224484"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420446224484">
                                                                <input type="hidden" name="id" value="31481274499172">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420445962340">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1103537_grande.jpg?v=1581075666"
                                                                    class="featured-image"
                                                                    alt="Women Plus Size Comfy Elastic Modal Sweatpants Soft Knickers Jogger Yoga Sport Long Pants">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1103537_26925785_grande.jpg?v=1581075666"
                                                                class="hidden-feature_img"
                                                                alt="Women Plus Size Comfy Elastic Modal Sweatpants Soft Knickers Jogger Yoga Sport Long Pants">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1103537-women-plus-size-comfy-elastic-modal-sweatpants-soft-knickers-jogger-yoga-sport-long-pants"
                                                        class="grid-link__title">Women Plus Size Comfy Elastic Modal
                                                        Sweatpants Soft Knickers Jogger Yoga Sport Long Pants</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $25.08
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420445962340"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420445962340">
                                                                <input type="hidden" name="id" value="31481272139876">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>












                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420445667428">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/leggings/products/c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1123714_grande.jpg?v=1581075633"
                                                                    class="featured-image"
                                                                    alt="Stretchy Fitness Pants Yoga Gym Sport Comfy Leggings">
                                                            </span>
                                                            <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/1123714_26925775_grande.jpg?v=1581075633"
                                                                class="hidden-feature_img"
                                                                alt="Stretchy Fitness Pants Yoga Gym Sport Comfy Leggings">
                                                        </div>

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings loading"
                                                                    style="display: none;"><a
                                                                        class="added-wishlist add_to_wishlist"
                                                                        href="/pages/wishlist"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">View
                                                                            Wishlist</span></a></div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>

                                                <div class="product-detail">

                                                    <a href="/collections/leggings/products/c122-1123714-stretchy-fitness-pants-yoga-gym-sport-comfy-leggings"
                                                        class="grid-link__title">Stretchy Fitness Pants Yoga Gym Sport
                                                        Comfy Leggings</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $26.50
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420445667428"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420445667428">
                                                                <input type="hidden" name="id" value="31481269813348">
                                                                <a class="add-cart-btn btn">
                                                                    <i class="fa fa-shopping-cart"></i>Add to Cart
                                                                </a>
                                                            </form>


                                                        </li>



                                                    </ul>

                                                </div>
                                            </div>

                                        </li>


                                    </ul>

                                </div>

                                <div class="text-center padding">

                                    <ul class="pagination-custom text-center">

                                        <li class="disabled"><span class="fa fa-angle-left"></span></li>





                                        <li class="active"><span>1</span></li>




                                        <li>
                                            <a href="/collections/leggings?page=2" title="">2</a>
                                        </li>




                                        <li><a class="enable-arrow" href="/collections/leggings?page=2"
                                                title="Next »"><span class="fa fa-angle-right"></span></a></li>

                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</main>


<?php include_once('includes/footer.php'); ?>