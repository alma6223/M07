<?php
    /**
     * Adds two numbers.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     *
     * @return int|float The sum of $a and $b.
     */
    function add(int|float $a, int|float $b): int|float {
        return $a + $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     *
     * @return int|float The product of $a and $b.
     */
    function multiply(int|float $a, int|float $b): int|float {
        return $a * $b;
    }

    /**
     * Subtracts the second number from the first.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     *
     * @return int|float The result of subtracting $b from $a.
     */
    function subtract(int|float $a, int|float $b): int|float {
        return $a - $b;
    }

    /**
     * Divides the first number by the second.
     *
     * @param int|float $a The numerator.
     * @param int|float $b The denominator (must not be zero).
     *
     * @return int|float The result of dividing $a by $b.
     */
    function divide(int|float $a, int|float $b): int|float|string {
        if ($b == 0) {
            return 'Infinity';
        } else {
            return $a / $b;
        }
        
    }
?>
