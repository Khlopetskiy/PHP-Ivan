<?php


class worker3
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
        if ($this->checkAge($age)) {
            return $this->age = $age;
        }
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
    private function checkAge($age) {
        if ($age < 100) {
            return true;
        }
        else {
            return false;
        }

}
}

$worker = new worker3();
$worker->name = "Ivan";
$worker->age = 25;
$worker->salary = 1000;

$worker2 = new worker3();
$worker2->name = "Vasja";
$worker2->age = 126;
$worker2->salary = 2000;


echo "Сумма зарплат Ивана и Василия: " . ($worker->salary + $worker2->salary) . " грн." . "<br>";
echo "Сумма возрастов Ивана и Василия: " . ($worker->age + $worker2->age) . " год." . "<br>";


