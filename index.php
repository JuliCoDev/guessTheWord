<?php

    //Obtener la url a la que se está ingresando
    //El parámetro url esta definido en htacces
    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

    //Partir url para obtener el controlador y metodo
    $accesUrl = explode("/" , $url);
    $controller = $accesUrl[0]."Controller";
    $method = $accesUrl[0];
    $params = "";



    //Validate method if the url have "/" in the end
    if(!empty($accesUrl[1]) && $accesUrl[1] !== ""){
        $method = $accesUrl[1];
    }

    require_once('./Vendor/Autoload.php');


?>