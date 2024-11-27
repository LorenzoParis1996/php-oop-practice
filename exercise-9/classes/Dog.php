<?php

require_once __DIR__ . '/Animal.php';

class Dog extends Animal {
    public $food;
    public $sound;

    public function __construct($food, $sound)
    {
        $this->food = $food;
        $this->sound = $sound;
    }

    public function eat() {
        return "Dog eats " . $this->food;
    }

    public function makeSound()
    {
        return "Dog makes " . $this->sound;
    }
}