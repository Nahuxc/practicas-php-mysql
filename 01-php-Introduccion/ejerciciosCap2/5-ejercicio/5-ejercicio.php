<?php

/* 

crear un array con el contenido de la tabla:

ACCION  AVENTURA  DEPORTES
GTA     ASSESINS  FIFA
COD     CRASH     PES
PUGB    MARIO     2K20

cada columna tiene que ir en un fichero separado(includes)

*/


$tablaArray = array(
    "ACCION" => array("PUBG","COD","GTA"),
    "AVENTURA" => array("MARIO","CRASH","ASSESSINS"),
    "DEPORTES" => array("FIFA","PES","2K20")
);


$categorias = array_keys($tablaArray);

?>


<table border="1">
    <?php include_once "./include/encabezado.php"; ?>
    <?php include_once "./include/primera.php"; ?>
    <?php include_once "./include/segunda.php"; ?>
    <?php include_once "./include/tercera.php"; ?>
</table>
