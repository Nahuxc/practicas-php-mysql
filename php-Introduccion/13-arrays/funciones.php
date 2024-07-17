<?php


/* funciones para arrays */



$newArr = ["bad bunny", "2pac", "jennifer lopez", "alfredo"];



$arrnum = [1, 8, 4, 3, 4, 2];








/* ordenar */

/* asort($newArr); */     /* los ordena por orden alfabetico */



/* arsort($newArr); */     /* lo ordena a la inversa */



/* sort($arrnum);  */    /* tambien sirve para ordenar numeros y palabras */












/* añadir elementos array */





$newArr[] = "dato nuevo"; /* utilizando los [] podemos añadir un objeto nuevo al array */

/* var_dump($newArr); */






/* otra forma seria con el array_push */


array_push($newArr, "warrior"); /* indicamos el array y el elemento a añadir */

/* var_dump($newArr); */




array_pop($newArr); /* para eliminar el ultimo elemento del array */

/* var_dump($newArr); */





unset($newArr[1]); /* en caso de querer quitar un item en concreto se utiliza unset */

// var_dump($newArr);   /* result: ["bad bunny","jennifer lopez", "alfredo"] se iria el 2pac */





/* sacar un elemento aleatorio de un array */


$indice = array_rand($newArr); /* nos da el indice del objeto que va a quitar */

// echo $newArr[$indice];




/* dar vuelta el array */


$reverseArray = array_reverse($newArr); /* da vuelta el array de forma contraria */

// var_dump($reverseArray);





/* buscar dentro de un array */


$searchResult = array_search("jennifer lopez", $newArr);

//var_dump($searchResult); /* nos da el indice el objeto del array, sino existe la busqueda va a devolver false */






/* count contar numero de elementos de un array, es similar al length */


echo count($newArr);


/* otro metodo es sizeof que tambien nos permite contar el numero de elementos */

echo sizeof($newArr);



?>