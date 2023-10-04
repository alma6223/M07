<?php
    function users(string $filename): array {
        $users = [];
        $file = fopen($filename, 'r');
        while ($line = fgets($file)) {
            array_push($users, explode(',', trim($line)));
        }
        fclose($file);
        return $users;
    }

    
    function exists(array $users, string $username, string $password): string {
        $exists = '';
        foreach($users as $user) {
            $user[0] == $username && $user[1] == $password ? $exists = 'Correct' : $exists = 'Incorrect';
        }
        return $exists;
    }
