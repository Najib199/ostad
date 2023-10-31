<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'role' => 'user', // Set the default role to 'user'
    ];


    $_SESSION['user'] = $user;
    header('Location: login.php');
}
?>
