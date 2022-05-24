<?php
    $hovaten = '';
    if(isset($_GET['name'])){
        $hovaten = $_GET['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to learn PHP</title>
</head>
<body>
    <h1 style="color: red" >Chúc mừng <font style="color: blue"><?=$hovaten?></font> đã đăng ký tài khoản thành công !</h1>
</body>
</html>