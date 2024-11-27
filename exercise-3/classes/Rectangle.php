<?php

require_once __DIR__ . '/Shape.php';

class Rectangle extends Shape {
    
    private $width;
    private $length;

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

    public function calculateArea()
    {
        return $this->width * $this->length;
    }
}