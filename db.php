<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GameNotShop";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
} else {
     "Успех";
}
?>