<?php
    function users_csv(string $filename): array {
        $users = [];
        $file = fopen($filename, 'r');
        while ($data = fgetcsv($file)) {
            array_push($users, $data);
        }
        fclose($file);
        return $users;
    }

    
    function login(array $users, string $username, string $password): bool {
        foreach($users as $user) {
            if ($user[0] == $username && $user[1] == $password) return true;
        }
        return false;
    }

