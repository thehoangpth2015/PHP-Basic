<?php

    $fullname = $bithday = $address = $username = $password = $confirmation_password = "";
    if (isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }
    if (isset($_POST['bithday'])){
        $bithday = $_POST['bithday'];
    }
    if (isset($_POST['address'])){
        $address = $_POST['address'];
    }
    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    }
    if (isset($_POST['confirmation_password'])){
        $confirmation_password = $_POST['confirmation_password'];
    }

    if (empty($fullname)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập họ và tên !!!</h2>';
    } else if (empty($bithday)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập ngày sinh !!!</h2>';
    } else if (empty($address)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập địa chỉ !!!</h2>';
    } else if (empty($username)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập tên đăng nhập !!!</h2>';
    } else if (empty($password)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập mật khẩu !!!</h2>';
    } else if (empty($confirmation_password)){
        echo '<h2 style="color:red; text-align:center">Bạn chưa nhập lại mật khẩu !!!</h2>';
    }

    if ($password == $confirmation_password && $username != "" && $password !=""){
        header ('location: login.php?username='.$username.'&password='.$password);
        die();
    } else {
        echo '<h2 style="color:red; text-align:center">bạn nhập lại mật khẩu không chính xác</h2>';
    }
