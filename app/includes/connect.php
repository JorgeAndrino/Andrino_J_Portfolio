<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'db_portfolio';

$conn = mysqli_connect($host, $username, $password, $db);

if(!$conn){
    echo "Error!";
    exit;
}



?>