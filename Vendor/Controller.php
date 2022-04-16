<?php

    class Controller{
        public function __construct(){
            $this->view = new View();
            $this->loadModel();                     
        }

        public function loadModel()
        {   
            $class = get_class($this);
            $class = explode("Controller" , $class);
            $class = $class[0];
            require_once("./Models/{$class}.php");  
            $this->model = new $class();
        }

        

    } 
    

?>