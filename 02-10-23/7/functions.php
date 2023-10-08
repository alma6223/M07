<?php
    /**
     * Converts an amount from Euro (EUR) to another currency.
     *
     * @param int $amount The amount to convert.
     * @param string $currency The target currency code (e.g., 'usd', 'jpy').
     * @return float The converted amount.
     */
    function eur(int $amount, string $currency): float {
        if ($currency == 'usd') {
            return $amount * 0.94;
        } elseif ($currency == 'jpy') {
            return $amount * 0.0063;
        }
    }

    /**
     * Converts an amount from US Dollar (USD) to another currency.
     *
     * @param int $amount The amount to convert.
     * @param string $currency The target currency code (e.g., 'eur', 'jpy').
     * @return float The converted amount.
     */
    function usd(int $amount, string $currency): float {
        if ($currency == 'eur') {
            return $amount * 1.06;
        } elseif ($currency == 'jpy') {
            return $amount * 0.0067;
        }
    }

    /**
     * Converts an amount from Japanese Yen (JPY) to another currency.
     *
     * @param int $amount The amount to convert.
     * @param string $currency The target currency code (e.g., 'usd', 'eur').
     * @return float The converted amount.
     */
    function jpy(int $amount, string $currency): float {
        if ($currency == 'usd') {
            return $amount * 149.38;
        } elseif ($currency == 'eur') {
            return $amount * 158.15;
        }
    }
?>

