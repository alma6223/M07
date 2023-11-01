<?php
include_once 'animal.php';

class Cat extends Animal
{
    public function talk()
    {
        return 'Miau';
    }
}