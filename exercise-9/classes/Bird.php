<?php

require_once __DIR__ . '/Animal.php';

class Bird extends Animal {
    public $food;
    public $sound;

    public function __construct($food, $sound)
    {
        $this->food = $food;
        $this->sound = $sound;
    }

    public function eat() {
        return "Bird eats " . $this->food;
    }

    public function makeSound()
    {
        return "Bird makes " . $this->sound;
    }
}