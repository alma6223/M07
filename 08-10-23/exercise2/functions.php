<?php
/**
 * Checks if a given username exists in a CSV file.
 *
 * @param string $filename - The name of the CSV file to check.
 * @param string $username - The username to check for existence.
 * @return bool - True if the username exists, false otherwise.
 */
function exists(string $filename, string $username): bool {
    $file = fopen($filename, 'r');
    while ($user = fgetcsv($file)) {
        if ($user[0] == $username) return true;
    }
    fclose($file);
    return false;
}


/**
 * Adds a new user to a CSV file.
 *
 * @param string $filename - The name of the CSV file to which the user will be added.
 * @param string $username - The username of the new user.
 * @param string $password - The password of the new user.
 */
function signup(string $filename, string $username, string $password) {
    $file = fopen($filename, 'a');
    fwrite($file, $username . ',' . $password . PHP_EOL);
    fclose($file);
}


