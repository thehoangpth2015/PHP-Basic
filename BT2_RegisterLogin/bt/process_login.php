<?php
    $registed_username = $registed_password ="";
    
    if (isset($_GET['username'])){
        $registed_username = $_GET['username'];
    }
    if (isset($_GET['password'])){
        $registed_password = $_GET['password'];
    }

    $username = $password = "";

    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    }

    if ($registed_username == $username && $registed_password == $password){
        header ('location: welcome.php');
        die();
    } else {
        echo '<h2 style="color:red; text-align:center">Tên truy cập hoặc mật khẩu không chính xác</h2>';
    }