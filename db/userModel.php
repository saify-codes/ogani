<?php

require_once 'connection.php';

class User
{
    public function __construct(private $email, private $pass, private $name = "")
    {
        $this->pass = sha1($pass);
    }

    public function exists(): bool
    {
        global $connection;
        $sql = "select * from users where email = '{$this->email}' and password = '{$this->pass}'";
        $users = mysqli_query($connection, $sql);
        return mysqli_num_rows($users) > 0 ? true : false;
    }

    public function create(): bool
    {
        global $connection;
        $sql = "select * from users where email = '{$this->email}'";
        $users = mysqli_query($connection, $sql);
        if (mysqli_num_rows($users) > 0) {
            return false;
        } else {
            $sql = "insert into users values (null,'{$this->name}','{$this->email}','{$this->pass}')";
            mysqli_query($connection, $sql);
            return true;
        }
    }

    public static function removeUser($id): void
    {
        global $connection;
        $sql = "delete from users where user_id = '$id'";
        mysqli_query($connection, $sql);
    }

    public static function getUser($email): array
    {
        global $connection;
        $sql = "select * from users where email = '$email'";
        $users = mysqli_query($connection, $sql);
        $user = mysqli_fetch_assoc($users);
        return $user;
    }

    public static function getAllUsers():array{
        global $connection;
        $sql = "select * from users";
        $users = mysqli_query($connection, $sql);
        $users = mysqli_fetch_all($users);
        return $users;
    }
}
