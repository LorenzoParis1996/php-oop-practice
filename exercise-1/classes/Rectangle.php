<?php 

class Rectangle {

    public $width;
    public $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getLength() {
        return $this->length;
    }

    public function calculateArea() {
        return $this-> width * $this->length;
    }

    public function calculatePerimeter() {
        return 2 * ($this->width + $this->length);
    }

}