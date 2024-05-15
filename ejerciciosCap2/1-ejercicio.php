<?php

/* ejercicio 1: hacer un programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:

- recorrerlo y mostrarlo
- ordenarlo y mostrarlo
- mostrar su longitud
- buscar algun elemento

*/


$numbers = [6,5,8,4,2,1,7,3]; /* array de numeros */

echo "<hr>";
echo "<h1>Array por defecto</h1>";

/* recorremos y mostramos el array */
foreach($numbers as $number){
    echo $number; /* output: array */
}

echo "<br>";


sort($numbers); /* array ordenado */

echo "<hr>";
echo "<h1>Array Ordenado</h1>";

foreach($numbers as $number){
    echo $number; /* output: array ordenado */
}

echo "<br>";

echo "<hr>";

echo "longitud del array: ".count($numbers); /* conteo de objetos dentro del array */


echo "<br>";

echo "<hr>";


echo "<h1>Busqueda de objetos en el array</h1>";

$search = array_search(2, $numbers); /* busca el numero 2 en el array ordenado */

var_dump($search); /* en el indice 1 del array esta el 2  */

?>