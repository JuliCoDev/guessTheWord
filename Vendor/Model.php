<?php
    class Model{
        public function __construct(){            
            $this->connectDatabase();
        }

        public function connectDatabase()
        {
            require_once('./Database/Database.php');
            $this->db = $db;
        }

    } 
?>