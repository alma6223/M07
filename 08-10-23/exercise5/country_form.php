<?php
include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $population = $_POST['population'];
    $capital = $_POST['capital'];
    $country = $_POST['country'];
    $countries = countries('countries.csv');
    check_changes($countries, $population, $country, $capital);
    change_data($countries, 'countries.csv');
}