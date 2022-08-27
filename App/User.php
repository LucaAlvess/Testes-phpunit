<?php

class User
{
    private $name;
    private $lastName;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        echo $this->name . ' ' . $this->lastName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge(bool $isString = false)
    {
        if($isString) return $this->age . ' Anos';

        return $this->age;
    }
}