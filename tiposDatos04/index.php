<?php


/*

///////////////////////////////

TIPOS DE DATOS:

entero (int / integer ) = 41

coma flotante / decimales (float/double) = 3.56

cadenas (string) = " tipo de texto "

boolean (bool ) = 1 o 0 / true o false

dato null ( no lleva contenido dentro )

array (coleccion de datos) = []

objetos = {}

/////////////////////////////


*/

/* consejos a tener encuenta: no podemos definir una variable empezando con un numero ejemplo; $1variable, esto lo va a tomar como invalido

al igual que si ponemos

$vairable-nueva

no se puede usar el - porque nos va a dar error para declarar la variable


*/


$numeroFloat = 1.5;
$numero = 13;
$string = "hola mundo";

/* el gettype nos ayuda a saber que tipo de dato tenemos en una variable */

echo gettype($numeroFloat)."<br>"; /* console: double */
echo gettype($numero)."<br>"; /* console: integer */
echo gettype($string)."<br>"; /*  console: string  */


$content = 414;


/* podemos concatenar variables dentro de un string sin necesidad de cambiar de comillas a backticks */

echo "$string $numero"."<br>";


//debuear


$mi_nombre = "jorge";

/* nos ayuda a debugear y nos da paso a saber que esta mal en la variable o donde se ubica sin necesidad de imprimir nada en pantalla, pero si en la consola */
var_dump($mi_nombre);



?>