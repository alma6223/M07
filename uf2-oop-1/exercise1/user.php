<?php
class User 
{
    public int $id;
    public string $username;
    public string $name;
    public string $surname;
    public string $nif;
    public int $age;

    public function __construct(int $id, string $username, string $name, string $surname, string $nif, int $age)
    {
        $this -> id = $id;
        $this -> username = $username;
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> nif = $nif;
        $this -> age = $age;
    }
}