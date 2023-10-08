<?php
    define('PRICES', [
        ['min' => 1, 'max' => 5, 'price' => 2],
        ['min' => 6, 'max' => 10, 'price' => 4],
        ['min' => 11, 'max' => 15, 'price' => 6],
        ['min' => 16, 'max' => 20, 'price' => 8],
    ]);

    /**
     * Calculates the cost based on the quantity of kilograms using the price array.
     *
     * @param int $kg The quantity of kilograms for which the cost will be calculated.
     * @return int The calculated cost based on the quantity of kilograms and the defined prices.
     */
    function amount(int $kg): int {
        foreach(PRICES as $value) {
            if ($kg >= $value['min'] && $kg <= $value['max']) {
                return $kg * $value['price'];
            }
        }
    }