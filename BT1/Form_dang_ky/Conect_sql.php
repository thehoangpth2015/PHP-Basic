<?php
//ket noi mysql
// $severname = 'localhost';
// $username = 'root';
// $password = '';

$connect = mysqli_connect('localhost', 'root', '');
if ($connect) {
    echo 'Connect success';
}else {
    echo 'Connect failed';
}

//tao 1 cai data base
$sql = "CREATE DATABASE database_name";
$connect->query($sql);

//chon 1 csdl
$connect->query("USE database_name MyGuest");

$create = "CREATE TABLE";
$connect->query();