<?php
    function index(array $array, string $value): int|string {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $value) {
                return $i;
            } else {
                return 'Value not found';
            }
        }
    }
?>