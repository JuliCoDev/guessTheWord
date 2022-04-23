<?php

    class Connection{

        public function __construct(){
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
            try {
                $this->connect = new PDO($connectionString, DB_USER, DB_PASSWROD);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e ) {
                $this->connect = "Error de conexion";
                echo "ERROR: " .$e->getMessage();            
            }
        }

        public function connect(){
            return $this->connect;
        }
    }
?>