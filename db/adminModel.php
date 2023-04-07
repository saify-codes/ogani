<?php

require_once 'connection.php';

class Admin
{
    public function __construct(private $username, private $pass)
    {
    }

    public function exists(): bool
    {
        global $connection;
        $sql = "select * from admin where username = '{$this->username}' and password = '{$this->pass}'";
        $users = mysqli_query($connection, $sql);
        return mysqli_num_rows($users) > 0 ? true : false;
    }

}
