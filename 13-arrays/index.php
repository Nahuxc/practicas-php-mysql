<?php

/* 
ARRAYS:
un array es una coleccion de datos en donde podemos meterle mucha cantidad de variables o datos. bajo un unico nombre y para acceder a esos valores podemos usar un indice numero o alfanumerico


*/


$peliculas = array("spiderman", "mario bros", "sherlok");

echo var_dump($peliculas); /* debugeamos para ver que tiene dentro */

echo $peliculas[0]; /* con los corchetes y el indice podemos usar o ver cada variable */


$cantantes = ["bad bunny", "2pac", "jennifer lopez"]; /* otra forma de definirlo es con los corchetes */

echo $cantantes[1];











/* recorrer arrays con FOR */


$newArr = ["bad bunny", "2pac", "jennifer lopez"];


/* de esta forma podemos mostrar el listado con un FOR */

for ($i=0; $i < count($newArr); $i++) { /* con count podemos sacar la cantidad de elementos que tiene */
    echo "<li>".$newArr[$i]."</li>";
}

/* ponemos el contador en 0, luego si 0 es menor a la cantidad de objetos dentro del array, se va a estar iterando, hasta dejar de cumplir la condicion 

y luego para devolver los objetos llamamos al arreglo y le ponemos los corchetes para determinar su indice, asi de esa forma muestra cada uno de los objetos por cada iteracion que haga

*/








/* bucle FOREACH */

echo "<h1>listado con foreach</h1>";

foreach($newArr as $obj){ /* determinamos el arreglo y le ponemos un nombre a su indice */
    
    echo $obj."<br>";
}








/* array asociativos  */

$personas = array(
    "nombre" => "jorge",
    "apellidos" => "robles",
    "web" => "youtube"
);



var_dump($personas); /* sacamos todos los valores del objeto */

echo "<br>";

var_dump($personas["nombre"]); /* sacamos por nombre de indice sus datos */





echo "<br>";




/* arrays multidimensionales */

$contactos = array(
    array(
        "nombre" => "antonio",
        "email" => "bfanfi@gmail.com"
    ),
    array(
        "nombre" => "Jorge pedro",
        "email" => "jorgepdero32@gmail.com"
    ),
    array(
        "nombre" => "Martinez segundo",
        "email" => "example@gmail.com"
    )
);

echo "<br>";


/* para acceder a los indices */

echo $contactos[1]["nombre"]; /* primero conseguimos el array con el primer indice, y luego le indicamos el segundo indice */

echo "<br>";


/* para recorrerlo seria con un foreach por ejemplo */

foreach($contactos as $key => $contacto){ /* indicamos el array, le ponemos una key y luego podemos acceder por su indice */
    echo "<br>";
    echo "nombre: ";
    echo $contacto["nombre"]."<br>";
}




















?>