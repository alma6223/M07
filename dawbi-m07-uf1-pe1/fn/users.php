<?php
/**
 * 
 */
function register(string $filename, array $user) {
    $stream = fopen($filename, 'r+');
    while ($users = fgetcsv($stream, separator: ';')) {
        if ($users[0] != $user['username']) {
            fwrite($stream, $user['username'] . ';' . $user['password'] . ';' . $user['name'] . ';' . $user['surname'] . PHP_EOL); 
        }
    }
    fclose($stream);
}
