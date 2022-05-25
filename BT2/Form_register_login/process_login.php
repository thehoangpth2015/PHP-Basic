<?php
    $registed_username = $registed_password = "";

    if (isset($_GET['username'])){
        $registed_username = $_GET['username'];
    }
    if (isset($_GET['password'])){
        $registed_password = $_GET['password'];
    }

    $username = $password ="";
    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if ($username == $registed_username && $password == $registed_password){
        header ('Location: welcome.php');
        die(); 
    } else {
        echo '<h4 style="color:red; text-align:center">Your account or password is incorret<h4/>';
    }