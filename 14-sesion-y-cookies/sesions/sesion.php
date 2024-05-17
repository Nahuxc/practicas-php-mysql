<?php

/* 

Sesion: almanacenar y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador.

*/

//iniciar la sesion
session_start();

/* variable local */
$variable_normal = "cadena de texto";

/* variable de sesion */
$_SESSION["variable_persistente"] = "Sesion Activa"; //esta sesion vamos a poder usarlo en cualquier parte de mi dominio

echo $variable_normal."<br>";
echo $_SESSION["variable_persistente"]."<br>";


?>