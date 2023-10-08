<?php
  /**
     * Reads a CSV file containing user data and returns an array of users.
     *
     * @param string $filename - The name of the CSV file to read.
     * @return array - An array containing user data from the CSV file.
     */
    function users_csv(string $filename): array {
        $users = [];
        $file = fopen($filename, 'r');
        while ($data = fgetcsv($file)) {
            array_push($users, $data);
        }
        fclose($file);
        return $users;
    }

    /**
     * Validates user credentials by checking against an array of users.
     *
     * @param array $users - An array of user data.
     * @param string $username - The username to be validated.
     * @param string $password - The password to be validated.
     * @return bool - True if the credentials are valid, false otherwise.
     */
    function login(array $users, string $username, string $password): bool {
        foreach($users as $user) {
            if ($user[0] == $username && trim($user[1]) == $password) return true;
        }
        return false;
    }


    