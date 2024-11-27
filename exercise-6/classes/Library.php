<?php 

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Magazine.php';
require_once __DIR__ . '/DVD.php';

class Library {
    public $media;

    public function __construct($media)
    {
        $this->media = $media;
    }

    public function typeOfMedia() {
        return "This type of media";
    }
}