<?php
include_once 'speaker.php';

class Animal implements Speaker
{
    public string $name;

    public function __construct(string $name)
    {
        $this -> name = $name;
    }

    public function talk()
    {
        return 'Animal sound';
    }
}