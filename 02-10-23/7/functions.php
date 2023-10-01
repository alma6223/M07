<?php
    function eur(int $amount, string $currency): float {
        if ($currency == 'usd') {
            return $amount * 0.94;
        } elseif ($currency == 'jpy') {
            return $amount * 0.0063;
        }
    }

    function usd(int $amount, string $currency): float {
        if ($currency == 'eur') {
            return $amount * 1.06;
        } elseif ($currency == 'jpy') {
            return $amount * 0.0067;
        }
    }

    function jpy(int $amount, string $currency): float {
        if ($currency == 'usd') {
            return $amount * 149.38;
        } elseif ($currency == 'eur') {
            return $amount * 158.15;
        }
    }
