<?php
/* tipos de variables */

$numero = 12; /* tipo number */
$string = "mafmpa"; /* tipo string */
$boolean = true; /* tipo boolean */
$numeroDecimal = 12.5; /* tipo decimal float */
$null = null; /* tipo vacio o null o undefined */

/* definir constante */

define("nombre", "martin"); /* escribimos primer parametro nombre de la variable y segundo su valor */

echo nombre."<br>"; /* se llama sin el $ */


/* obtener el tipo */

echo gettype($string)."<br>";

/* debugear */

$mi_nombre[] = "jorge martinez";

var_dump($mi_nombre);

?>