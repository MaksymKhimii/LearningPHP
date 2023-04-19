<?php

$cookie_name = 'username';
$cookie_value = 'Admin';
setcookie($cookie_name, $cookie_value);

if(isset($_COOKIE[$cookie_name])){
    echo 'Cookie: '.$_COOKIE[$cookie_name];
}

setcookie($cookie_name, $cookie_value, -3600);