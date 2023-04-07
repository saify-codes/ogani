<?php

require_once 'connection.php';

class Order
{    

    public static function getAllOrders():array{
        global $connection;
        $user_id = $_SESSION['logged_in']["user_id"];
        $sql = "select * from `orders` where user_id = $user_id";
        $orders = mysqli_query($connection, $sql);
        $orders = mysqli_fetch_all($orders);
        return $orders;
    }

}
