<?php 

require_once __DIR__ . '/Library.php';

class Magazine extends Library {
    public function typeOfMedia()
    {
        return "I'm a " . $this->media;
    }
}