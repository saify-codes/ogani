<?php

require_once 'connection.php';

class Review
{
    public function __construct(private $name, private $email, private $review)
    {
    }


    public function add(): void
    {
        global $connection;
        $sql = "insert into reviews values (null,'{$this->name}','{$this->email}','{$this->review}')";
        mysqli_query($connection, $sql);
    }

    public static function removeReview($id): void
    {
        global $connection;
        $sql = "delete from reviews where id = '$id'";
        mysqli_query($connection, $sql);
    }
    public static function getAllReview():array{
        global $connection;
        $sql = "select * from reviews";
        $reviews = mysqli_query($connection, $sql);
        return mysqli_fetch_all($reviews);
    }
       
}
