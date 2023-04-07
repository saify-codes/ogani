<?php

require_once 'connection.php';

class Product
{
    public function __construct(private $name, private $price, private $qty, private $img, private $category, private $description = null, private $allergy = null)
    {
    }

    public function add(): bool
    {
        global $connection;
        $sql = "select * from products where name = '{$this->name}'";
        $users = mysqli_query($connection, $sql);
        if (mysqli_num_rows($users) > 0) {
            return false;
        } else {
            $sql = "insert into products values (null,'{$this->name}','{$this->price}','{$this->qty}','{$this->img}','{$this->category}','{$this->description}','{$this->allergy}')";
            mysqli_query($connection, $sql);
            return true;
        }
    }

    public static function remove($id)
    {
        global $connection;
        $sql = "delete from products where id = '$id'";
        mysqli_query($connection, $sql);
    }

    public static function update($id, $qty)
    {
        global $connection;
        $sql = "update products set qty = '$qty' where id = '$id'";
        mysqli_query($connection, $sql);
    }

    public static function getAllProducts($limit = null, $search = null, $category = null): array
    {
        global $connection;
        if ($limit) {
            $sql = "select * from products where qty > 0 limit $limit";
        } else {
            $sql = "select * from products where qty > 0";
        }
        if ($search) {
            $sql = "select * from products where qty > 0 and name like '$search%'";
        }
        if ($category) {
            $sql = "select * from products where qty > 0 and category = '$category'";
        }
        $products = mysqli_query($connection, $sql);
        $products = mysqli_fetch_all($products);
        return $products;
    }
    public static function getAllCategories(): array
    {
        global $connection;

        $sql = "select distinct category from products";
        $categories = mysqli_query($connection, $sql);
        $categories = mysqli_fetch_all($categories);
        return $categories;
    }
    public static function getSingleProduct($id): ?array
    {
        global $connection;
        $sql = "select id,name,price,qty as max ,img, description, allergy from products where id = '$id'";
        $products = mysqli_query($connection, $sql);
        $products = mysqli_fetch_assoc($products);
        return $products;
    }
}
