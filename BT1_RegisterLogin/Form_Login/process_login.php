<?php
$registered_username = $registered_pasword = "";
if (isset($_GET['username'])){
    $registered_username = $_GET['username'];
}
if (isset($_GET['password'])){
    $registered_pasword = $_GET['password'];
}

$username = $password ="";
if (isset($_POST['username'])){
    $username = $_POST['username'];
}
if (isset($_POST['password'])){
    $password = $_POST['password'];
}

if ($registered_username == $username && $registered_pasword == $password){
    header ('Location: welcome.php');
    die();
} else if ($username!= ""){
    echo '<h1 style="color:red; text-align:center">Your account or password is incorrect</h1';
}