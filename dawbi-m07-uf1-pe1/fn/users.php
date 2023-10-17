<?php
/**
 * 
 */
function register(string $filename, array $user): bool {
    $register = false;
    $stream = fopen($filename, 'r+');
    while ($data = fgetcsv($stream, separator: ';')) {
        if ($data[0] != $user[0]) {
            fwrite($stream, $user[0] . ';' . $user[1] . ';' . $user[2] . ';' . $user[3] . ';' . $user[4] . PHP_EOL); 
            $register = true;
        }
    }
    fclose($stream);
    return $register;
}


/**
 * 
 */
function login(string $filename, string $username, string $password): bool {
    $login = false;
    $stream = fopen($filename, 'r');
    while ($data = fgetcsv($stream, separator: ';')) {
        if ($data[0] == $username && $data[1] == $password) {
            $login = true;
        }
    }
    fclose($stream);
    return $login;
}


/**
 * 
 */
function user(string $filename, string $username): array {
    $stream = fopen($filename, 'r');
    while ($data = fgetcsv($stream, separator: ';')) {
        if ($data[0] == $username) {
            $user = array('rol' => $data[2], 'name' => $data[3] . ' ' . $data[4]);
        }
    }
    fclose($stream);
    return $user;
}

