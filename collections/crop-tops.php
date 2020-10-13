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
        <h1>Crop Tops</h1>
        <a href="/" title="Back to the frontpage">Home</a>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>

        <span>Crop Tops</span>
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
                                            id="product-4420438294628">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/crop-tops/products/u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/240378503_grande.jpg?v=1581074762"
                                                            class="featured-image"
                                                            alt="Asymmetrical Butterfly Print Ombre Color Tank Top - White Xl">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl loading"
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

                                                    <a href="/collections/crop-tops/products/u213-240378503-asymmetrical-butterfly-print-ombre-color-tank-top-white-xl"
                                                        class="grid-link__title">Asymmetrical Butterfly Print Ombre
                                                        Color Tank Top - White Xl</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $22.25
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420438294628"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420438294628">
                                                                <input type="hidden" name="id" value="31481217548388">
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
                                            id="product-4420438229092">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/crop-tops/products/u213-253395903-zanstyle-round-neck-tank-top-black-s"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/253395903_grande.jpg?v=1581074759"
                                                            class="featured-image"
                                                            alt="ZAN.STYLE Round Neck Tank Top - Black S">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/u213-253395903-zanstyle-round-neck-tank-top-black-s">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="u213-253395903-zanstyle-round-neck-tank-top-black-s"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-u213-253395903-zanstyle-round-neck-tank-top-black-s loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="u213-253395903-zanstyle-round-neck-tank-top-black-s"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-u213-253395903-zanstyle-round-neck-tank-top-black-s loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="u213-253395903-zanstyle-round-neck-tank-top-black-s"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-u213-253395903-zanstyle-round-neck-tank-top-black-s loading"
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

                                                    <a href="/collections/crop-tops/products/u213-253395903-zanstyle-round-neck-tank-top-black-s"
                                                        class="grid-link__title">ZAN.STYLE Round Neck Tank Top - Black
                                                        S</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $19.52
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420438229092"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420438229092">
                                                                <input type="hidden" name="id" value="31481217122404">
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
                                            id="product-4420438196324">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/crop-tops/products/u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/255560619_grande.jpg?v=1581074755"
                                                            class="featured-image"
                                                            alt="ZAN.STYLE Sleeveless Swing Tunic Dress Tank Top - Army Green M">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a
                                                            href="/products/u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m loading"
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

                                                    <a href="/collections/crop-tops/products/u213-255560619-zanstyle-sleeveless-swing-tunic-dress-tank-top-army-green-m"
                                                        class="grid-link__title">ZAN.STYLE Sleeveless Swing Tunic Dress
                                                        Tank Top - Army Green M</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $19.01
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420438196324"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420438196324">
                                                                <input type="hidden" name="id" value="31481216663652">
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
                                            id="product-4420438163556">
                                            <div class="products product-hover-8">
                                                <div class="product-container">









                                                    <a href="/collections/crop-tops/products/u213-240464303-zanstyle-camisole-black-m"
                                                        class="grid-link">




                                                        <div class="ImageOverlayCa"></div>

                                                        <img src="//cdn.shopify.com/s/files/1/0145/2942/9604/products/240464303_grande.jpg?v=1581074750"
                                                            class="featured-image" alt="ZAN.STYLE Camisole - Black M">

                                                    </a>
                                                    <div class="product_right_tag  ">


                                                    </div>
                                                    <div class="product-button">

                                                        <a href="/products/u213-240464303-zanstyle-camisole-black-m">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>



                                                        <a href="javascript:void(0)"
                                                            id="u213-240464303-zanstyle-camisole-black-m"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-u213-240464303-zanstyle-camisole-black-m loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="u213-240464303-zanstyle-camisole-black-m"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a></div>
                                                                <div class="loadding-wishbutton-u213-240464303-zanstyle-camisole-black-m loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="u213-240464303-zanstyle-camisole-black-m"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-u213-240464303-zanstyle-camisole-black-m loading"
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

                                                    <a href="/collections/crop-tops/products/u213-240464303-zanstyle-camisole-black-m"
                                                        class="grid-link__title">ZAN.STYLE Camisole - Black M</a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">


                                                            <div class="grid-link__org_price">
                                                                $24.41
                                                            </div>


                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420438163556"></span>
                                                    </div>




                                                    <ul class="product-button">


                                                        <li>

                                                            <form action="/cart/add" method="post"
                                                                class="variants clearfix" id="cart-form-4420438163556">
                                                                <input type="hidden" name="id" value="31481216106596">
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


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</main>


<?php include_once('includes/footer.php'); ?>