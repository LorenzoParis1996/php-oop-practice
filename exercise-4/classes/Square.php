<?php

require_once __DIR__ . '/../interfaces/Resizable.php';

class Square implements Resizable {

    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getSide() {
        return $this->side;
    }

    public function resize($factor) {
        $this->side *= $factor;
    }
}