<?php

/* para poder usar la variable de las sesiones hay que hacer un sesion start */

session_start();


echo $_SESSION["variable_persistente"]."<br>"; /* aca podemos comprobar que podemos utilizar sus variables */


?>