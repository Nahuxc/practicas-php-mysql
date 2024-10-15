<?php

/* obtenemos el directorio donde nos encontramos */
$folderPath = dirname($_SERVER["SCRIPT_NAME"]);
$urlPath = $_SERVER["REQUEST_URI"];
$url = substr($urlPath, strlen($folderPath)); /* obtenemos lo que pasamos por la url fuera del directorio principal */


define("URL", $url); /* definimos una constante para la url */


/* url para links de css o js */
define("URL_PATH", $folderPath);



?>