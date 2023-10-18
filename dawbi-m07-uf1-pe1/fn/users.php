<?php
/**
 * 
 */
function register(string $filename, array $user): bool {
    $register = false;
    $stream = fopen($filename, 'r+');
    while ($data = fgetcsv($stream, separator: ';')) {
        if ($data[0] != $user['username']) $register = true;
    }
    if ($register) fwrite($stream, $user['username'] . ';' . $user['password'] . ';' . $user['rol'] . ';' . $user['name'] . ';' . $user['surname'] . PHP_EOL); 
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
        if ($data[0] == $username && $data[1] == $password) $login = true;
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
        if ($data[0] == $username) $user = array(
            'username' => $data[0],
            'password' => $data[1],
            'rol' => $data[2],
            'name' => $data[3],
            'surname' => $data[4]
        ); 
    }
    fclose($stream);
    return $user;
}
