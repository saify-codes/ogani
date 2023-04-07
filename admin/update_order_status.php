<?php
include "../db/orderModel.php";

print_r(isset($_POST['order_id']));
print_r(isset($_POST['status']));
if (isset($_POST['submit'])) {
    Order::updateStatus($_POST['order_id'],$_POST['status']);
    // header("location:order_detail.php?id={$_POST['order_id']}");
    header("location:orders.php");
}else{
    header("location:orders.php");
}
?>