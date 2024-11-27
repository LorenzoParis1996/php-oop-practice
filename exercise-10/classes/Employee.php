<?php

require_once __DIR__ . '/Person.php';

class Employee extends Person {
    public $salary;
    public $position;

    public function __construct($firstName, $lastName, $age, $salary, $position)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getEmployeeDetails() {
        return "Salary: " . $this->salary . " Position: " . $this->position;
    }
}