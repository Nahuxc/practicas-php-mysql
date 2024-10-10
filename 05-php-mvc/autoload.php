<?php


/* auto cargado de clases */
function app_autoLoader($pathclass){
    require_once "controllers/".$pathclass.".php";
}


spl_autoload_register("app_autoLoader");


?>