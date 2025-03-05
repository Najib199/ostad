<?php

define("USERNAME","admin");
define("PASSWORD","12345");

echo "enter Username : ";
$Username = readline();

echo "Enter Password : ";
$Password = readline();

if (empty($Username) || empty($Password)){
    echo "Username or Password is Blank";
} else{
    if($Username === USERNAME && PASSWORD ){
        echo "Login Succesful ! \n";
    }else{
        echo "Invalid Usernaem or Password ! \n";
    }
}