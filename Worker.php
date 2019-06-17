<?php


class worker
{
public $name = "";
public $age = "";
public $salary = "";
}

$worker = new worker();
$worker->name = "Ivan";
$worker->age = 25;
$worker->salary = 1000;

$worker2 = new worker();
$worker2->name = "Vasja";
$worker2->age = 26;
$worker2->salary = 2000;

echo "Сумма зарплат Ивана и Васи: " . ($worker->salary + $worker2->salary) . " грн." . "<br>";
echo "Сумма возрастов Ивана и Васи: " . ($worker->age + $worker2->age) . " год.";