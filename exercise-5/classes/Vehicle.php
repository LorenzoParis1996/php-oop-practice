<?php 

class Vehicle {

    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayProperties() {
        return  $this->brand . $this->model . $this->year;
    }
}