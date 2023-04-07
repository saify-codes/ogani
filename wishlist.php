<?php include 'includes/header.inc.php' ?>
<?php include 'db/productModel.php' ?>
<?php
if (!isset($_SESSION['logged_in'])) {
    echo "<script>location='login.php'</script>";
    exit;
}
?>
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
                        <form action="#">
                            <input type="text" placeholder="What do yo u need?">
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
                    <h2>Wishlist</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <form action="cart.php" method="post" id="update_form"></form>
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (Wishlist::getAllItems() as $item) { ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img width="100" src="storage/<?php echo $item[3] ?>">
                                        <h5><?php echo $item[1] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        $<?php echo $item[2] ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="manage_wishlist.php?delete=<?php echo $item[0] ?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
<?php include 'includes/footer.inc.php' ?>