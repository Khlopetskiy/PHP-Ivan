<?php


class worker2
{
public $name = "";
public $age = "";
public $salary = "";

    public function setName($name){
        $this->name = $name;
    }

    public function getName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge($age) {
        $this->age = $age;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary($salary) {
        $this->salary = $salary;
    }
}

$worker = new worker2();
$worker->name = "Ivan";
$worker->age = 25;
$worker->salary = 1000;

$worker2 = new worker2();
$worker2->name = "Vasja";
$worker2->age = 26;
$worker2->salary = 2000;


echo "Сумма зарплат Ивана и Васи: " . ($worker->salary + $worker2->salary) . " грн." . "<br>";
echo "Сумма возрастов Ивана и Васи: " . ($worker->age + $worker2->age) . " год.";