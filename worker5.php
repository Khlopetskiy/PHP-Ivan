<?php


class Worker5
{
protected $name;
protected $age;

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}

class Worker5_1 extends Worker5 {

    private $salary;

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

}

$Worker = new Worker5_1();
$Worker->getName = "Ivan";
$Worker->getAge = 25;
$Worker->getSalary = 1000;

$Worker1 = new Worker5_1();
$Worker1->getName = "Vasja";
$Worker1->getAge = 26;
$Worker1->getSalary = 2000;

echo $Worker->getSalary + $Worker1->getSalary;

class Worker5_3 extends Worker5 {
    private $scholarship;

    /**
     * @param mixed $scholarship
     */
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    /**
     * @return mixed
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }

}
