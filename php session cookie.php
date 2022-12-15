<?php

session_start();

/*$_SESSION['member'] = [
    'Username' => 'Alper',
    'password' => '123'
];*/

//print_r($_SESSION);

//setcookie('member[id]', 1, time() + 86400);
//setcookie('member[Username]', 'Alper', time() + 86400);
//setcookie('member[password]', '123', time() + 86400);

print_r($_COOKIE);

?>