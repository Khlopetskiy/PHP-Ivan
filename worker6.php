<?php

class User {
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


class Worker extends User
{

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

class Driver extends Worker
{
    private $driving_experience;
    private $driving_category;

    /**
     * @param mixed $driving_experience
     */
    public function setDrivingExperience($driving_experience): void
    {
        $this->driving_experience = $driving_experience;
    }

    /**
     * @return mixed
     */
    public function getDrivingExperience()
    {
        return $this->driving_experience;
    }

    /**
     * @param mixed $driving_category
     */
    public function setDrivingCategory($driving_category): void
    {
        $this->driving_category = $driving_category;
    }

    /**
     * @return mixed
     */
    public function getDrivingCategory()
    {
        return $this->driving_category;
    }
}