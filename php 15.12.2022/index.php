<?php
session_start();
ob_start();
require 'options.php';

if (isset($_SESSION['time']) && time() > $_SESSION['time']){
    session_destroy();
    header('Location:/php 15.12.2022/session-ended.php');
} else {
    $_SESSION['time'] = time() + 10;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

    if (isset($_SESSION['username'])){
        include 'admin.php';
    } else {
        include 'login.php';
    }

?>

</body>
</html>