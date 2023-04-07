<?php
const host = "localhost";
const username = "root";
const pass = null;
const database = "organo";

$connection = mysqli_connect(host,username,pass,database) or die("unable to stablish connection");
?>