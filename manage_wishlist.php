<?php
session_start();
include 'db/wishlistModel.php';
include 'db/productModel.php';

if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = [];

if (!isset($_SESSION['logged_in'])){
    header("location:login.php");
    exit;
}
    

if (isset($_REQUEST['add']) and is_numeric($_REQUEST['add'])) {
    $product_id = $_REQUEST['add'];
    $product_detail = Product::getSingleProduct($product_id);
    $product_name = $product_detail['name'];
    $product_price = $product_detail['price'];
    $product_img = $product_detail['img'];
    $wishlist = new Wishlist($product_name,$product_price,$product_img);
    $wishlist->add();
    header("location:shop-grid.php");
    

} else if (isset($_REQUEST['delete']) and is_numeric($_REQUEST['delete'])) {
    $wishlist_item_id = $_REQUEST['delete'];
    Wishlist::remove($wishlist_item_id);
    header("location:wishlist.php");

} else {
    header("location:shop-grid.php");
}
