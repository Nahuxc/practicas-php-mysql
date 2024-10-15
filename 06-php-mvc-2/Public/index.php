<?php

/* importamos todo desde el autoload para no tener que importar en cada archivo, sino directamente en la rama principal el index */
require_once(__DIR__."/../App/autoload.php");

$router = new Router();

$router->run();


?>