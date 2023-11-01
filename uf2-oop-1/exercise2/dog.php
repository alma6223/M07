<?php
include_once 'animal.php';

class Dog extends Animal
{
    public function talk()
    {
        return 'Guau';
    }
}