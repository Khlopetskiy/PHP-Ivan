<?php

spl_autoload_register(function ($className) {
    $fileName = __DIR__ . '/classes/' . $className . '.php';
    require $fileName;
});
$message = '';
$form = new Form();
$form->add(new InputElement('first_name', 'Имя'));
$form->add(new InputElement('last_name', 'Фамилия'));
$form->add(new EmailElement('email', 'Email'));
$form->add(new PasswordElement('password', 'Пароль'));
$form->add(new ButtonElement('submit', 'Зарегистрировать'));

require 'opp_form.tpl.php';