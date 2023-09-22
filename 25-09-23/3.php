<?php
    function celsius(int $fahrenheit): int {
        return ($fahrenheit - 32) / 1.8;
    }

    function fahrenheit(int $celsius): int {
        return ($celsius * 1.8) + 32;
    }
?>