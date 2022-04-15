<?php

    //Autoload clases
    spl_autoload_register(function ($class) {
        if(file_exists("./Vendor/".$class.".php")){
            require_once ("./Vendor/".$class.".php");
        }
    });

    //Validate if the controller exist
    if(file_exists("./Controllers/".$controller.".php"))
    {
        require_once("./Controllers/".$controller.".php");        
        $controller = new $controller();
        
        if(!empty($method) && method_exists($controller , $method)){
           
           $controller->{$method}($params);

        }else{
            echo 'No existe método'.PHP_EOL;
        }
    }else{
       echo 'No existe el controlador'.PHP_EOL;

    }

?>