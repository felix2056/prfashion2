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
        <h1>Stingers</h1>
        <a href="/" title="Back to the frontpage">Home</a>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>

        <span>Stingers</span>
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
                                            id="product-4420430495844">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU591821_grande.jpg?v=1581073596"
                                                            class="featured-image"
                                                            alt="Mens Fashion Summer Sleeveless Vest Hooded Sport Cotton Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku591821-mens-fashion-summer-sleeveless-vest-hooded-sport-cotton-tank-tops"
                                                        class="grid-link__title">Mens Fashion Summer Sleeveless Vest
                                                        Hooded Sport Cotton Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $37.71
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430495844"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430495844">
                                                                <input type="hidden" name="id" value="31481144410212">
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
                                            id="product-4420430430308">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU623319_grande.jpg?v=1581073592"
                                                            class="featured-image"
                                                            alt="Mens Fitness Training Slim Fit Colorful Camo Printed Sport Elastic Nylon Quick Dry Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku623319-mens-fitness-training-slim-fit-colorful-camo-printed-sport-elastic-nylon-quick-dry-tank-tops"
                                                        class="grid-link__title">Mens Fitness Training Slim Fit Colorful
                                                        Camo Printed Sport Elastic Nylon Quick Dry Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $24.14
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430430308"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430430308">
                                                                <input type="hidden" name="id" value="31481143689316">
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
                                            id="product-4420430397540">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU697503_grande.jpg?v=1581073589"
                                                            class="featured-image"
                                                            alt="Mens Lattice Net Yarn Breathable O-neck Sleeveless Slim Fit Casual Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku697503-mens-lattice-net-yarn-breathable-o-neck-sleeveless-slim-fit-casual-tank-tops"
                                                        class="grid-link__title">Mens Lattice Net Yarn Breathable O-neck
                                                        Sleeveless Slim Fit Casual Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $30.47
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430397540"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430397540">
                                                                <input type="hidden" name="id" value="31481143492708">
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
                                            id="product-4420430364772">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU673123_grande.jpg?v=1581073587"
                                                            class="featured-image"
                                                            alt="Mens Summer Camo Printed Casual Tank Tops Stylish Sleeveless Hooded Vest">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest loading"
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

                                                    <a href="/collections/stringers/products/q575-sku673123-mens-summer-camo-printed-casual-tank-tops-stylish-sleeveless-hooded-vest"
                                                        class="grid-link__title">Mens Summer Camo Printed Casual Tank
                                                        Tops Stylish Sleeveless Hooded Vest</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $48.40
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430364772"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430364772">
                                                                <input type="hidden" name="id" value="31481143230564">
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
                                            id="product-4420430266468">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku867860-slim-fit-hooded-sport-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU867860_grande.jpg?v=1581073580"
                                                            class="featured-image"
                                                            alt="Slim Fit Hooded Sport Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku867860-slim-fit-hooded-sport-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku867860-slim-fit-hooded-sport-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku867860-slim-fit-hooded-sport-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku867860-slim-fit-hooded-sport-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku867860-slim-fit-hooded-sport-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku867860-slim-fit-hooded-sport-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku867860-slim-fit-hooded-sport-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku867860-slim-fit-hooded-sport-tank-tops"
                                                        class="grid-link__title">Slim Fit Hooded Sport Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $39.87
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430266468"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430266468">
                                                                <input type="hidden" name="id" value="31481142247524">
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
                                            id="product-4420430135396">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU642118_grande.jpg?v=1581073574"
                                                            class="featured-image"
                                                            alt="Mens Sexy Fitness Training Tight Vest High-elastic Sleeveless Sport Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku642118-mens-sexy-fitness-training-tight-vest-high-elastic-sleeveless-sport-tank-tops"
                                                        class="grid-link__title">Mens Sexy Fitness Training Tight Vest
                                                        High-elastic Sleeveless Sport Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $21.57
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430135396"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430135396">
                                                                <input type="hidden" name="id" value="31481141428324">
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
                                            id="product-4420430102628">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU632431_grande.jpg?v=1581073570"
                                                            class="featured-image"
                                                            alt="Casual Summer Sleeveless Slim Fit Cotton Hooded Vest Tank Top for Men">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men loading"
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

                                                    <a href="/collections/stringers/products/q575-sku632431-casual-summer-sleeveless-slim-fit-cotton-hooded-vest-tank-top-for-men"
                                                        class="grid-link__title">Casual Summer Sleeveless Slim Fit
                                                        Cotton Hooded Vest Tank Top for Men</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $29.01
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430102628"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430102628">
                                                                <input type="hidden" name="id" value="31481141035108">
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
                                            id="product-4420430037092">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU578815_grande.jpg?v=1581073566"
                                                            class="featured-image"
                                                            alt="Mens Sexy Basic Training Tops Cotton Sports Fitness Vest Solid Color Skinny Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku578815-mens-sexy-basic-training-tops-cotton-sports-fitness-vest-solid-color-skinny-tank-tops"
                                                        class="grid-link__title">Mens Sexy Basic Training Tops Cotton
                                                        Sports Fitness Vest Solid Color Skinny Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $20.50
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430037092"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430037092">
                                                                <input type="hidden" name="id" value="31481140346980">
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
                                            id="product-4420430004324">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU637480_grande.jpg?v=1581073561"
                                                            class="featured-image"
                                                            alt="Mens Sexy Fitness Training Sleeveless Visible Sport Nylon Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku637480-mens-sexy-fitness-training-sleeveless-visible-sport-nylon-tank-tops"
                                                        class="grid-link__title">Mens Sexy Fitness Training Sleeveless
                                                        Visible Sport Nylon Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $31.37
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420430004324"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420430004324">
                                                                <input type="hidden" name="id" value="31481139757156">
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
                                            id="product-4420429971556">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU658830_grande.jpg?v=1581073556"
                                                            class="featured-image"
                                                            alt="SUPERBODY Mens Quick-drying Solid Color Loose Fit Casual Sport Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku658830-superbody-mens-quick-drying-solid-color-loose-fit-casual-sport-tank-tops"
                                                        class="grid-link__title">SUPERBODY Mens Quick-drying Solid Color
                                                        Loose Fit Casual Sport Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $25.27
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420429971556"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420429971556">
                                                                <input type="hidden" name="id" value="31481139462244">
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
                                            id="product-4420429938788">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU234255_grande.jpg?v=1581073552"
                                                            class="featured-image"
                                                            alt="Mens Body Slimming Tummy Shaper Belly Waist Shapewears Sports Tights Vests">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests loading"
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

                                                    <a href="/collections/stringers/products/q575-sku234255-mens-body-slimming-tummy-shaper-belly-waist-shapewears-sports-tights-vests"
                                                        class="grid-link__title">Mens Body Slimming Tummy Shaper Belly
                                                        Waist Shapewears Sports Tights Vests</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $25.35
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420429938788"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420429938788">
                                                                <input type="hidden" name="id" value="31481139101796">
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
                                            id="product-4420429840484">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/stringers/products/q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/SKU591826_grande.jpg?v=1581073547"
                                                            class="featured-image"
                                                            alt="Mens Fashion Hooded Sleeveless Zipper Vest Big Pocket Sports Cotton Tank Tops">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops loading"
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

                                                    <a href="/collections/stringers/products/q575-sku591826-mens-fashion-hooded-sleeveless-zipper-vest-big-pocket-sports-cotton-tank-tops"
                                                        class="grid-link__title">Mens Fashion Hooded Sleeveless Zipper
                                                        Vest Big Pocket Sports Cotton Tank Tops</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $35.14
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420429840484"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420429840484">
                                                                <input type="hidden" name="id" value="31481138282596">
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
                                            <a href="/collections/stringers?page=2" title="">2</a>
                                        </li>



                                        <li>
                                            <a href="/collections/stringers?page=3" title="">3</a>
                                        </li>



                                        <li>
                                            <a href="/collections/stringers?page=4" title="">4</a>
                                        </li>




                                        <li><a class="enable-arrow" href="/collections/stringers?page=2"
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