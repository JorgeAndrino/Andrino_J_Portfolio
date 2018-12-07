<?php

$host = 'localhost';
$user = 'root';
$pw = 'root';
$db = 'db_portfolio';

try {
    $conn = new PDO('mysql:host=localhost;dbname=db_portfolio', $user, $pw);
    //var_dump($conn);
} catch(PDOException $exception) {
    echo 'connect error!' . $exception->getMessage();
}
?>

