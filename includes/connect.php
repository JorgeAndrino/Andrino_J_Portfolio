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

$query="SELECT project FROM tbl_gallery WHERE ID='1' ";
$query=mysql_query($conn,$query);
 
$image=mysqli_fetch_array($query);

?>

