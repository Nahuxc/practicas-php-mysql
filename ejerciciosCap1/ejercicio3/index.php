<?php


/* 

ejericio 3: escribir un programa que imprima por pantalla los cuadrados (que es un numero multiplicado por si mismo) de los primeros 40 numeros naturales
PD: utilizar bucle while

*/

$contador = 0;

/* con while */

while($contador <= 40){ //condicion
    //bloque
    $cuadrado = $contador*$contador;
    echo $cuadrado."<br>";

    $contador++;
}

/* con for */

for($i = 0; $i <= 40; $i++){
    $cuadrado = $i * $i;
    echo $cuadrado."<br>";
}



?>