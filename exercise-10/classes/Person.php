<?php

require_once __DIR__ . '/Employee.php';

class Person {
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getPersonInfo() {
        return "First name: " . $this->firstName . " Last name: " . $this->lastName . " Age: " . $this->age;
    }
}