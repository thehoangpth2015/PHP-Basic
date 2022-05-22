<?php

    // xy ly lay du lieu qua method: POST --- GET tuong tu thou hihi
    if (!empty($_POST)){
        $Fullname = $_POST['fullname'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        echo $Fullname.'<br/>'.$Email.'<br/>'.$Password;
    }

    //xu ly lay du lieu qua method: GET
    if (!empty($_POST)){
        $Fullname = $_POST['fullname'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        echo $Fullname.'<br/>'.$Email.'<br/>'.$Password;
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Register</title>

    <style>
        .register{
            width: 500px;
            height: fit-content;
            background-color: antiquewhite;
            margin: 30px auto;
            padding: 15px;
        }
        h5{
            text-align: center;
            width: 100%;
            margin-bottom: 15px;
        }
        .btn_submit{
            
        }
    </style>

</head>
<body>
    <div class="register">
        <form method="POST">
            <h5>Form Register</h5>
            <div class="col-auto">
                <label class="form-label">Name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="rgtRow">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="rgtRow">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-outline-success my-3 btn_submit">Register</button>  
          
        </form>
    </div>
</body>
</html>

