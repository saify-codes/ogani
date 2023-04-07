<?php
session_start();
include 'db/paymentModel.php';
include 'db/productModel.php';
include 'db/orderModel.php';
include 'db/reviewModel.php';

if (isset($_POST['submit']) and isset($_SESSION['logged_in']) and isset($_SESSION['cart'])) {
    if (count($_SESSION['cart']) > 0) {
        $user_id = $_SESSION['logged_in']['user_id'];
        $user_name = $_SESSION['logged_in']['name'];
        $user_email = $_SESSION['logged_in']['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postcode = $_POST['postcode'];
        $phone = $_POST['phone'];
        $email = $_POST['email']; 
        $review = trim($_POST['review']); 
        $items = [];
        $quantities = [];
        $total_price = 0;
        foreach ($_SESSION['cart'] as $product_id => $item) {
            Product::update($product_id, $item['qty']);
            $items[] = $item['name'];
            $quantities[] = $item['qty'];
            $total_price += $item['price'] * $item['qty'];
        }
        $payment = new Payment($fname, $lname, $address, $address2, $city, $state, $postcode, $phone, $email, $user_id);
        $payment->add();
        $payment_id = mysqli_insert_id($connection);
        $order = new Order($items, $total_price, $quantities, $payment_id);
        $order->add();
        if(!empty($review)){
            (new Review($user_name,$user_email,$review))->add();
        }
        unset($_SESSION['cart']);
    }
}
header("location:index.php");
