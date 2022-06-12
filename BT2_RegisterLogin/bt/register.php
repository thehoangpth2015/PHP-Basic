<?php
    require_once ('process_register.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Đăng ký</title>
</head>

<style>
    *{
        font-family: 'segoe ui light';
    }
    .container{
        width: 600px;
        height: auto;
        
        margin:auto;
        margin-top: 20px;
        padding: 20px;
    }
    .tt_register{
        
        font-size:50px;
        text-align:center;
        font-weight: bold;
    }
    .col-auto label{
        font-size:25px;
    }
    .btn_sm{
        margin-top:30px;
        
    }
    .contain_sm{
        text-align:center;
    }
</style>
<body>
    <div class="container bg-info">
        <h1 class="tt_register text-success">Đăng ký tài khoản</h1>
        <form method="POST" class="contain">
            <div class="col-auto">
                <label class="form-label" for="fullname">Họ và Tên:</label>
                <input class="form-control" type="text" name="fullname" id="fullname">
            </div>
            <div class="col-auto">
                <label class="form-label" for="bithday">Ngày sinh:</label>
                <input class="form-control" type="date" name="bithday" id="bithday">
            </div>
            <div class="col-auto">
                <label class="form-label" for="address">Địa chỉ:</label>
                <input class="form-control" type="text" name="address" id="address">
            </div>
            <div class="col-auto">
                <label class="form-label" for="username">Tên đăng nhập:</label>
                <input class="form-control" type="text" name="username" id="username">
            </div>
            <div class="col-auto">
                <label class="form-label" for="password">Mật khẩu:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="col-auto">
                <label class="form-label" for="confirmation_password">Nhập lại mật khẩu:</label>
                <input class="form-control" type="password" name="confirmation_password" id="confirmation_password">
            </div>
            <div class="contain_sm">
                <button class="btn_sm btn btn-danger w-25 fs-3" type="submit">Đăng ký</button>
            </div>
        </form>
    </div>
</body>
</html>
