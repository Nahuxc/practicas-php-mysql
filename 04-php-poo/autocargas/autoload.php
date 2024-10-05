<?php

/* auto cargado de clases */
function app_autoLoader($class){
    require_once "clases/".$class.".php";
}


spl_autoload_register("app_autoLoader");


?>