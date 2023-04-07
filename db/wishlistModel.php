<?php

require_once 'connection.php';

class Wishlist
{
    private $user_id;
    public function __construct(private $name = "", private $price = 0, private $img = "")
    {
        $this->user_id = $_SESSION["logged_in"]["user_id"];
    }

    public static function getAllItems(): ?array
    {
        global $connection;

        $user_id = (new Wishlist())->user_id;
        $sql = "select * from wishlist where user_id = '{$user_id}'";
        $items = mysqli_query($connection, $sql);
        return mysqli_fetch_all($items);
    }

    public function add(): bool
    {
        global $connection;

        $sql1 = "select * from wishlist where user_id = '{$this->user_id}' and name = '{$this->name}'";
        $items = mysqli_query($connection, $sql1);
        if (mysqli_num_rows($items) == 0) {
            $sql2 = "insert into wishlist values (null,'{$this->name}','{$this->price}','{$this->img}','{$this->user_id}')";
            mysqli_query($connection, $sql2);
            return true;
        } else {
            return false;
        }
    }

    public static function remove($id):void
    {
        global $connection;
        $sql = "delete from wishlist where id = '$id'";
        mysqli_query($connection, $sql);
    }

    public static function count():int
    {
        global $connection;

        $user_id = (new Wishlist())->user_id;
        $sql = "select * from wishlist where user_id = '{$user_id}'";
        $items = mysqli_query($connection, $sql);
        return mysqli_num_rows($items);
    }
}
