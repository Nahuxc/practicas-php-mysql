<?php

/* con el htaccess lo que logramos es que siempre nos redirija al index php sin importar lo que ejecutemos en la url */


/* desde el directorio actual llamamos a los archivos */
require_once(__DIR__."/config.php");
require_once(__DIR__."/router.php");

/* creamos un objeto router y usamos su funcion para ejecutar */
$router = new Router();

$router->run();


?>