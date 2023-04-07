<?php
include '../db/productModel.php';

if (isset($_POST['submit'])) {
    $name = trim(strtolower($_POST['name']));
    $price = trim(strtolower($_POST['price']));
    $qty = trim(strtolower($_POST['qty']));
    $category = trim(strtolower($_POST['category']));
    $description = trim(strtolower($_POST['description']));
    $allergy = trim(strtolower($_POST['allergy']));
    $filename = bin2hex(random_bytes(16)) . $_FILES['file']['name'];
    $product = new Product($name,$price,$qty,$filename,$category,$description,$allergy);
    move_uploaded_file($_FILES['file']['tmp_name'],"../storage/$filename");
    $product->add();
}
header("location:products.php");
?>