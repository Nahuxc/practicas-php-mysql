<?php

/* ejercicio 1: hacer un programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:

- recorrerlo y mostrarlo
- ordenarlo y mostrarlo
- mostrar su longitud
- buscar algun elemento

*/


$numbers = [6,5,8,4,2,7,1,3]; /* array de numeros */


/* funcion para generar el array y mostrarlo */
function getArray($numbers){

    $resultado = ""; /* creamos un contenedor donde guardar todos nuestros datos del array */

    foreach($numbers as $number){
        /* usamos el .=  para que con cada iteracion concatene junto con lo anterior dentro del array */
        $resultado .= $number."<br>"; /* output: array */
    }

    /* retornamos el resultado */
    return $resultado;
}


echo "<hr>";
echo "<h1>Array por defecto</h1>";

/* recorremos y mostramos el array */
 
echo getArray($numbers); /* mostramos el array */

echo "<br>";


sort($numbers); /* array ordenado */

echo "<hr>";
echo "<h1>Array Ordenado</h1>";

echo getArray($numbers); /* mostramos el array */

echo "<br>";

echo "<hr>";

echo "longitud del array: ".count($numbers); /* conteo de objetos dentro del array */


echo "<br>";

echo "<hr>";


/* buscar numeros en el array */

if(isset($_GET["numero"])){

    $numSearch = $_GET["numero"];
    
    echo "<h1>buscar en el array el numero $numSearch</h1>";
    
    if(array_search($numSearch, $numbers)){
        echo "<p>el numero buscado existe en el array</p>";
    }else{
        echo "<p>no existe en el array</p>";
    }

}




?>