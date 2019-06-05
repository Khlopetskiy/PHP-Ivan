<?php
require 'functions.php';

$firstName = '';
$lastName = '';
$email = '';
$password = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parametrs = ['first_name', 'last_name', 'email', 'password'];

    foreach ( $parametrs as $parametr) {
        if ( empty($_POST[$parametr])) {
            die('Не найден елемент ' . $parametr);
        }
    }

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (saveUser($firstName, $lastName, $email, $password)) {
        $message = 'Пользователь зарегистрирован!';

    }
    else {
        $message = 'Ошибка при регистрации пользователя';
    }
}

include 'form.tpl.php';