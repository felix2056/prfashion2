<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/womencloth_cat.php'); ?>


<?php
    $products = json_decode(getAllWomendress(), true);
?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div class="gf-menu-device-wrapper">
        <div class="close-menu">x</div>
        <div class="gf-menu-device-container"></div>
    </div>
</nav>

<div class="wrapper-container">

    <?php include_once('../includes/nav.php'); ?>

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <h1>Women dresses</h1>
        <a href="/" title="Back to the frontpage">Home</a>

        <span aria-hidden="true" class="breadcrumb__sep">/</span>

        <span>Women dresses</span>
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
                                <div class="products-grid-view">
                                    <?php if (count($products) > 0) : ?>
                                    <ul>
                                        <?php foreach ($products as $product) : ?>
                                        <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                            id="product-4420431773796">
                                            <div class="products product-hover-8">
                                                <div class="product-container">
                                                    <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                                                        class="grid-link">

                                                        <div class="ImageOverlayCa"></div>

                                                        <div class="reveal">
                                                            <span class="product-additional">
                                                                <img src="<?php echo $product['featured_image'] ?>"
                                                                    class="featured-image"
                                                                    alt="<?php echo $product['title'] ?>">
                                                            </span>
                                                            <img src="<?php echo $product['featured_image'] ?>"
                                                                class="hidden-feature_img"
                                                                alt="<?php echo $product['title'] ?>">
                                                        </div>

                                                    </a>

                                                    <div class="product_right_tag"></div>

                                                    <div class="product-button">
                                                        <a
                                                            href="/products/c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops">
                                                            <i class="icon-link" aria-hidden="true"></i>
                                                        </a>


                                                        <a href="javascript:void(0)"
                                                            id="c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops"
                                                            class="quick-view-text">
                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                        </a>



                                                        <div class="add-to-wishlist">
                                                            <div class="show">
                                                                <div
                                                                    class="default-wishbutton-c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops loading">
                                                                    <a class="add-in-wishlist-js"
                                                                        href="c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops"><i
                                                                            class="icon-heart"></i><span
                                                                            class="tooltip-label">Add to
                                                                            wishlist</span></a>
                                                                </div>
                                                                <div class="loadding-wishbutton-c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops loading"
                                                                    style="display: none; pointer-events: none"><a
                                                                        class="add_to_wishlist"
                                                                        href="c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops"><i
                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                </div>
                                                                <div class="added-wishbutton-c122-1126068-fashion-mens-sports-breathable-low-slits-fitness-vest-casual-bodybuilding-sleeveless-tank-tops loading"
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
                                                    <a href="/products/single.php?product=<?php echo $product['id'] ?>"
                                                        class="grid-link__title"><?php echo $product['title'] ?></a>
                                                    <div class="grid-link__meta">
                                                        <div class="product_price">
                                                            <div class="grid-link__org_price">
                                                                <?php echo $product['price'] ?>
                                                            </div>
                                                        </div>
                                                        <span class="shopify-product-reviews-badge"
                                                            data-id="4420431773796"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include_once('../includes/footer.php'); ?>