<?php


/* auto cargado de clases */
function app_autoLoader($pathclass){
    include $pathclass.".php";
}


spl_autoload_register("app_autoLoader");


?>