<?php
include_once 'speaker.php';

class Clock implements Speaker
{
    public DateTime $date;

    public function __construct(DateTime $date)
    {
        $this -> date = $date;
    }

    public function talk()
    {
        return 'Tic Tac';
    }
}