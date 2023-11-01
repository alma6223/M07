<?php
include_once 'cat.php';
include_once 'dog.php';
include_once 'clock.php';

$objects = array();
$date = new DateTime();

$cat = new Cat('Lola');
$dog = new Dog('Wonder');
$clock = new Clock($date);

$objects[] = $cat;
$objects[] = $dog;
$objects[] = $clock;

foreach($objects as $object)
{
    echo $object -> talk() . '<br>';
}