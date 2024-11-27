<?php

require_once __DIR__ . '/Animal.php';

class Cat extends Animal {
    public $food;
    public $sound;

    public function __construct($food, $sound)
    {
        $this->food = $food;
        $this->sound = $sound;
    }

    public function eat() {
        return "Cat eats " . $this->food;
    }

    public function makeSound()
    {
        return "Cat makes " . $this->sound;
    }
}