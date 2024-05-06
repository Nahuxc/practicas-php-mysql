<?php

//FUNCIONES  -- crear funciones 1 --

/* una funcion es un conjunto de instrucciones agrupadas baja un nombre concereto y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos */

function games($fn){ /* parametros en () */

    //conjunto de instrucciones
    $fn();
}


/* ejemplo 2 */
function tabla($num){
    echo "<table>";
        for ($i=0; $i <= 10; $i++) {
            echo "<td>";
                echo ($i*$num) ;
            echo "<td/>";
        }
    echo "</table>";
}

function mostrarNombres(){
    echo "jorges"."<br>";
    echo "luis"."<br>";
    echo "martin"."<br>";
    echo "bruno"."<br>";
}


/* llamado de funciones */

/* tabla(2);


mostrarNombres();

games(function(){
    echo "soy una funcion dentro de otra";
}) */




/// -- varios parametros / argumentos





?>