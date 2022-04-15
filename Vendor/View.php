<?php

    class View{
        function getView($controller, $view, $data="")
        {
            $controller = get_class($controller);
            $controller = explode("Controller" , $controller);            
            $controller = $controller[0];

            if($controller == "Home"){
                $view = "Views/$view.php";
            }else{
                $view = "Views/".$controller."/".$view.".php";
            }

            require_once($view);
        }
    }
?>