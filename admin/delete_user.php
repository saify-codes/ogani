<?php
include '../db/userModel.php';

if (isset($_GET['id'])) {
    User::removeUser($_GET['id']);
}
header("location:accounts.php");
?>