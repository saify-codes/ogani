<?php
session_start();
include 'db/productModel.php';

if(!isset($_SESSION['cart']))
    $_SESSION['cart'] = [];

if(isset($_REQUEST['add']) and is_numeric($_REQUEST['add'])){
    $product_id = $_REQUEST['add'];
    
    if(!key_exists($product_id,$_SESSION['cart'])){
        $product_detail = Product::getSingleProduct($product_id);
        $product_detail['qty'] = 1;
        
        if (is_null($product_detail)) {
            header("location:shop-grid.php");
        }else{
            $_SESSION['cart'][$product_id] = $product_detail;
            header("location:shop-grid.php");
        }
    }else{
        header("location:shop-grid.php");
    }
}else if(isset($_REQUEST['delete']) and is_numeric($_REQUEST['delete'])){
    $product_id = $_REQUEST['delete'];

    
    if(key_exists($product_id,$_SESSION['cart'])){
        unset($_SESSION['cart'][$product_id]);
        header("location:shoping-cart.php");
    }else{
        header("location:shoping-cart.php");
    }
}else if(isset($_REQUEST['update'])){

    print("<pre>");
    print_r($_REQUEST);
    foreach ($_REQUEST as $key => $qty) {
        if(key_exists($key,$_SESSION['cart'])){
            $_SESSION['cart'][$key]['qty'] = $qty;
        }
    }
    header("location:shoping-cart.php");
}else{
    header("location:shop-grid.php");
}
