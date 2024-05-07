<?php

/* 
variables locales:  son las que se definen dentro de una funcion y no pueden ser usadas fuera de la fucnion, solo estan disponibles dentro.  a no ser que hagamos un return

variables globales: son las que se declaran fuera de una funcion y estan disponible dentro y fuera de las funciones


*/


$frase =  " hola buenos dias, bienvenido "; /* variable global */

function usoFrase(){

    global $frase; /* declaramos que es una variable global para poder usarla dentro de la funcion */

    echo "<h1> $frase </h1>";


    $year = 2048; /* variable dentro del ambito de la funcion que seria local */
    echo  "<h1> $year </h1>";

    //en caso de querer usarla deberiamos hacer un return
    return $year;

}



usoFrase(); /* llamamos la funcion de manera normal */

echo usoFrase(); /* pedimos el dato del return y el resto de la funcion por el echo */



/* funciones variables */


function buenosDias(){
    return "hola buenos dias"."<br>";
}

function buenasTardes(){
    return "hola buenas tardes"."<br>";
}

function buenasNoches(){
    return "hola buenas noches"."<br>";
}

/* podemos meter el nombre de la funcion en una variable para usarla dentro de ella */

$horario = "buenasNoches"; /* dentro ponemos el nombre de la funcion */

echo $horario(); /* llamamos al metodo desde la variable */

// 2da forma de hacer con la concatenacion



$horarios = "Noches";

$funcionVar = "buenas".$horarios;

echo $funcionVar();



?>