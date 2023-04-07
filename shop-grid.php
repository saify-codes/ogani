<?php include 'includes/header.inc.php' ?>
<?php include 'db/productModel.php' ?>
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <?php
                        $categories = Product::getAllCategories();
                        foreach ($categories as $category) {
                            echo "<li><a href='shop-grid.php?category={$category[0]}'>{$category[0]}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="shop-grid.php" method="post">
                            <input type="text" name="q" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Organi Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
                        <ul>
                            <?php
                            $categories = Product::getAllCategories();
                            foreach ($categories as $category) {
                                echo "<li><a href='shop-grid.php?category={$category[0]}'>{$category[0]}</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-1.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Dried Fruit</span>
                                        <h5><a href="#">Raisin’n’nuts</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-2.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Vegetables</span>
                                        <h5><a href="#">Vegetables’package</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-3.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Dried Fruit</span>
                                        <h5><a href="#">Mixed Fruitss</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-4.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Dried Fruit</span>
                                        <h5><a href="#">Raisin’n’nuts</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-5.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Dried Fruit</span>
                                        <h5><a href="#">Raisin’n’nuts</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-6.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Dried Fruit</span>
                                        <h5><a href="#">Raisin’n’nuts</a></h5>
                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <!-- <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>
                                        <?php
                                        if (isset($_POST['q']) and !empty(trim($_POST['q']))) {
                                            echo count(Product::getAllProducts(search: $_POST['q']));
                                        } else {
                                            if (isset($_GET['category']) and !empty(trim($_GET['category']))) {
                                                echo count(Product::getAllProducts(category: $_GET['category']));
                                            } else {
                                                echo count(Product::getAllProducts());
                                            }
                                        }

                                        ?>
                                    </span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if (isset($_POST['q']) and !empty(trim($_POST['q']))) {
                        $products = Product::getAllProducts(search: $_POST['q']);
                    } else {
                        if (isset($_GET['category']) and !empty(trim($_GET['category']))) {
                            $products = Product::getAllProducts(category: $_GET['category']);
                        } else {
                            $products = Product::getAllProducts();
                        }
                    }

                    foreach ($products as $product) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="storage/<?php echo $product[4] ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="manage_wishlist.php?add=<?php echo $product[0] ?>"><i class="fa fa-heart"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-retweet"></i></a></li> -->
                                        <li><a href="cart.php?add=<?php echo $product[0] ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="product_detail.php?id=<?php echo $product[0] ?>"><?php echo $product[1] ?></a></h6>
                                    <h5>$<?php echo $product[2] ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-5.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Crab Pool Security</a></h6>
                                <h5>$30.00</h5>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
<?php include 'includes/footer.inc.php' ?>