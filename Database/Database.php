<?php

class Database extends SQLite3
{
    function __construct()
    {
        $this->open('guesstheword.db');
    }
}

$db = new Database();
// $db->busyTimeout(5000);

?>