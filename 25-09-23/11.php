<?php
    function complement(string $sequence): string {
        $sequence = strtolower($sequence);
        for ($i = 0; $i < strlen($sequence); $i++) {
            if ($sequence[$i] == 'a') {
                $sequence[$i] = 't';
            } elseif ($sequence[$i] == 't') {
                $sequence[$i] = 'a';
            } elseif ($sequence[$i] == 'c') {
                $sequence[$i] = 'g';
            } elseif ($sequence[$i] == 'g') {
                $sequence[$i] = 'c';
            }
        }
        return $sequence;
    }
?>