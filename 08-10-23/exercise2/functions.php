<?php
function exists(string $filename, string $username): bool {
    $file = fopen($filename, 'r');
    while ($user = fgetcsv($file)) {
        if ($user[0] == $username) return true;
    }
    fclose($file);
    return false;
}


function signup(string $filename, string $username, string $password) {
    $file = fopen($filename, 'a');
    fwrite($file, $username . ',' . $password . PHP_EOL);
    fclose($file);
}


