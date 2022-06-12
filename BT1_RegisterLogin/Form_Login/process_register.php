<?php
$fullname = $username = $password = '';
if (isset($_POST['fullname'])){
    $fullname = $_POST['fullname'];
}
if (isset($_POST['username'])){
    $username = $_POST['username'];
}
if (isset($_POST['password'])){
    $password = $_POST['password'];
}
if ($username !="" && $password != ""){
    header ('Location: login.php?username='.$username.'&password='.$password);
    die();
}