<?php

$servername = 'localhost';
$username = 'root';
$password = '1';
$dbName = 'tabledatabase';

if(!$conn = mysqli_connect($servername, $username, $password, $dbName)){
    die("failed to connect");
}

