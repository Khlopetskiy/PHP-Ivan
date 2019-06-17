<?php


class Worker4 {
    private $name;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    public function __construct()
    {

        $name = "Ivan";
        $age = 25;
        $salary = 1000;
        echo $age * $salary;
    }

}

echo "Произведение возраста и зарплаты Ivana: ";
$worker = new Worker4();
