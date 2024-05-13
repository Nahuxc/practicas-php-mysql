<?php


/* funciones para arrays */

$newArr = ["bad bunny", "2pac", "jennifer lopez", "alfredo"];

$arrnum = [1, 8, 4, 3, 4, 2];


/* ordenar */

asort($newArr); /* los ordena por orden alfabetico */

arsort($newArr); /* lo ordena a la inversa */

sort($arrnum); /* tambien sirve para ordenar numeros y palabras */


/* añadir elementos array */


$newArr[] = "dato nuevo"; /* utilizando los [] podemos añadir un objeto nuevo al array */

var_dump($newArr)


/* otra forma seria con el array_push */

array_push($newArr, "warrior"); /* indicamos el array y el elemento a añadir */



?>