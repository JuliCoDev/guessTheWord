<?php
    class Mysql extends Conexion{
        private $conexion;
        private $strquery;
        private $arrValues;

        function __construct(){
            $this->connection = new Conexion();
            $this->connection = $this->connection->connect();
        }
    }
?>