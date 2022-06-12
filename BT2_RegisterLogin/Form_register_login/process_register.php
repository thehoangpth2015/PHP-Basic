<?php
    $fullname = $bithday = $username = $password = $conformation_password = "";

    if (!empty($_POST)){
        if (isset($_POST['fullname'])){
            $fullname = $_POST['fullname'];
        }
        if (isset($_POST['bithday'])){
            $bithday = $_POST['bithday'];
        }
    
        if (isset($_POST['username'])){
            $username = $_POST['username'];
        }
        if (isset($_POST['password'])){
            $password = $_POST['password'];
        }
        if (isset($_POST['conformation_password'])){
            $conformation_password = $_POST['conformation_password'];
        }
    }
    
    if (empty($fullname)){
        echo '<h4 style="color:red">Enter your fullname<h4/>';
    } else if (empty($bithday)){
        echo '<h4 style="color:red">Enter your bithday<h4/>';
    }else if (empty($username)){
        echo '<h4 style="color:red">Enter your username<h4/>';
    }else if (empty($password)){
        echo '<h4 style="color:red">Enter your password<h4/>';
    }else if (empty($conformation_password)){
        echo '<h4 style="color:red; text-align:center">Enter your conformation_password<h4/>';
    }

    if ($username !="" && $password !=""){
        header ('Location: login.php?username='.$username.'&password='.$password);
        die();
    }