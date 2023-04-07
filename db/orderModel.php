<?php

require_once 'connection.php';

class Order
{
    public function __construct(private $items, private $price, private $quantities, private $payment_id)
    {
    }

    public function add(): void
    {
        global $connection;
        $user_id = $_SESSION["logged_in"]["user_id"];
        $sql = "insert into orders values (null,'".implode(',',$this->items)."','{$this->price}','".implode(',',$this->quantities)."','1','$user_id','{$this->payment_id}')";
        mysqli_query($connection, $sql);
    }

    

    public static function getAllOrders():array{
        global $connection;
        $sql = "select id,name,items,price,qty,status from `orders` join users using (user_id)";
        $orders = mysqli_query($connection, $sql);
        $orders = mysqli_fetch_all($orders);
        return $orders;
    }

    public static function getSingleOrder($id):?array{
        global $connection;
        $sql = "select * from `orders` join payments using (payment_id) where id = $id";
        $orders = mysqli_query($connection, $sql);
        $orders = mysqli_fetch_assoc($orders);
        return $orders;
    }

    public static function updateStatus($id, $status):void{
        global $connection;
        $sql = "update orders set status = $status where id = $id";
        echo $sql;;
        mysqli_query($connection, $sql);
        
    }
}
