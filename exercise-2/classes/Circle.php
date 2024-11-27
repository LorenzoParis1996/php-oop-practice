<?php 

class Circle {

    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea() {
        return 3.14 * pow($this->radius, 2);
    }

    public function calculateCircumference() {
        return 2 * 3.14 * $this->radius;
    }
}