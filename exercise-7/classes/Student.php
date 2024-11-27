<?php 

class Student {
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayStudent() {
        return "Name:" . $this->name . ", Age:" . $this->age . ", Grade:" . $this->grade;
    }
}