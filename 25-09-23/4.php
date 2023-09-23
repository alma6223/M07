<?php
    function message( int $age ): string {
        if ( $age < 16 ) {
            return 'Studying';
        } elseif ( $age >= 16 && $age < 66 ) {
            return 'Working';
        } else {
            return 'Retired';
        }
    }
?>