<?php
    function message( int $age ): str {
        if ( $age < 16 ) {
            return 'Studying';
        } elseif ( $age >= 16 && $age < 66 ) {
            return 'Working';
        } else {
            return 'Retired';
        }
    }
    echo message(20);
?>