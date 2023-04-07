<?php
include '../db/productModel.php';

if (isset($_GET['id'])) {
    Product::remove($_GET['id']);
}
header("location:products.php");
?>