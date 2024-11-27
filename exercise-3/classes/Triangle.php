<?php

require_once __DIR__ . '/Shape.php';

class Triangle extends Shape {

    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase() {
        return $this->base;
    }

    public function getHeight() {
        return $this->height;
    }

    public function calculateArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}