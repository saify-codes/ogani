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
                            <input type="text" placeholder="What do yo u need?" required>
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
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div> -->
        </div>
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="payment.php" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="lname" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Country<span>*</span></p>
                            <input type="text" name="country" required>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" placeholder="Street Address" class="checkout__input__add" required>
                            <input type="text" name="address2" cplaceholder="Apartment, suite, unite ect (optinal)">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="city" required>
                        </div>
                        <div class="checkout__input">
                            <p>Country/State<span>*</span></p>
                            <input type="text" name="state" required>
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text" name="postcode" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="tel" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="checkout__input">
                                    <p>Review</p>
                                    <input type="text" name="review" maxlength="25" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php
                                $total = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                    echo "<li>" . ucwords($item['name']) . "<span>$" . $item['price'] * $item['qty'] . "</span></li>";
                                    $total += $item['price'] * $item['qty'];
                                }
                                ?>
                            </ul>
                            <div class="checkout__order__total">Total <span>$<?php echo $total ?></span></div>
                          
                            <div>
                                <input type="radio" name="method" id="paypal" checked>
                                <label for="paypal">Paypal</label>
                            </div>
                            <div>
                                <input type="radio" name="method" id="gpay">
                                <label for="gpay">Gpay</label>
                            </div>
                            <div>
                                <input type="radio" name="method" id="cod">
                                <label for="COD">COD</label>
                            </div>
                            <button type="submit" name="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
<?php include 'includes/footer.inc.php' ?>