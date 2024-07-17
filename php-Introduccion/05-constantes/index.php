<?php


//constante

//es una tipo de variable que contiene informacion pero no se puede variar


/* de esta manera definimos una constante */
define("nombre", "jorge");
define("number", 24);


/* para poder mostrarla en pantalla lo hacemos sin usar el $, solo ponemos el nombre de la constante */
echo nombre;









//constantes predefinidas

/* nos muestra el sistema operativo que usamos */
echo PHP_OS;

/* muestra la version de php que uso */
echo PHP_VERSION;

/* muestra las extensiones del php */

echo PHP_EXTENSION_DIR;

/* muestra el numero de la linea que estamos */

echo __LINE__;

/* saca el nombre de la funcion que usamos */

echo __FUNCTION__;


/* para usar las predefinidas solemos llamarlas con __ o php_ */



?>