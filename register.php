<?php
require_once ('db.php');
$login = $_POST['login'];
$pass = $_POST['password'];
$rpass = $_POST['repeatpass'];




if($pass != $rpass){
    echo "Пароли не совпадают";
} else{
    $sql = "INSERT INTO `fuck` (email,password) VALUES ('$login','$pass')";

    $conn -> query($sql);
}

