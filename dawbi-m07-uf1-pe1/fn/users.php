<?php
/**
 * checks if the user does not exist and adds it to the file
 * @param string $filename csv filename
 * @param array $user user data
 * @return bool register status 
 */
function register(string $filename, array $user): bool {
    $register = true;
    $stream = fopen($filename, 'r+');
    while ($data = fgetcsv($stream, separator: ';')) {
		if ($data[0] == $user['username']) {
			$register = false;
		}
	}
	if ($register) {
		$string = $user['username'] . ';' . $user['password'] . ';' . $user['rol'] . ';' . $user['name'] . ';' . $user['surname'] . PHP_EOL;
		fwrite($stream, $string);
	}
    fclose($stream);
    return $register;
}


/**
 * checks the file if the username and password are correct
 * @param string $filename csv file
 * @param string $username
 * @param string $password
 * @return bool login status
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
 * obtains an array with all the user data
 * @param string $filename csv filename
 * @param string $username
 * @return array user data
 */
function user(string $filename, string $username): array {
    $stream = fopen($filename, 'r');
    while ($data = fgetcsv($stream, separator: ';')) {
        if ($data[0] == $username) {
			$user = array(
				'username' => $data[0],
            	'password' => $data[1],
            	'rol' => $data[2],
            	'name' => $data[3],
            	'surname' => $data[4]
			);
		} 
    }
    fclose($stream);
    return $user;
}
