<?php

$parametrs = ['operand1', 'operand2', 'operand3',];

foreach ($parametrs as $parametr) {
    if (empty($_POST[$parametr])) {
        die('Не найден элемент ' . $parametr);
    }
}


$operand1 = floatval($_POST['operand1']);
$operand2 = floatval($_POST['operand2']);
