<?php

require_once 'connection.php';

class Payment
{
    public function __construct(
        private $fname,
        private $lname,
        private $address,
        private $address2,
        private $city,
        private $state,
        private $postcode,
        private $phone,
        private $email,
        private $user_id
    ) {
    }

    public function add(): bool
    {
        global $connection;
        // $sql = "insert into payments values(fname	lname	address	address2	city	state	postcode	phone	email	user_id	order_id	)";
        $sql = "insert into payments(fname, lname, address, address2, city, state, postcode, phone, email, user_id) values(?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt,"sssssssssi",
        $this->fname,
        $this->lname,
        $this->address,
        $this->address2,
        $this->city,
        $this->state,
        $this->postcode,
        $this->phone,
        $this->email,
        $this->user_id);
        return mysqli_stmt_execute($stmt);
    }
        
}
